<?php

class home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.kawalcorona.com/positif');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;

        // mengubah JSON menjadi array
        $data = json_decode($output, TRUE);
    }
}
