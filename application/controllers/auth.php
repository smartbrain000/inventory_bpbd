<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules(
            'username',
            'username',
            'trim|required',
            ['required' => "Harus diisi"]
        );
        $this->form_validation->set_rules(
            'password',
            'password',
            'trim|required',
            ['required' => "Harus diisi"]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $username = data_post('username');
            $password = md5(data_post('password'));

            $cek_user = $this->db->get_where('user', ['username' => $username, 'password' => $password]);
            if ($cek_user->num_rows() > 0) {
                $user = $cek_user->row_array();

                $_SESSION['nama'] = $user['nama'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['notifikasi'] = 1;

                $this->Global_model->notifikasi("Anda Berhasil Login..", 'Berhasil', 'success');
                redirect(base_url('dashboard'));
            } else {
                $this->Global_model->notifikasi("Gagal", 'Anda Gagal Login..', 'error');
                redirect(base_url('auth'));
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_user');
        $this->Global_model->notifikasi("Anda Berhasil Logout..", 'Berhasil', 'success');
        redirect(base_url('auth'));
    }
}
