<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mydb extends CI_Model
{
    //INPUT, UPDATE, EDIT
    public function input_dt($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function update_dt($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function del($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function getAllmasuk()
    {
        return  $this->db->get_where('barang_masuk', ['left(`barang_masuk`.`tgl_masuk`,7)'])->result_array();
    }
    function getAllkeluar()
    {
        return  $this->db->get_where('barang_keluar', ['left(`barang_keluar`.`tgl_keluar`,7)'])->result_array();
    }
    function getAllstok()
    {
        return  $this->db->get_where('barang_masuk', ['left(`barang_masuk`.`tgl_masuk`,7)'])->result_array();
    }
}
