<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_user extends CI_Model 
{
    private $_table = "user"; //nama tabel
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_user;
    public $nama_user;
    public $umur;
    public $jenis_kelamin;
    public $alamat;
    public $no_telp;

    public function rules() //aturan untuk memvalidasi input
    {
        return 
        [
            [
                'field' => 'nama_user',
                'label' => 'nama_user',
                'rules' => 'required'
            ],
            [
                'field' => 'umur',
                'label' => 'umur',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'jenis_kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'no_telp',
                'label' => 'no_telp',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll() //untuk mendapatkan semua data 
    {
        return $this->db->get($this->_table)->result();
    }

    public function getDetail($id) //untuk mendapatkan semua data 
    {
        $this->db->where("id_user", $id);
        return $this->db->get($this->_table);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array("id_user"=>$id));
    }
    
}