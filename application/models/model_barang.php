<?php
class Model_barang extends CI_Model
{

    public function sumber()
    {
        $query = $this->db->get_where('sumber', ['id_sumber'])->result_array();
        return $query;
    }

    public function data_join()
    {
        $this->db->from('barang_masuk');
        $this->db->join('kategori', 'kategori.id_kategori=barang_masuk.id_kategori');
        $this->db->join('sumber', 'sumber.id_sumber=barang_masuk.id_sumber');
        return $this->db->get()->result_array();
    }

    //join table barang_masuk with barang_keluar
    public function join_barangmasuk_barangkeluar()
    {
        $tgl = date_default_timezone_set('Asia/Bangkok');
        $this->db->from('barang_masuk');
        $this->db->join('barang_keluar', 'barang_masuk.id_barang_masuk=barang_keluar.id_barang_masuk');
        $this->db->join('sumber', 'sumber.id_sumber=barang_masuk.id_sumber');
        $this->db->where('tgl_exp >=' . $tgl);

        return $this->db->get()->result_array();
    }
    //join id barang_masuk dan barang_keluar
    public function keluar()
    {
        $this->db->select('b.*, tujuan, tgl_keluar, id_keluar, jml_barang_keluar')
            ->from('barang_keluar a');
        $this->db->join('barang_masuk b', 'a.id_masuk = b.id_masuk');
        return $this->db->get()->result_array();
    }
    //dashboard
    public function dash_barangmasuk()
    {
        $this->db->select_sum('jml_barang')->from('barang_masuk');
        return $this->db->get()->row_array();
    }
    public function dash_barangkeluar()
    {
        $this->db->select_sum('jml_barang_keluar')->from('barang_keluar');
        return $this->db->get()->row_array();
    }
    public function dash_barang()
    {
        $this->db->from('barang_masuk')->group_by('nama_barang');
        return $this->db->count_all_results();
    }
}
