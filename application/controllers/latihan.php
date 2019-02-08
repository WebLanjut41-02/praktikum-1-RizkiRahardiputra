<?php


class latihan extends MY_Controller{



	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('latihan');
	}

	public function testParam($parameter)
	{
		echo $parameter;
	}
}
?>