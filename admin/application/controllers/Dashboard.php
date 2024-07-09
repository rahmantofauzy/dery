<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        public function __construct() {
                parent::__construct();
                // $this->load->model('User_model');
        }

        public function index()
        {
                $this->load->view('component/head');
                $this->load->view('component/top');
                $this->load->view('component/side');
                $this->load->view('dashboard/index');
                $this->load->view('component/foot');
        }
}