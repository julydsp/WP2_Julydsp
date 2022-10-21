<?php
class data_mahasiswa extends CI_Controller
{
    public function index()
    
    {

        $this->load->view('view-form-data-mahasiswa');
    
    }
    
    public function cetak()
    {
        {
                $data = [
                'name' => $this->input->post('name'),
                'nis' => $this->input->post('nis'),
                'class' => $this->input->post('class'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'gender' => $this->input->post('gender'),
                'agama' => $this->input->post('agama')
            ];
            
        $this->load->view('view-data-mahasiswa', $data);
    }
    }
}