<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller {

	public function __construct()
	{
		parent :: __construct();
	}

	public  function  halaman1()
    {
            $data ['kiriman'] = array(1,2,3,4,5);
            $this -> load ->view('halaman', $data);
    }

    public function kalkulator123(){

        $this->load->view('kalkulator');
    }

    public function hasil123()
    {
        $bil1 = $this -> input -> post('bil1');
        $bil2 = $this -> input -> post('bil2');

        $data['tambah'] = $bil1 + $bil2;
        $data['kurang'] = $bil1 - $bil2;
        $data['kali'] = $bil1 * $bil2;
        $data['bagi'] = $bil1 / $bil2;  

        $this -> load -> view('hasil', $data);
    }


}
?>

