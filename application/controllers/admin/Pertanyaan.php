<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_pertanyaan");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["pertanyaan"] = $this->M_pertanyaan->getAll();
        $this->load->view("admin/pertanyaan/data_pertanyaan",$data);
    }

    public function tambah()
    {
        $pertanyaan = $this->M_pertanyaan;
        $validation = $this->form_validation;
        $validation->set_rules($pertanyaan->rules());

        if ($validation->run()) {
            $pertanyaan->save(); 
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
        }
        $this->load->view("admin/pertanyaan/tambah_pertanyaan");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pertanyaan');
       
        $pertanyaan = $this->M_pertanyaan;
        $validation = $this->form_validation;
        $validation->set_rules($pertanyaan->rules());

        if ($validation->run()) { //melakukan validasi
            $pertanyaan->update(); //proses menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); //alert success
        }

        $data["pertanyaan"] = $pertanyaan->getById($id);
        if (!$data["pertanyaan"]) show_404();

        $this->load->view("admin/pertanyaan/edit_pertanyaan",$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_pertanyaan->delete($id)) {
            redirect(site_url('admin/pertanyaan'));
        }
    }
}
