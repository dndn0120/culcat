<?php
class Blog extends CI_Controller {
	
	public function index()
	{
		$this->load->view('index.html');
	}
	public function comment()
	{
		echo 'Look at this';
	}
	public function test($type,$num)
	{
		echo $type;
		echo $num;
	}
}