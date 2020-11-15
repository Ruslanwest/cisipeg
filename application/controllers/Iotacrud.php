<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Iotacrud extends CI_Controller{
    public function index(){
        $data = array();
        $data["controller"]=$this->router->class;
        $data["method"]=$this->router->method;
        $this->load->view("v_temp",$data);
    }

    public function form2add($namamodel){
        $data=array();
        $this->load->model($namamodel,"iotamodel");
        $data=$this->iotamodel->initdata();
        $data["myview"]=$this->iotamodel->appdata("viewadd");
        $data["namamodel"] = $namamodel;
        $this->load->view("v_main", $data);
    }

    public function save4add($namamodel){
        $data=array();
        $this->load->model($namamodel, "iotamodel");
        $data=$this->iotamodel->initdata();
        $data["saveresult"]=$this->iotamodel->insertdata($data);
        $data["myview"]="v_frmgendersaved";
        $this->load->view("v_main", $data);
    }



}
?>

