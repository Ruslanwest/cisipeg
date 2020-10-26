<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_edulevel extends CI_Model{

    function initdata(){
        //Membaca Data yang dikirimkan dari form
        $data=array();
        $data["redulevel_kode"]=$this->input->post("redulevel_kode");
        $data["redulevel_singkat"]=$this->input->post("redulevel_singkat");
        $data["redulevel_desk"]=$this->input->post("redulevel_desk");
        return $data;
    }
    
    function insertdata($data){
        //query untuk periksa data sudah ada atau belum
        $this->db->like("redulevel_kode",$data["redulevel_kode"]);
        $this->db->from('r_edulevel');
        $c=$this->db->count_all_results();
    
        //Pengecekan array
        if (!$c) {
            $rec=array("redulevel_kode"=>$data["redulevel_kode"],
            "redulevel_singkat"=>$data["redulevel_singkat"],
            "redulevel_desk"=>$data["redulevel_desk"]);
    
            //Proses Simpan
            $this->db->insert("r_edulevel", $rec);
            $result=$this->db->affected_rows();
            $result=($result)?"Berhasil Disimpan":"Gagal Disimpan! ";
        } else{
            $result="Gagal simpan!".br();
            $result.= " Key : ".$data["redulevel_kode"]." Sudah ada!"; 
        } return $result;
    }

}


?>