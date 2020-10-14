<?php if ( ! defined('BASEPATH')) exit('No direct script access allow');

class C_leveledu extends CI_Controller{
    public function viewform() {
        $this->load->view('v_formedu');
    }

    //Fungsi untuk membaca data hasil view leveledu
    public function readdataedu(){
        $data["kode_edu"]=$this->input->post("kode_edu");
        $data["nama_edu"]=$this->input->post("nama_edu");
        $data["tingkat_edu"]=$this->input->post("tingkat_edu");
        $data["deskripsi_edu"]=$this->input->post("deskripsi_edu");
        $this->load->view('v_showedu', $data);
    }

    
}