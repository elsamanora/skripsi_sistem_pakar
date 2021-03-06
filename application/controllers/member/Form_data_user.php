<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_data_user extends CI_Controller
{

    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("member/M_form_data_user");
        $this->load->model("member/M_Pertanyaan");
        $this->load->model("ModelPerhitungan");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index() //menampilkan form untuk mengisi data user
    {
        $this->load->view("member/form_data_user");
    }

    public function tambah()
    {
        $user = $this->M_form_data_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save(); 
            
        }
        $this->load->view("member/konsultasi/halaman_konsultasi");
    }

    public function insert_jawaban()
    {
        $data_batch = array();
        $user = $_SESSION['id_user'] ;
        foreach ($this->M_Pertanyaan->get_pertanyaan()->result() as $value){ 
            $id_pertanyaan = $value->id_pertanyaan;
            $jawaban = $this->input->post("jawaban".$id_pertanyaan);
            $data = array(
                "id_pertanyaan" => $id_pertanyaan,
                "id_user"       => $user,
                "jawaban_pasien"=> $jawaban,
                "nilai"         => $jawaban
            );
            array_push($data_batch, $data);
        }
        if($this->db->insert_batch("jawaban_pasien", $data_batch)){
            redirect("Member/Form_data_user/hasil");
        }
    }

    public function hasil() //menampilkan form hasil konsultasi
    {
        $this->load->view("member/konsultasi/hasil_konsultasi");
    }

}
