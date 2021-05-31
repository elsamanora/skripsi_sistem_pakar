<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_form_data_user extends CI_Model 
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

    public function save() //untuk menyimpan data ke tabel penyakit
    {
        $post = $this->input->post();
        // $this->id_user = uniqid();
        $this->nama_user = $post["nama_user"];
        $this->umur = $post["umur"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->db->insert($this->_table,$this);
        $id_user = $this->db->insert_id();
        $_SESSION['id_user'] = $id_user;
    }   

}