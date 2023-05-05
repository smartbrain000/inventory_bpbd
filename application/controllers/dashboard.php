<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');

        if (!$this->session->userdata('username')) {
            $this->Global_model->notifikasi("Gagal", 'Login Terlebih Dahulu!', 'error');
            redirect(base_url("auth"));
        }
        // $this->load->library('fpdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
    // Dashboard
    public function index()
    {
        $data['judul'] = "Dashboard";
        manggil_view('dashboard/index', $data);
    }
    // Profil
    public function profil()
    {
        $data['judul'] = "Profil";
        $where = ['id_user' => $_SESSION['id_user']];
        $data['tampil'] = $this->db->get_where('user', $where)->row_array();
        manggil_view('dashboard/profil', $data);
    }
    public function edit_profil()
    {

        $where = ['id_user' => $_SESSION['id_user']];
        $data['col'] = $this->db->get_where('user', $where)->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('curent_pass', 'Curent Password', 'trim');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Edit Profil";
            manggil_view('dashboard/e_profil', $data);
        } elseif (empty($_POST['curent_pass'])) {
            $kolom = [
                "nama" => data_post('nama'),
                "jabatan" => data_post('jabatan'),
                "username" => data_post('username'),
            ];
            $this->mydb->update_dt($where, $kolom, 'user');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Memperbarui Profil', 'success');
            redirect(base_url('dashboard/profil'));
        } elseif (isset($_POST['curent_pass'])) {
            $kolom = [
                "nama" => data_post('nama'),
                "jabatan" => data_post('jabatan'),
                "username" => data_post('username'),
                "password" => md5(data_post('curent_pass'))
            ];
            $this->mydb->update_dt($where, $kolom, 'user');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Memperbarui Profil', 'success');
            redirect(base_url('dashboard/profil'));
        }
    }
    // Data Barang
    public function barang()
    {
        $data['judul'] = "Data Barang";
        $this->db->group_by('nama_barang');
        $data['tampil'] = $this->db->get('barang_masuk')->result_array();
        manggil_view('dashboard/barang', $data);
    }
    // Stok Barang
    public function stok()
    {
        $data['judul'] = "Stok Barang";
        // $this->db->select('*, sum(stok) as jml')->group_by('nama_barang');
        $this->db->select('*, sum(jml_barang) as jml')->group_by('nama_barang');
        $data['tampil'] = $this->db->get('barang_masuk')->result_array();
        manggil_view('dashboard/stok', $data);
    }
    // Exp Barang
    public function exp()
    {
        $data['judul'] = "Barang Kadaluwarsa";
        $data['tampil'] = $this->Model_barang->data_join();
        manggil_view('dashboard/exp', $data);
    }
    public function hapus_exp($id)
    {
        $this->mydb->del(['id_masuk' => $id], 'barang_masuk');
        $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menghapus Barang Expired', 'success');
        redirect(base_url('dashboard/exp'));
    }
    // Barang Masuk
    public function masuk()
    {
        $data['judul'] = "Barang Masuk";
        $data['join_barangmasuk_kategori'] = $this->Model_barang->data_join();
        // $this->mydb->input_dt($data, 'barang_masuk');

        manggil_view('dashboard/masuk', $data);
        // $this->load->view('v_mahasiswa', $data);
        // $data['tampil'] = $this->db->get('barang_masuk')->result_array();
    }
    public function i_masuk()
    {

        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'trim|required', ['required' => "Harus diisi"]);
        // $this->form_validation->set_rules('stok', 'stok', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('tgl_exp', 'Tanggal Expired', 'trim');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Barang Masuk";
            manggil_view('dashboard/i_masuk', $data);
        } else {
            $data['judul'] = "Tambah Barang Masuk";
            manggil_view('dashboard/i_masuk', $data);
            $kolom = [
                "tgl_masuk" => data_post('tgl_masuk'),
                "nama_barang" => data_post('nama_barang'),
                "jml_barang" => data_post('jml_barang'),
                "stok" => data_post('jml_barang'),
                "satuan" => data_post('satuan'),
                "tgl_exp" => data_post('tgl_exp'),
                "id_sumber" => data_post('sumber'),
                "id_kategori" => data_post('kategori')
            ];

            $this->mydb->input_dt($kolom, 'barang_masuk');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menambahkan Barang Masuk', 'success');
            redirect(base_url('dashboard/masuk'));
        }
    }
    public function hapus_masuk($id)
    {
        $this->mydb->del(['id_masuk' => $id], 'barang_masuk');
        $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menghapus Barang Masuk', 'success');
        redirect(base_url('dashboard/masuk'));
    }
    public function edit_masuk($id)
    {

        $where = ['id_masuk' => $id];
        $data['col'] = $this->db->get_where('barang_masuk', $where)->row_array();
        // $where = ['id_user' => $_SESSION['id_user']];
        // $data['col'] = $this->db->get_where('user', $where)->row_array();
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('tgl_exp', 'Tanggal Expired', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Edit Barang Masuk";
            manggil_view('dashboard/e_masuk', $data);
        } else {
            $kolom = [
                "tgl_masuk" => data_post('tgl_masuk'),
                "nama_barang" => data_post('nama_barang'),
                "jml_barang" => data_post('jml_barang'),
                "satuan" => data_post('satuan'),
                "tgl_exp" => data_post('tgl_exp'),
                "id_sumber" => data_post('sumber'),
                "id_kategori" => data_post('kategori')
            ];

            $this->mydb->update_dt($where, $kolom, 'barang_masuk');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Memperbarui Barang Masuk', 'success');
            redirect(base_url('dashboard/masuk'));
        }
    }
    // Barang Keluar
    public function keluar()
    {
        $data['judul'] = "Barang Keluar";
        $data['tampil'] = $this->Model_barang->keluar();
        manggil_view('dashboard/keluar', $data);
    }
    public function i_keluar()
    {
        $this->form_validation->set_rules('tgl_keluar', 'Tanggal Keluar', 'trim|required', ['required' => "Harus diisi"]);
        $this->form_validation->set_rules('tujuan', 'Tujuan / Posko', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Barang Keluar";
            $data['tampil'] = $this->Model_barang->data_join();
            manggil_view('dashboard/i_keluar', $data);
        } else {
            $id_barang = data_post('id_masuk');
            $qty = data_post('qty');
            $jml = count($id_barang);
            for ($i = 0; $i < $jml; $i++) {
                //mencari data barang masuk
                $barang = $this->db->get_where('barang_masuk', ['id_masuk' => $id_barang[$i]])->row_array();
                //cek qty di isi apa tdk
                if ($qty[$i] != null) {
                    //update kolom stok di tabel barang masuk
                    $stok = $barang['jml_barang'] - $qty[$i];
                    $where = ['id_masuk' => $barang['id_masuk']];
                    $set = ['jml_barang' => $stok];
                    $this->mydb->update_dt($where, $set, 'barang_masuk');

                    //input barang_keluar
                    $kolom = [
                        "id_masuk" => $barang['id_masuk'],
                        "tgl_keluar" => data_post('tgl_keluar'),
                        "jml_barang_keluar" => $qty[$i],
                        "tujuan" => data_post('tujuan'),
                    ];
                    $this->mydb->input_dt($kolom, 'barang_keluar');
                }
            }
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menambahkan Barang Keluar', 'success');
            redirect(base_url('dashboard/keluar'));
        }
    }
    public function hapus_keluar($id)
    {
        $brg_k = $this->db->get_where('barang_keluar', ['id_keluar' => $id])->row_array();
        //mencari data barang masuk berdasarkn id masuk
        $brg_m = $this->db->get_where('barang_masuk', ['id_masuk' => $brg_k['id_masuk']])->row_array();
        //update kolom stok di tabel barang masuk
        $stok = $brg_m['stok'] + $brg_k['jml_barang_keluar'];
        $where = ['id_masuk' => $brg_m['id_masuk']];
        $set = ['stok' => $stok];
        $this->mydb->update_dt($where, $set, 'barang_masuk');

        $this->mydb->del(['id_keluar' => $id], 'barang_keluar');
        $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menghapus Barang Keluar', 'success');
        redirect(base_url('dashboard/keluar'));
    }

    // Sumber Barang
    public function sumber()
    {
        $data['judul'] = "Data Sumber Barang";
        $data['tampil'] = $this->db->get('sumber')->result_array();
        manggil_view('dashboard/sumber', $data);
    }
    public function i_sumber()
    {
        $this->form_validation->set_rules('nama_sumber', 'Sumber', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Data Sumber Barang";
            manggil_view('dashboard/i_sumber', $data);
        } else {
            $kolom = [
                "nama_sumber" => data_post('nama_sumber'),
            ];
            $this->mydb->input_dt($kolom, 'sumber');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menambahkan Sumber', 'success');
            redirect(base_url('dashboard/sumber'));
        }
    }
    public function hapus_sumber($id)
    {
        $this->mydb->del(['id_sumber' => $id], 'sumber');
        $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menghapus Sumber', 'success');
        redirect(base_url('dashboard/sumber'));
    }
    public function edit_sumber($id)
    {

        $where = ['id_sumber' => $id];
        $data['col'] = $this->db->get_where('sumber', $where)->row_array();
        $this->form_validation->set_rules('nama_sumber', 'Sumber Dana', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Edit Data Sumber Barang";
            manggil_view('dashboard/e_sumber', $data);
        } else {
            $kolom = [
                "nama_sumber" => data_post('nama_sumber'),
            ];

            $this->mydb->update_dt($where, $kolom, 'sumber');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Memperbarui Sumber', 'success');
            redirect(base_url('dashboard/sumber'));
        }
    }
    // Kategori Barang
    public function kategori()
    {
        $data['judul'] = "Data Kategori Barang";
        $data['tampil'] = $this->db->get('kategori')->result_array();
        manggil_view('dashboard/kategori', $data);
    }
    public function i_kategori()
    {
        $this->form_validation->set_rules('nama_kategori', 'kategori', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Data Kategori Barang";
            manggil_view('dashboard/i_kategori', $data);
        } else {
            $kolom = [
                "nama_kategori" => data_post('nama_kategori'),
            ];

            $this->mydb->input_dt($kolom, 'kategori');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menambahkan Kategori', 'success');
            redirect(base_url('dashboard/kategori'));
        }
    }
    public function hapus_kategori($id)
    {
        $this->mydb->del(['id_kategori' => $id], 'kategori');
        $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Menghapus Kategori', 'success');
        redirect(base_url('dashboard/kategori'));
    }
    public function edit_kategori($id)
    {
        $where = ['id_kategori' => $id];
        $data['col'] = $this->db->get_where('kategori', $where)->row_array();
        $this->form_validation->set_rules('nama_kategori', 'Kategori Barang', 'trim|required', ['required' => "Harus diisi"]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Edit Data Kategori Barang";
            manggil_view('dashboard/e_kategori', $data);
        } else {
            $kolom = [
                "nama_kategori" => data_post('nama_kategori'),
            ];

            $this->mydb->update_dt($where, $kolom, 'kategori');
            $this->Global_model->notifikasi("Berhasil", 'Anda Berhasil Memperbarui Kategori', 'success');
            redirect(base_url('dashboard/kategori'));
        }
    }
    public function print_masuk()
    {
        $data['judul'] = 'Print Barang Masuk';
        $data['barang_masuk'] = $this->mydb->getAllmasuk();
        $data['join_barangmasuk_kategori'] = $this->Model_barang->data_join();
        $this->load->view('dashboard/print_masuk', $data);
    }
    public function print_keluar()
    {
        $data['judul'] = 'Print Barang Keluar';
        $data['barang_keluar'] = $this->mydb->getAllkeluar();
        $data['tampil'] = $this->Model_barang->keluar();
        $this->load->view('dashboard/print_keluar', $data);
    }
    public function print_stok()
    {
        $data['judul'] = 'Print Stok Barang';
        $data['barang_keluar'] = $this->mydb->getAllstok();
        $this->db->select('*, sum(jml_barang) as jml')->group_by('nama_barang');
        $data['tampil'] = $this->db->get('barang_masuk')->result_array();
        $this->load->view('dashboard/print_stok', $data);
    }
}
