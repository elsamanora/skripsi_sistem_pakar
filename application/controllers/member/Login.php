<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view("member/login.php");
    }

    public function aksi_login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $cek = $this->db->get_where("admin",array("username"=>$username));
        if ($cek->num_rows()>0) {
            $user = $cek->row();
            // echo "lalal";
            if (password_verify($password,$user->password)) {
                $this->session->set_userdata($cek->row_array());
                redirect(base_url("admin/home"));
            }else{
                $this->session->set_flashdata('notif', 'Password Salah'); //alert success
                redirect(base_url("member/login"));
    
            }

        }else{
            $this->session->set_flashdata('notif', 'Username Tidak Ditemukan'); //alert success        
            redirect(base_url("member/login"));
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url("member/login"));
    }
}
