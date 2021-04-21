<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_Pertanyaan extends CI_Model 
{
     function get_pertanyaan()
     {
         return $this->db->get("pertanyaan");
     }

}