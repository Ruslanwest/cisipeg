<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_gender extends CI_Controller {
	public function viewform() {
		$this->load->view('v_formgender');
    }
    
    //Fungsi untuk membaca data hasil view gender
    public function readdata(){
        $data["kodegender"]=$this->input->post("kodegender");
        $data["namagender"]=$this->input->post("namagender");
        $this->load->view('v_showgender', $data);
    }
    //Fungsi untuk inisiasi data dari view
    public function initform(){
        $data["kodegender"]="L";
        $data["namagender"]="Laki-Laki";
        $this->load->view('v_valueform', $data);
    }

    //Fungsi untuk input data dari view
    public function inputdata(){
        $data["kodegender"]=$this->input->post("kodegender");
        $data["namagender"]=$this->input->post("namagender");
        $this->load->view('v_valueform', $data);
    }

    //Fungsi untuk melakukan input ke DB
    public function inputdb(){
        $data["kodegender"]="L";
        $data["namagender"]="Laki-laki";
        $this->load->view('v_dbform', $data);
    }

    //Fungsi untuk menyimpan ke DB
    public function savedb(){
        //Membaca Input dari Keyword
        $data["kodegender"]=$this->input->post("kodegender");
        $data["namagender"]=$this->input->post("namagender");

        //Simpan ke Dalam Database
        $rec = array ("rgender_kode"=>$data["kodegender"],"rgender_nama"=>$data["namagender"]);

        $this->db->insert("r_gender", $rec);
        $this->load->view('v_dbresult', $data);
    }

/**    //Fungsi untuk List Data
    public function listdata(){
        $query=$this->db->get("r_gender");
        $this->table->set_heading("Kode Gender","Nama Gender");

        $data["tabel"]=$this->table->generate($query);
        $this->load->view('v_listgender', $data);
    }

    //Fungsi untuk Input db Model
    public function inputdbmdl(){
        $this->load->model("m_gender");
        $data=$this->m_gender->init();
        $this->load->view('v_dbformmdl',$data);
    }

    //Fungsi savedbmdl
    public function savedbmdl(){
        $this->load->model("m_gender");
        $data=$this->m_gender->initpost();
        $this->load->view('v_dbresultmdl',$data);
    }
**/
    //Fungsi untuk Underconst
    public function index(){
        $data=array();
        $data["controller"]=$this->router->class;
        $data["method"]=$this->router->method;
        $this->load->view("v_temp",$data);
        
    }

    //Fungsi untuk Form menambah Data
    public function form2add(){
        //Deklarasi Variable untuk data
        $data=array();
        //Melakukan load dari model gender
        $this->load->model("m_gender");
        //Load fungsi init_data dari model Gender
        $data=$this->m_gender->initdata();
        //Deklarasi variable myview
        $data["myview"]="v_frmgender";
        //Load view Main untuk fungsi form2add
        $this->load->view("v_main", $data);

    }

    //Fungsi untuk Simpan ke Database
    public function save4add(){
        $data=array();
        $this->load->model("m_gender");
        $data=$this->m_gender->initdata();
        $data["saveresult"]=$this->m_gender->insertdata($data);
        $data["myview"]="v_frmgendersaved";
        $this->load->view("v_main", $data);
    }


}