<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_pengetahuan extends CI_Model 
{
    private $_table = "pengetahuan"; //nama tabel
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $kode_pengetahuan;
    public $nama_penyakit;
    public $nama_gejala;
    public $nilai_cf_pakar;

    public function rules() //aturan untuk memvalidasi input
    {
        return 
        [
            [
                'field' => 'kode_pengetahuan',
                'label' => 'kode_pengetahuan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_penyakit',
                'label' => 'nama_penyakit',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_gejala',
                'label' => 'nama_gejala',
                'rules' => 'required'
            ],
            [
                'field' => 'nilai_cf_pakar',
                'label' => 'nilai_cf_pakar',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll() //untuk mendapatkan semua data 
    {
        return $this->db->get($this->_table)->result();
    }

    // public function getById($id) // untuk medapatkan data sesuai dengan id yang diinginkan
    // {
    //     return $this->db->get_where($this->_table, ["id_penanganan" => $id])->row();
    // }

    // public function save() //untuk menyimpan data ke tabel penyakit
    // {
    //     $post = $this->input->post();
    //     // $this->id_penanganan = uniqid();
    //     $this->kode_penanganan = $post["kode_penanganan"];
    //     $this->nama_penanganan = $post["nama_penanganan"];
    //     return $this->db->insert($this->_table,$this);
    // }   

    // public function update() //untuk edit data
    // {
    //     $post = $this->input->post();
    //     $this->id_penanganan = $post["id_penanganan"];
    //     $this->kode_penanganan = $post["kode_penanganan"];
    //     $this->nama_penanganan = $post["nama_penanganan"];
    //     return $this->db->update($this->_table,$this,array('id_penanganan' => $post['id_penanganan']));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table,array("id_penanganan"=>$id));
    // }
}