<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_profile() {
        $query = $this->db->get('profile'); // 'users' adalah nama tabel di database Anda
        return $query->result();
    }

}