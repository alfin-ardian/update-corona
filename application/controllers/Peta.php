<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        // $peta = json_decode(file_get_contents(''), true);
        $this->load->view('template/header');
        $this->load->view('statistic');
        $this->load->view('template/footer');
    }
}
