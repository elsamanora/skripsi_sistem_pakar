<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_gejala extends CI_Model 
{
    private $_table = "gejala"; //nama tabel
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_gejala;
    public $kode_gejala;
    public $nama_gejala;

    public function rules() //aturan untuk memvalidasi input
    {
        return 
        [
            [
                'field' => 'kode_gejala',
                'label' => 'kode_gejala',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_gejala',
                'label' => 'nama_gejala',
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
        return $this->db->get_where($this->_table, ["id_gejala" => $id])->row();
    }

    public function save() //untuk menyimpan data ke tabel penyakit
    {
        $post = $this->input->post();
        // $this->id_gejala = uniqid();
        $this->kode_gejala = $post["kode_gejala"];
        $this->nama_gejala = $post["nama_gejala"];
        return $this->db->insert($this->_table,$this);
    }   

    public function update() //untuk edit data
    {
        $post = $this->input->post();
        $this->id_gejala = $post["id_gejala"];
        $this->kode_gejala = $post["kode_gejala"];
        $this->nama_gejala = $post["nama_gejala"];
        return $this->db->update($this->_table,$this,array('id_gejala' => $post['id_gejala']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array("id_gejala"=>$id));
    }
}