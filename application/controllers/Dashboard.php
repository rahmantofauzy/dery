<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	}  

	public function index()
	{
		$this->load->model('Settings_model');
		$settings = $this->Settings_model->get_general_profile_settings();

		$data['web_header_name'] = $settings[0]->value_varchar_128;
		$data['web_title_name'] = $settings[1]->value_varchar_128;
		$data['web_i_am_skill'] = $settings[2]->value_text;
		$data['twitter'] = $settings[3]->value_int_128;
		$data['facebook'] = $settings[4]->value_int_128;
		$data['instagram'] = $settings[5]->value_int_128;
		$data['google_plus'] = $settings[6]->value_int_128;
		$data['linkedin'] = $settings[7]->value_int_128;

		$this->load->view('dashboard/index', $data);
	}
}
