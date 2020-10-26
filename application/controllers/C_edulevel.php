<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_edulevel extends CI_Controller {
    //Fungsi untuk Underconst
    public function index(){
        $data=array();
        $data["controller"]=$this->router->fetch_class();
        $data["method"]=$this->router->fetch_method();
        $this->load->view("v_temp",$data);
    }

    public function form4add(){
        $data=array();
        $this->load->model("m_edulevel");
        $data=$this->m_edulevel->initdata();
        $data["myview"]="v_frmedulevel";
    }

    public function save4add(){
        $data=array();
        $this->load->model("m_edulevel");
        $data=$this->m_edulevel->initdata();
        $data["saveresult"]=$this->m_edulevel->insertdata($data);
        $data["myview"]="v_frmgedulevelsaved";
        $this->load->view("v_main", $data);
    }
}

?>