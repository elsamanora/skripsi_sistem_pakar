<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_gejala");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["gejala"] = $this->M_gejala->getAll();
        $this->load->view("admin/gejala/data_gejala",$data);
    }

    public function tambah()
    {
        $gejala = $this->M_gejala;
        $validation = $this->form_validation;
        $validation->set_rules($gejala->rules());

        if ($validation->run()) {
            $gejala->save(); 
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
        }
        $this->load->view("admin/gejala/tambah_gejala");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/gejala');
       
        $gejala = $this->M_gejala;
        $validation = $this->form_validation;
        $validation->set_rules($gejala->rules());

        if ($validation->run()) { //melakukan validasi
            $gejala->update(); //proses menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); //alert success
        }

        $data["gejala"] = $gejala->getById($id);
        if (!$data["gejala"]) show_404();

        $this->load->view("admin/gejala/edit_gejala",$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_gejala->delete($id)) {
            redirect(site_url('admin/gejala'));
        }
    }
}
