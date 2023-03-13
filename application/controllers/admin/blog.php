<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$query = $this->db->query("SELECT * FROM `blogs` ORDER BY blog_id DESC;");
		$data['result'] = $query->result_array();
		$this->load->view('admin_panel/viewblog', $data);
	}
    function addblog()
    {
        $this->load->view('admin_panel/addblog');
    }

	function addblog_post()
    {
        /*print_r($_POST);
		print_r($_FILES);*/

		if ($_FILES)
		{
			//Image found
			$config['upload_path']          = './assets/upload/blogimg';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

						die("Error");

                        // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						// echo "<pre>";
						// print_r($data);
						// echo $data['upload_data']['file_name'];
						$file_url = "assets/upload/blogimg/".$data['upload_data']['file_name'];
						$blog_title = $_POST['blog_title'];
						$desc = $_POST['desc'];

						$query = $this->db->query("INSERT INTO `blogs`(`blog_title`, `blog_data`, `blog_img`) VALUES ('$blog_title','$desc','$file_url')");

						if ($query)
						{
							$this->session->set_flashdata('inserted', 'yes');
							redirect('admin/blog//addblog');
						}
						else
						{
							$this->session->set_flashdata('inserted', 'no');
							redirect('admin/blog//addblog');
						}
                        //$this->load->view('upload_success', $data);
                }
		}
		else
		{
			//No image
		}
    }

	function updateblog($blog_id)
	{
		print_r("$blog_id");
		$query = $this->load->db->query("SELECT `blog_title`, `blog_data`, `blog_img` FROM `blogs` WHERE `blog_id`='$blog_id'");
		$data['result'] = $query->result_array();
		$this->load->view('admin_panel/updateblog', $data);
	}

	function updateblog_post()
	{
		print_r($_POST);
	}
	function deleteblog()
	{
		// print_r($_POST);
		$delete_id = $_POST['delete_id'];
		$query = $this->db->query("DELETE FROM `blogs` WHERE `blog_id` = '$delete_id'");
		if ($query)
		{
			echo "deleted";
		}
		else{
			echo "notdeleted";
		}

	}
}
