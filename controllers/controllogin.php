<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllogin extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
	}

public function logindepan()
    {
    $this->load->view('login'); 
    }



public function proses()
    {
    $username  = $this->input->post('username');
    $password = $this->input->post('password');

    $data = array ("Angga", "Alvin", "Fahlevi");


    if (in_array($username, $data))
    {
        $this->session->set_userdata('username', $username);
        redirect('controllogin/hasil');
    } else {
        $this->load->view('login');
    }


}

    public function hasil()
    {
        $this->load->view('hasillog');
    }

    public function logout()
    {
        $this->session->unset_userdata(array('username'=>''));
        redirect('controllogin/logindepan');  
    }
}
?>

