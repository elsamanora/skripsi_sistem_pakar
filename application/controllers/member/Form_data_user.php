<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_data_user extends CI_Controller
{

    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("member/M_form_data_user");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index() //menampilkan form untuk mengisi data user
    {
        $this->load->view("member/form_data_user");
    }

    // public function tambah()
    // {
    //     $gejala = $this->M_gejala;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($gejala->rules());

    //     if ($validation->run()) {
    //         $gejala->save(); 
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
            
    //     }
    //     $this->load->view("admin/gejala/tambah_gejala");
    // }

}
