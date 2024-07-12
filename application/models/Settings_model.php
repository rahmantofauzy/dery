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

    function get_about_model_settings() {
        $sql = "SELECT * FROM about_cv_settings;";
        $query = $this->db->query($sql);
        return $query->result();
    }

}