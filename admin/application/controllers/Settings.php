<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpWord\IOFactory;

class Settings extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->library('form_validation');
                // $this->load->library('upload');

                $this->load->model('Profile_settings_model');
                $this->load->model('About_settings_model');
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
                // General Profile Settings Page
                $settings_general = $this->Profile_settings_model->get_profile_settings();

                $data['web_header_name'] = $settings_general[0]->value_varchar_128;
                $data['web_title_name'] = $settings_general[1]->value_varchar_128;
                $data['web_i_am_skill'] = $settings_general[2]->value_text;

                //Social Media
		$data['twitter'] = $settings_general[3]->value_text;
                $twitter_checked = $settings_general[3]->value_int_128;
		$data['twitter_checkbox'] = ($twitter_checked == 1) ? "checked" : "";

		$data['facebook'] = $settings_general[4]->value_text;
                $facebook_checked = $settings_general[4]->value_int_128;
		$data['facebook_checkbox'] = ($facebook_checked == 1) ? "checked" : "";

		$data['instagram'] = $settings_general[5]->value_text;
                $instagram_checked = $settings_general[5]->value_int_128;
		$data['instagram_checkbox'] = ($instagram_checked == 1) ? "checked" : "";

		$data['google_plus'] = $settings_general[6]->value_text;
                $google_plus_checked = $settings_general[6]->value_int_128;
		$data['google_plus_checkbox'] = ($google_plus_checked == 1) ? "checked" : "";

		$data['linkedin'] = $settings_general[7]->value_text;
                $linkedin_checked = $settings_general[7]->value_int_128;
		$data['linkedin_checkbox'] = ($linkedin_checked == 1) ? "checked" : "";

                $data['title'] = 'Settings -> Profile';
                $this->load->view('component/head', $data);
                $this->load->view('component/top');
                $this->load->view('component/side');
                $this->load->view('settings/profile/index', $data);
                $this->load->view('component/foot');
        }

        function set_web_header_name()
        {
                $this->form_validation->set_rules('web_header_name', 'Web Header Name', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_profile_settings', 'No settings applied on web header name!');
                        redirect('Settings/profile');
                        // echo "No settings applied!";
                } else {

                        $web_header_name = $this->input->post('web_header_name');

                        // echo $web_title_name;
                        $this->Profile_settings_model->save_web_header_name($web_header_name);

                        $this->session->set_flashdata('success_profile_settings', 'Settings applied! New value on <u>web header name</u> is <strong>'.$web_header_name.'</strong>');
                        redirect('Settings/profile');
                }
        }

        function set_web_title_name()
        {
                $this->form_validation->set_rules('web_title_name', 'Web Title Name', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_profile_settings', 'No settings applied on web title name!');
                        redirect('Settings/profile');
                        // echo "No settings applied!";
                } else {

                        $web_title_name = $this->input->post('web_title_name');

                        // echo $web_title_name;
                        $this->Profile_settings_model->save_web_title_name($web_title_name);

                        $this->session->set_flashdata('success_profile_settings', 'Settings applied! New value on <u>web title name</u> is <strong>'.$web_title_name.'</strong>');
                        redirect('Settings/profile');
                }
        }

        function set_web_i_am_skill()
        {
                $this->form_validation->set_rules('web_i_am_skill', 'Web I am skill', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_profile_settings', 'No settings applied on your skills!');
                        redirect('Settings/profile');
                        // echo "No settings applied!";
                } else {

                        $web_i_am_skill = $this->input->post('web_i_am_skill');

                        // echo $web_i_am_skill;
                        $this->Profile_settings_model->save_web_i_am_skill($web_i_am_skill);

                        $this->session->set_flashdata('success_profile_settings', 'Settings applied! New value on your skills is entered');
                        redirect('Settings/profile');
                }
        }

        function set_social_media()
        {
                $this->form_validation->set_rules('bypass', 'Bypass', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_profile_settings', 'No settings applied on social media!');
                        redirect('Settings/profile');
                } else {
                        
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

                        $this->Profile_settings_model->save_social_media($data);

                        $this->session->set_flashdata('success_profile_settings', 'Settings applied! New social media is entered');
                        redirect('Settings/profile');

                }
        }

        function upload_Image_Background()
        {
                $config['upload_path'] = './assets/img/edit/';
                $config['allowed_types'] = 'jpg';
                $config['file_name'] = 'hero-bg';
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('uploadMainBackgroundImage')) {
                        $this->session->set_flashdata('success_profile_settings', 'Image succesfully changed. Go to your main website to check it out');
                        redirect('Settings/profile');
                } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error_profile_settings', 'Error while performing an upload: '.$error);
                        redirect('Settings/profile');
                }
        }

        public function about()
        {
                // About & CV Settings Page
                $settings_about_cv = $this->About_settings_model->get_cv_model();

                $data['cv_available'] = $settings_about_cv['0']->value_text;

                $data['title'] = 'Settings -> Curriculum Vitae';
                $this->load->view('component/head', $data);
                $this->load->view('component/top');
                $this->load->view('component/side');
                $this->load->view('settings/cv/index', $data);
                $this->load->view('component/foot');

        }

        function upload_cv()
        {

                $this->form_validation->set_rules('cv_content', 'CV_Content', 'required');

                if ($this->form_validation->run() == false) {
                        $this->session->set_flashdata('error_profile_settings', 'No settings applied!');
                        redirect('Settings/profile');
                } else {
                        $cv_content = $this->input->post('cv_content');
        
                        $this->About_settings_model->upload_cv_model($cv_content);

                        $this->session->set_flashdata('success_profile_settings', 'Your CV is updated! Go to your main website to check it out');
                        redirect('Settings/profile');
                }


        }
}
