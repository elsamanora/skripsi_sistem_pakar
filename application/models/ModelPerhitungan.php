<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class ModelPerhitungan extends CI_Model 
{
     function get_pengetahuan($penyakit)
     {
         $this->db->where("nama_penyakit", $penyakit);
         return $this->db->get("pengetahuan");
     }

     function get_gejala($kode)
     {
         $this->db->where("kode_gejala", $kode);
         return $this->db->get("gejala");
     }
     
     function get_nilai_user($user, $kode)
     {
         $this->db->join("pertanyaan","pertanyaan.id_pertanyaan = jawaban_pasien.id_pertanyaan");
         $this->db->join("gejala","gejala.id_gejala = pertanyaan.id_gejala");
         $this->db->where("gejala.kode_gejala",$kode);
         $this->db->where("jawaban_pasien.id_user", $user);
         return $this->db->get("jawaban_pasien");
     }

}