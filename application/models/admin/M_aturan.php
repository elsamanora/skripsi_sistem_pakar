<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_aturan extends CI_Model 
{
    private $_table = "aturan"; //nama tabel
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_aturan;
    public $kode_aturan;
    public $nama_aturan;

    public function rules() //aturan untuk memvalidasi input
    {
        return 
        [
            [
                'field' => 'kode_aturan',
                'label' => 'kode_aturan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_aturan',
                'label' => 'nama_aturan',
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
        return $this->db->get_where($this->_table, ["id_aturan" => $id])->row();
    }

    public function save() //untuk menyimpan data ke tabel penyakit
    {
        $post = $this->input->post();
        // $this->id_gejala = uniqid();
        $this->kode_aturan = $post["kode_aturan"];
        $this->nama_aturan = $post["nama_aturan"];
        return $this->db->insert($this->_table,$this);
    }   

    public function update() //untuk edit data
    {
        $post = $this->input->post();
        $this->id_aturan = $post["id_aturan"];
        $this->kode_aturan = $post["kode_aturan"];
        $this->nama_aturan = $post["nama_aturan"];
        return $this->db->update($this->_table,$this,array('id_aturan' => $post['id_aturan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array("id_aturan"=>$id));
    }
}