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

}