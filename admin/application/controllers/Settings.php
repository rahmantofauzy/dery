<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpWord\IOFactory;

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

		$data['twitter'] = $settings[3]->value_text;
                $twitter_checked = $settings[3]->value_int_128;
		$data['twitter_checkbox'] = ($twitter_checked == 1) ? "checked" : "";

		$data['facebook'] = $settings[4]->value_text;
                $facebook_checked = $settings[4]->value_int_128;
		$data['facebook_checkbox'] = ($facebook_checked == 1) ? "checked" : "";

		$data['instagram'] = $settings[5]->value_text;
                $instagram_checked = $settings[5]->value_int_128;
		$data['instagram_checkbox'] = ($instagram_checked == 1) ? "checked" : "";

		$data['google_plus'] = $settings[6]->value_text;
                $google_plus_checked = $settings[6]->value_int_128;
		$data['google_plus_checkbox'] = ($google_plus_checked == 1) ? "checked" : "";

		$data['linkedin'] = $settings[7]->value_text;
                $linkedin_checked = $settings[7]->value_int_128;
		$data['linkedin_checkbox'] = ($linkedin_checked == 1) ? "checked" : "";


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

        function set_social_media()
        {
                $this->form_validation->set_rules('bypass', 'Bypass', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_general_profile_settings', 'No settings applied!');
                        redirect('Settings/profile');
                } else {

                        // $twitter = $this->input->post('twitter_link');
                        // $twitter_check = $this->input->post('twitter_checkbox') ? 1 : 0;
                        // $facebook = $this->input->post('facebook_link');
                        // $facebook_check = $this->input->post('facebook_checkbox') ? 1 : 0;
                        // $instagram = $this->input->post('instagram_link');
                        // $instagram_check = $this->input->post('instagram_checkbox') ? 1 : 0;
                        // $google_plus = $this->input->post('google_plus_link');
                        // $google_plus_check = $this->input->post('google_plus_checkbox') ? 1 : 0;
                        // $linkedin = $this->input->post('linkedin_link');
                        // $linkedin_check = $this->input->post('linkedin_checkbox') ? 1 : 0;
                        
                        
                        $data['twitter'] = $this->input->post('twitter_link');
                        $data['twitter_checkbox'] = $this->input->post('twitter_checkbox') ? 1 : 0;

                        $data['facebook'] = $this->input->post('facebook_link');
                        $data['facebook_checkbox'] = $this->input->post('facebook_checkbox') ? 1 : 0;

                        $data['instagram'] = $this->input->post('instagram_link');
                        $data['instagram_checkbox'] = $this->input->post('instagram_checkbox') ? 1 : 0;

                        $data['google_plus'] = $this->input->post('google_plus_link');
                        $data['google_plus_checkbox'] = $this->input->post('google_plus_checkbox') ? 1 : 0;

                        $data['linkedin'] = $this->input->post('linkedin_link');
                        $data['linkedin_checkbox'] = $this->input->post('linkedin_checkbox') ? 1 : 0;

                        $this->General_profile_settings_model->save_social_media($data);

                        $this->session->set_flashdata('success_general_profile_settings', 'Settings applied!');
                        redirect('Settings/profile');

                }
        }

        function upload_cv()
        {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'doc|docx';
                $config['max_size'] = 2048;
        
                $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('cv_file')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error_about_profile_settings', 'Error encountered while processing: ' . $error);
                        redirect('Settings/profile');
                } else {
                        $data = $this->upload->data();
                        $file_path = $data['full_path'];

                        // $phpWord = IOFactory::load($file_path);
                        // $htmlWriter = IOFactory::createWriter($phpWord, 'HTML');
                        // $htmlContent = $htmlWriter->getContent();

                        // Save to database or process further as needed
                        // ...

                        // $dom = new DOMDocument();
                        // libxml_use_internal_errors(true);
                        // $dom->loadHTML($htmlContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                        // libxml_clear_errors();
        
                        // // Tambahkan class Bootstrap 5 ke elemen-elemen yang diperlukan
                        // foreach ($dom->getElementsByTagName('p') as $paragraph) {
                        // $paragraph->setAttribute('class', 'mb-3');
                        // }
        
                        // Dapatkan HTML yang telah dimodifikasi
                        // $modifiedHtmlContent = $dom->saveHTML();

                        $this->session->set_flashdata('success_about_profile_settings', 'Settings applied!');
                        redirect('Settings/profile');
                }

        }
}
