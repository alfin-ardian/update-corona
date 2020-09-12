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

        $nasional = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
        $data = array(
            'title' => 'peta sebaran',
            'nasional' => $nasional
        );
        $this->load->view('template/header');
        $this->load->view('peta', $data);
        $this->load->view('template/footer');
    }
}
