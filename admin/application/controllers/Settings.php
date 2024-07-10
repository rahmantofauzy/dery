<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->library('form_validation');

                $this->load->model('General_profile_settings_model');
        }       

        public function index()
        {
                $data['title'] = 'Settings -> Profile';
                $this->load->view('component/head', $data);
                $this->load->view('component/top');
                $this->load->view('component/side');
                $this->load->view('settings/profile/index');
                $this->load->view('component/foot');
        }

        public function profile()
        {
                $settings = $this->General_profile_settings_model->get_general_profile_settings();

                $data['web_header_name'] = $settings[0]->value_varchar_128;
                $data['web_title_name'] = $settings[1]->value_varchar_128;
                $data['web_i_am_skill'] = $settings[2]->value_text;
                

                $data['title'] = 'Settings -> Profile';       
                $this->load->view('component/head', $data);
                $this->load->view('component/top');
                $this->load->view('component/side');
                $this->load->view('settings/profile/index');
                $this->load->view('component/foot');
        }

        function set_web_header_name()
        {
                $this->form_validation->set_rules('web_header_name', 'Web Header Name', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_general_profile_settings', 'No settings applied!');
                        redirect('Settings/profile');
                        // echo "No settings applied!";
                } else {

                        $web_header_name = $this->input->post('web_header_name');

                        // echo $web_title_name;
                        $this->General_profile_settings_model->save_web_header_name($web_header_name);
                        
                        $this->session->set_flashdata('success_general_profile_settings', 'Settings applied!');
                        redirect('Settings/profile');
                }
        }

        function set_web_title_name()
        {
                $this->form_validation->set_rules('web_title_name', 'Web Title Name', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_general_profile_settings', 'No settings applied!');
                        redirect('Settings/profile');
                        // echo "No settings applied!";
                } else {

                        $web_title_name = $this->input->post('web_title_name');

                        // echo $web_title_name;
                        $this->General_profile_settings_model->save_web_title_name($web_title_name);
                        
                        $this->session->set_flashdata('success_general_profile_settings', 'Settings applied!');
                        redirect('Settings/profile');
                }
        }

        function set_web_i_am_skill()
        {
                $this->form_validation->set_rules('web_i_am_skill', 'Web I am skill', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_general_profile_settings', 'No settings applied!');
                        redirect('Settings/profile');
                        // echo "No settings applied!";
                } else {

                        $web_i_am_skill = $this->input->post('web_i_am_skill');

                        // echo $web_i_am_skill;
                        $this->General_profile_settings_model->save_web_i_am_skill($web_i_am_skill);
                        
                        $this->session->set_flashdata('success_general_profile_settings', 'Settings applied!');
                        redirect('Settings/profile');
                }
        }
}
