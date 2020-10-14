<?php if (! defined('BASEPATH')) exit('No Direct script acces allowed');

class C_test extends CI_Controller{
    public function loadview(){
        $this->load->view('v_bootstrap');
    }
}