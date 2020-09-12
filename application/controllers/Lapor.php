<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lapor_model');
    }

    public function index()
    {

        $data['pasien'] = $this->Lapor_model->getAll();
        $this->load->view('template/header');
        $this->load->view('data_pasien', $data);
        $this->load->view('template/footer');
    }

    public function report()
    {
        $this->load->view('template/header');
        $this->load->view('lapor');
        $this->load->view('template/footer');
    }

    public function proses()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('telephon', 'Telephon', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('gejala', 'Gejala', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('penanganan', 'Penanganan', 'trim|required|min_length[2]');

        if ($this->form_validation->run() == true) {
            $nama = $this->input->post('nama');
            $telephon = $this->input->post('telephon');
            $gejala = $this->input->post('gejala');
            $alamat = $this->input->post('alamat');
            $penanganan = $this->input->post('penanganan');
            $this->Lapor_model->proses($nama, $telephon, $gejala, $alamat, $penanganan);
            $this->session->set_flashdata('success_lapor', 'Proses Lapor berhasil');
            redirect('lapor');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('lapor');
        }
    }

    public function edit($id)
    {
        $data['pasien']  = $this->Lapor_model->getById($id);
        $this->load->view('template/header');
        $this->load->view('edit', $data);
        $this->load->view('template/footer');
    }


    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('gejala', 'Gejala', 'required');
        $this->form_validation->set_rules('telephon', 'Telephon', 'required');
        $this->form_validation->set_rules('penanganan', 'Penanganan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['nama'] = $this->input->post('nama');
            $data['gejala'] = $this->input->post('gejala');
            $data['telephon'] = $this->input->post('telephon');
            $data['penanganan'] = $this->input->post('penanganan');
            $data['alamat'] = $this->input->post('alamat');
            $this->Lapor_model->update($data, $id);
            $this->session->set_flashdata('success_edit', 'Proses edit berhasil');
            redirect('lapor');
        } else {
            $id = $this->input->post('id');
            $data['pasien'] = $this->siswa_model->getById($id);
            $this->load->view('template/header');
            $this->load->view('edit');
            $this->load->view('template/footer');
            $this->session->set_flashdata('error', validation_errors());
        }
    }

    public function delete($id)
    {
        $this->Lapor_model->delete($id);
        $this->session->set_flashdata('success_delete', 'Delete berhasil');
        redirect('lapor');
    }
}
