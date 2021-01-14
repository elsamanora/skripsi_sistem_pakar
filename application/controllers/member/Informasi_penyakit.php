<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_penyakit extends CI_Controller
{

    public function index()
    {
        $this->load->view("member/informasi_penyakit.php");
    }
}
