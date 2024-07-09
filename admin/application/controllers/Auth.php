<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('component/head', $data);
        $this->load->view('auth/index');
        $this->load->view('component/foot');
    }

    public function login()
    {
        $this->load->view('component/head');
        $this->load->view('auth/login');
        $this->load->view('component/foot');
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email is already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => "Password doesn't match!",
            'min_length' => "Password too short!"
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false)
        {
            $data['title'] = 'Register';
            $this->load->view('component/head', $data);
            $this->load->view('auth/register');
            $this->load->view('component/foot');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('success', 'Your account request is sent! please check your email');
            redirect('auth');
        }
    }
}