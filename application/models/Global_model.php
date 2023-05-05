<?php

class Global_model extends CI_Model
{
    function notifikasi($title, $text, $type)
    {
        $data = [
            'notifikasi' => true,
            'judul' => $title,
            'pesan' => $text,
            'warna' => $type
        ];
        $this->session->set_tempdata($data, NULL, 2);
    }
}
