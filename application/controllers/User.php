<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['content'] = $this->load->view('dashboard', '', TRUE);
		$data['users'] = $this->User_model->get_all_users();

		$this->load->view('user', $data);
	}

	public function gabungan()
	{
		$data['content'] = $this->load->view('dashboard', '', TRUE);
		$data['users'] = $this->User_model->get_user_with_data_pribadi();
		
		// echo '<pre>';
		// print_r($data['users']);
		// echo '</pre>';

		// Mengirim response JSON
		header('Content-Type: application/json');
		echo json_encode($data['users'], JSON_PRETTY_PRINT);
		exit; // Hentikan eksekusi setelah menampilkan data
		

		$this->load->view('user', $data);
	}
}
