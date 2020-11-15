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

    function appdata($key){
        //baca data yang dikirimkan dari form
        $data=array();
        $data["viewadd"]="v_frmgender";
        return $data[$key];
    }


    //Fungsi untuk melakukan inisiasi Data Gender
    function initdata(){
        //Membaca Data yang dikirimkan dari form
        $data=array();
        $data["rgender_kode"]=$this->input->post("rgender_kode");
        $data["rgender_nama"]=$this->input->post("rgender_nama");
        return $data;
    }

    //Fungsi untuk Insert Data
    function insertdata($data){
        //query untuk periksa data sudah ada atau belum
        $this->db->like('rgender_kode',$data["rgender_kode"]);
        $this->db->from('r_gender');
        $c=$this->db->count_all_results();

        //Pengecekan array
        if (!$c) {
            $rec=array("rgender_kode"=>$data["rgender_kode"],"rgender_nama"=>$data["rgender_nama"]);

            //Proses Simpan
            $this->db->insert("r_gender", $rec);
            $result=$this->db->affected_rows();
            $result=($result)?"Berhasil Disimpan":"Gagal Disimpan! ";
        } else{
            $result="Gagal simpan!".br();
            $result.= " Key : ".$data["rgender_kode"]." Sudah ada!"; 
        } return $result;
    }

   
}

?>