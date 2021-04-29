<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

Class M_pertanyaan extends CI_Model 
{
    private $_table = "pertanyaan"; //nama tabel
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_pertanyaan;
    public $kode_pertanyaan;
    public $nama_pertanyaan;
    public $jawaban_sangat_yakin;
    public $jawaban_yakin;
    public $jawaban_cukup_yakin;
    public $jawaban_sedikit_yakin;
    public $jawaban_kurang_yakin;
    public $jawaban_tidak_yakin;

    public function rules() //aturan untuk memvalidasi input
    {
        return 
        [
            [
                'field' => 'kode_pertanyaan',
                'label' => 'kode_pertanyaan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_pertanyaan',
                'label' => 'nama_pertanyaan',
                'rules' => 'required'
            ],
            [
                'field' => 'jawaban_sangat_yakin',
                'label' => 'jawaban_sangat_yakin',
                'rules' => 'required'
            ],
            [
                'field' => 'jawaban_yakin',
                'label' => 'jawaban_yakin',
                'rules' => 'required'
            ],
            [
                'field' => 'jawaban_cukup_yakin',
                'label' => 'jawaban_cukup_yakin',
                'rules' => 'required'
            ],
            [
                'field' => 'jawaban_sedikit_yakin',
                'label' => 'jawaban_sedikit_yakin',
                'rules' => 'required'
            ],
            [
                'field' => 'jawaban_kurang_yakin',
                'label' => 'jawaban_kurang_yakin',
                'rules' => 'required'
            ],
            [
                'field' => 'jawaban_tidak_yakin',
                'label' => 'jawaban_tidak_yakin',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll() //untuk mendapatkan semua data 
    {
        $this->db->join("gejala","gejala.id_gejala = pertanyaan.id_gejala");
        return $this->db->get($this->_table)->result();
    }

    public function getById($id) // untuk medapatkan data sesuai dengan id yang diinginkan
    {
        return $this->db->get_where($this->_table, ["id_pertanyaan" => $id])->row();
    }

    public function save() //untuk menyimpan data ke tabel penyakit
    {
        $post = $this->input->post();
        // $this->id_gejala = uniqid();
        $this->kode_pertanyaan = $post["kode_pertanyaan"];
        $this->nama_pertanyaan = $post["nama_pertanyaan"];
        $this->jawaban_sangat_yakin = $post["jawaban_sangat_yakin"];
        $this->jawaban_yakin = $post["jawaban_yakin"];
        $this->jawaban_cukup_yakin = $post["jawaban_cukup_yakin"];
        $this->jawaban_sedikit_yakin = $post["jawaban_sedikit_yakin"];
        $this->jawaban_kurang_yakin = $post["jawaban_kurang_yakin"];
        $this->jawaban_tidak_yakin = $post["jawaban_tidak_yakin"];
        return $this->db->insert($this->_table,$this);
    }   

    public function update() //untuk edit data
    {
        $post = $this->input->post();
        $this->id_pertanyaan = $post["id_pertanyaan"];
        $this->kode_pertanyaan = $post["kode_pertanyaan"];
        $this->nama_pertanyaan = $post["nama_pertanyaan"];
        $this->jawaban_sangat_yakin = $post["jawaban_sangat_yakin"];
        $this->jawaban_yakin = $post["jawaban_yakin"];
        $this->jawaban_cukup_yakin = $post["jawaban_cukup_yakin"];
        $this->jawaban_sedikit_yakin = $post["jawaban_sedikit_yakin"];
        $this->jawaban_kurang_yakin = $post["jawaban_kurang_yakin"];
        $this->jawaban_tidak_yakin = $post["jawaban_tidak_yakin"];
        return $this->db->update($this->_table,$this,array('id_pertanyaan' => $post['id_pertanyaan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array("id_pertanyaan"=>$id));
    }
}