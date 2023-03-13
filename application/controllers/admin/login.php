<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if (isset($_SESSION['user_id']))
		{
			redirect('admin/dashboard');
		}
		$data=[];
		if (isset($_SESSION['error']))
		{
			$data['error']=$_SESSION['error'];
		}
		else
		{
			$data['error']="NO_ERROR";
		}
		$this->load->view('admin_panel/login_v', $data);
	}
	function login_post()
	{
		if (isset($_POST))
		{
			$uname=$_POST['uname'];
			$password=$_POST['password'];
			$query = $this->db->query("SELECT * FROM `backenduser` WHERE `username` = '$uname' AND `password` = '$password'");
			if($query->num_rows())
			{//If creds are valid
				$result = $query->result_array();
				// print_r($result);
				// die();
				$this->session->set_userdata('user_id', $result[0]['uid']);
				
				redirect('admin/dashboard');
			}
			else
			{//If creds are not valid
				$this->session->set_flashdata('error', 'Invalid Credentials');
				redirect('admin/login');
			}
		}
		else
		{
			$this->session->set_flashdata('error','Invalid Credentials');
			redirect('admin/login');
		}
	}
	function logout()
	{
		session_destroy();
		redirect('admin/login');
	}
}
