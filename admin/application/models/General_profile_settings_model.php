<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_profile_settings_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_general_profile_settings() {
        $sql = "SELECT * FROM general_profile_settings;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function save_web_header_name($web_header_name) {
        $sql = "UPDATE general_profile_settings SET value_varchar_128 = ? WHERE setting_name = 'web_header_name';";
        $query = $this->db->query($sql, array($web_header_name));
    }

    function save_web_title_name($web_title_name) {
        $sql = "UPDATE general_profile_settings SET value_varchar_128 = ? WHERE setting_name = 'web_title_name';";
        $query = $this->db->query($sql, array($web_title_name));
    }

    function save_web_i_am_skill($web_i_am_skill) {
        $sql = "UPDATE general_profile_settings SET value_text = ? WHERE setting_name = 'web_i_am_skill';";
        $query = $this->db->query($sql, array($web_i_am_skill));
    }

    function save_social_media($data) {

        $twitter = $data['twitter'];
        $twitter_checkbox = $data['twitter_checkbox'];
        $sql_twitter = "UPDATE general_profile_settings SET value_int_128 = ?, value_text = ? WHERE setting_name = 'twitter';";
        $this->db->query($sql_twitter, array($twitter_checkbox, $twitter));

        $facebook = $data['facebook'];
        $facebook_checkbox = $data['facebook_checkbox'];
        $sql_facebook = "UPDATE general_profile_settings SET value_int_128 = ?, value_text = ? WHERE setting_name = 'facebook';";
        $this->db->query($sql_facebook, array($facebook_checkbox, $facebook));

        $instagram = $data['instagram'];
        $instagram_checkbox = $data['instagram_checkbox'];
        $sql_instagram = "UPDATE general_profile_settings SET value_int_128 = ?, value_text = ? WHERE setting_name = 'instagram';";
        $this->db->query($sql_instagram, array($instagram_checkbox, $instagram));

        $google_plus = $data['google_plus'];
        $google_plus_checkbox = $data['google_plus_checkbox'];
        $sql_google_plus = "UPDATE general_profile_settings SET value_int_128 = ?, value_text = ? WHERE setting_name = 'google_plus';";
        $this->db->query($sql_google_plus, array($google_plus_checkbox, $google_plus));

        $linkedin = $data['linkedin'];
        $linkedin_checkbox = $data['linkedin_checkbox'];
        $sql_linkedin = "UPDATE general_profile_settings SET value_int_128 = ?, value_text = ? WHERE setting_name = 'linkedin';";
        $this->db->query($sql_linkedin, array($linkedin_checkbox, $linkedin));

    }

}