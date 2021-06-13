<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_admin extends CI_Model 
{
    private $_table = "admin"; //nama tabel
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_admin;
    public $username;
    public $password;

    public function rules() //aturan untuk memvalidasi input
    {
        return 
        [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],
            [
                'field' => 'username',
                'label' => 'username',
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
        return $this->db->get_where($this->_table, ["id_admin" => $id])->row();
    }

    public function save() //untuk menyimpan data ke tabel penyakit
    {
        $post = $this->input->post();
        $this->id_admin = uniqid();
        $this->username = $post["username"];
        $this->password = password_hash($post["password"],PASSWORD_DEFAULT,array("costs"=>10));
        return $this->db->insert($this->_table,$this);
    }   

    public function update() //untuk edit data
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->username = $post["username"];
        $this->password = password_hash($post["password"],PASSWORD_DEFAULT,array("costs"=>10));
        return $this->db->update($this->_table,$this,array('id_admin' => $post['id_admin']));
    }

}