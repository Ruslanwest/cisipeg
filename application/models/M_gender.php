<?php

class M_gender extends CI_Model{

    function init(){
        $data=array();
        $data["kodegender"]="L";
        $data["namagender"]="Laki-Laki";
        return $data;
    }

    function initpost(){
        $data=array();
        $data["kodegender"]=$this->input->post("kodegender");
        $data["namagender"]=$this->input->post("namagender");
        return $data;
    }

    function savepost($data){
        $rec = array (
            "rgender_kode"=>$data["kodegender"],
            "rgender_nana"=>$data["namagender"]
        );
        $this->db->insert("r_gender", $rec);
        return true;
    }

    //Fungsi untuk melakukan inisiasi Data Gender
    function initdata(){
        //Membaca Data yang dikirimkan dari form
        $data=array();
        $data["rgender_kode"]=$this->input->post("rgender_kode");
        $data["rgender_nama"]=$this->input->post("rgender_nama");
        return $data;
    }

}

?>