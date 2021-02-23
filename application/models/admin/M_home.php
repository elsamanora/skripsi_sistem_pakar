<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_home extends CI_Model 
{
    

    public function get_penyakit() //untuk mendapatkan semua data 
    {
       return $this->db->count_all('penyakit'); 
    }

    public function get_gejala() //untuk mendapatkan semua data 
    {
       return $this->db->count_all('gejala'); 
    }

    public function get_user() //untuk mendapatkan semua data 
    {
       return $this->db->count_all('user'); 
    }
   
}