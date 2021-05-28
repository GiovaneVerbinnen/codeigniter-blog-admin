<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata("user_id")) {
			$this->template->show("restrict.php");
		} else	{
			$data = array(
				"scripts" => array(
					"owl.carousel.min.js",
					"theme-scripts.js"
				)
			);
			$this->template->show("home", $data);
		}
		echo password_hash("admin", PASSWORD_DEFAULT);

	}
}
