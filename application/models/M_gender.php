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

}

?>