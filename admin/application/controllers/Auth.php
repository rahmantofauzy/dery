<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('component/head');
        $this->load->view('auth/index');
        $this->load->view('component/foot');
    }

    function login()
    {
        $this->load->view('component/head');
        $this->load->view('auth/login');
        $this->load->view('component/foot');
    }

    function register()
    {
        $this->load->view('component/head');
        $this->load->view('auth/register');
        $this->load->view('component/foot');
    }

}