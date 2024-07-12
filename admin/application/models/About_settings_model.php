<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_settings_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_cv_model()
    {
        $sql = "SELECT * FROM `about_cv_settings` WHERE setting_name = 'cv';";
        $query = $this->db->query($sql);
        return $query->result();
    } 

    function upload_cv_model($data)
    {
        $sql = "UPDATE about_cv_settings SET value_text = ? WHERE setting_name = 'cv';";
        return $this->db->query($sql, array($data));
    } 

}