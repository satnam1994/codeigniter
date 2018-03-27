<?php
class Api extends CI_Controller {
	public function get_data()
	{
		if (empty($this->input->server('PHP_AUTH_USER')))
	    {
			header('HTTP/1.0 401 Unauthorized');
			header('HTTP/1.1 401 Unauthorized');
			header('WWW-Authenticate: Basic realm="My Realm"');
			echo 'You must login to use this service'; // User sees this if hit cancel
			die();
		}else{

			$username = $this->input->server('PHP_AUTH_USER');
			$password	 = $this->input->server('PHP_AUTH_PW');
			
			print_r(json_encode(array('RESPONSE' => $this->input->get())));
		}
	}
	public function post_data()
	{
		if (empty($this->input->server('PHP_AUTH_USER')))
	    {
			header('HTTP/1.0 401 Unauthorized');
			header('HTTP/1.1 401 Unauthorized');
			header('WWW-Authenticate: Basic realm="My Realm"');
			echo 'You must login to use this service'; // User sees this if hit cancel
			die();
		}else{

			$username = $this->input->server('PHP_AUTH_USER');
			$password	 = $this->input->server('PHP_AUTH_PW');
			
			print_r(json_encode(array('RESPONSE' => $this->input->post())));
		}
	}
}
