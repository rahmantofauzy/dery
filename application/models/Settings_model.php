<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_general_profile_settings() {
        $sql = "SELECT * FROM general_profile_settings;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_header() {
        $sql = "SELECT value_varchar_128 FROM general_profile_settings WHERE setting_name = 'web_title_name';";
        $query = $this->db->query($sql);
        return $query->row();  // Mengembalikan satu baris hasil query
    }

}