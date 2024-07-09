<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('auth/head');
        $this->load->view('auth/login');
        $this->load->view('auth/foot');
    }

    function register()
    {
        $this->load->view('auth/head');
        $this->load->view('auth/register');
        $this->load->view('auth/foot');
    }

}