<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function about()
    {
        $data['judul'] = 'Halaman Depan'; // Perbaikan: Menggunakan tanda kutip yang benar
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
}
?>