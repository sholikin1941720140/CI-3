<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_users()
    {
        return $this->db->get('user')->result();
    }
}
