<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_penyakit extends CI_Model 
{
    private $_table = "penyakit"; //nama tabel
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_penyakit;
    public $kode_penyakit;
    public $nama_penyakit;

    public function rules() //aturan untuk memvalidasi input
    {
        return 
        [
            [
                'field' => 'kode_penyakit',
                'label' => 'kode_penyakit',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_penyakit',
                'label' => 'nama_penyakit',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll() //untuk mendapatkan semua data 
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id) // untuk medapatkan data sesuai dengan id yang diinginkan
    {
        return $this->db->get_where($this->_table, ["id_penyakit" => $id])->row();
    }

    public function save() //untuk menyimpan data ke tabel penyakit
    {
        $post = $this->input->post();
        $this->id_penyakit = uniqid();
        $this->kode_penyakit = $post["kode_penyakit"];
        $this->nama_penyakit = $post["nama_penyakit"];
        return $this->db->insert($this->_table,$this);
    }   

    public function update() //untuk edit data
    {
        $post = $this->input->post();
        $this->kode_penyakit = $post["id"];
        $this->nama_penyakit = $post["nama_penyakit"];
        return $this->db->update($this->_table,$this,array('kode_penyakit' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array("kode_penyakit"=>$id));
    }
}