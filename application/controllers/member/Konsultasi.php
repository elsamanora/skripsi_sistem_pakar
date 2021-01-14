<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

    public function index()
    {
        $this->load->view("member/konsultasi.php");
    }
}
