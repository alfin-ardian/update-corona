<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->API = "https://api.kawalcorona.com/indonesia/provinsi/";
    }

    public function index()
    {
        $data['provinsi'] = json_decode($this->curl->simple_get($this->API), true);
        $this->load->view('template/header');
        $this->load->view('provinsi', $data);
        $this->load->view('template/footer');
    }
}
