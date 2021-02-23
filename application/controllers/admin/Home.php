<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct() // untuk load model 
    {
        parent::__construct();
        $this->load->model("admin/M_home");
    }

    public function index()
    {
        $data["penyakit"] = $this->M_home->get_penyakit();
        $data["gejala"] = $this->M_home->get_gejala();
        $data["user"] = $this->M_home->get_user();
        $this->load->view("admin/home/home.php",$data);
        // $this->load->view("admin/home/home.php");
    }
}
