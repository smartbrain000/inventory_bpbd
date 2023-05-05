<?php
defined('BASEPATH') or exit('No direct script access allowed');

function manggil_view($file, $data)
{
    $ieu = get_instance();
    $data['file'] = $file;
    $ieu->load->view('template/index', $data);
}

function data_post($data)
{
    $ini = get_instance();
    return $ini->input->post($data);
}
