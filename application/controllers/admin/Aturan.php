<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aturan extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_aturan");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["aturan"] = $this->M_aturan->getAll();
        $this->load->view("admin/aturan/data_aturan",$data);
    }

    public function tambah()
    {
        $aturan = $this->M_aturan;
        $validation = $this->form_validation;
        $validation->set_rules($aturan->rules());

        if ($validation->run()) {
            $aturan->save(); 
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
        }
        $this->load->view("admin/aturan/tambah_aturan");
    }

    public function edit($id = null)  
    {
        if (!isset($id)) redirect('admin/aturan');
       
        $aturan = $this->M_aturan;
        $validation = $this->form_validation;
        $validation->set_rules($aturan->rules());

        if ($validation->run()) { //melakukan validasi
            $aturan->update(); //proses menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); //alert success
        }

        $data["aturan"] = $aturan->getById($id);
        if (!$data["aturan"]) show_404();

        $this->load->view("admin/aturan/edit_aturan",$data);

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_aturan->delete($id)) {
            redirect(site_url('admin/aturan'));
        }
    }
}
