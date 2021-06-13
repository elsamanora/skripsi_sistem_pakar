<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_pengetahuan");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["pengetahuan"] = $this->M_pengetahuan->getAll();
        $this->load->view("admin/pengetahuan/data_pengetahuan",$data);
    }
    
    public function tambah() //tambah
    {
        $this->load->view("admin/pengetahuan/tambah_pengetahuan");
    }

    public function edit($id = null)
    {
        $this->load->model("admin/M_pengetahuan");
        if (!isset($id)) redirect('admin/Pengetahuan');
       
        $pengetahuan = $this->M_pengetahuan;
        $data['pengetahuan'] = $this->M_pengetahuan->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($pengetahuan->rules());

        if ($validation->run()) { //melakukan validasi
            $pengetahuan->update(); //proses menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); //alert success
        }

        $data["pengetahuan"] = $pengetahuan->getById($id);
        if (!$data["pengetahuan"]) show_404();

        $this->load->view("admin/pengetahuan/edit_pengetahuan",$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_pengetahuan->delete($id)) {
            redirect(site_url('admin/Pengetahuan'));
        }
    }
}
