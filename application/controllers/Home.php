<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $API = '';
    public function __construct()
    {
        parent::__construct();
        $this->API = "https://api.kawalcorona.com";
        $this->load->model('home_model');
    }

    public function index()
    {
        $data['positif'] = json_decode($this->curl->simple_get($this->API . '/positif'));
        $data['meninggal'] = json_decode($this->curl->simple_get($this->API . '/meninggal'));
        $data['sembuh'] = json_decode($this->curl->simple_get($this->API . '/sembuh'));
        $this->load->view('template/header');
        $this->load->view('home', $data);
        $this->load->view('template/footer');
    }
}
