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

    public function get_user_with_data_pribadi($user_id = null)
    {
        $this->db->select('user.*, data_pribadi.alamat, data_pribadi.no_hp, data_pribadi.pekerjaan, data_pribadi.jenis_kelamin');
        $this->db->from('user');
        $this->db->join('data_pribadi', 'data_pribadi.id_user = user.id', 'left');

        if ($user_id !== null) {
            $this->db->where('user.id', $user_id);
        }

        return $this->db->get()->result();
    }
}
