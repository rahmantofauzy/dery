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

		// General Settings
		$settings_general = $this->Settings_model->get_general_profile_settings();

		$data['web_header_name'] = $settings_general[0]->value_varchar_128;
		$data['web_title_name'] = $settings_general[1]->value_varchar_128;
		$data['web_i_am_skill'] = $settings_general[2]->value_text;
		$data['twitter'] = $settings_general[3]->value_text;
		$data['twitter_checkbox'] = $settings_general[3]->value_int_128;
		$data['facebook'] = $settings_general[4]->value_text;
		$data['facebook_checkbox'] = $settings_general[4]->value_int_128;
		$data['instagram'] = $settings_general[5]->value_text;
		$data['instagram_checkbox'] = $settings_general[5]->value_int_128;
		$data['google_plus'] = $settings_general[6]->value_text;
		$data['google_plus_checkbox'] = $settings_general[6]->value_int_128;
		$data['linkedin'] = $settings_general[7]->value_text;
		$data['linkedin_checkbox'] = $settings_general[7]->value_int_128;

		// About Settings
		$settings_about = $this->Settings_model->get_about_model_settings();

		$data['cv_content'] = $settings_about[0]->value_text;

		$this->load->view('dashboard/index', $data);
	}
}
