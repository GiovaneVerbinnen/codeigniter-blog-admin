<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

    public function index()
	{
		$this->load->model("users_model");
		print_r($this->users_model->get_user_data("admin"));
		//$this->template->show('login.php');
	}
}
