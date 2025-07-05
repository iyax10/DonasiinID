<?php

class Donasiin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Donasi_model'); // Load model Donasi_model
        $this->load->database(); // Pastikan database di-load
    }

    public function index()
    {
      
        $this->load->view('beranda.php');
      
     }

    public function kolab()
    {
      
        $this->load->view('kolab.php');
      
     }

     public function kolabform()
    {
      
        $this->load->view('formkolab.php');
      
    }

    public function submitkolab()
{
    // Ambil data dari form
    $data = [
        'nama'      => $this->input->post('nama'),
        'lahir'     => $this->input->post('lahir'),
        'alamat'    => $this->input->post('alamat'),
        'telepon'   => $this->input->post('telepon'),
        'email'     => $this->input->post('email'),
        'jenjang'   => $this->input->post('jenjang'),
        'institusi' => $this->input->post('institusi'),
        'cv'        => $this->input->post('cv'),
        'kategori'  => $this->input->post('kategori'),
        'created_at' => date('Y-m-d H:i:s') // Tambahkan waktu pembuatan
    ];

    // Simpan ke database menggunakan model
    if ($this->Donasi_model->insert_kolab($data)) {
        // Redirect ke halaman data_kolab dengan parameter query string
        redirect('donasiin/kolabform?status=success');
    } else {
        // Redirect ke halaman form dengan parameter query string
        redirect('donasiin/kolabform?status=error');
    }
}





    // Menampilkan Form Donasi
    public function donasi($message = null) 
    {
        $total_donasi = $this->Donasi_model->getTotalDonasi(); // Mendapatkan total donasi dari model
        $iddonasi = $this->input->get('iddonasi'); // Ambil iddonasi dari query string
    
        $data = [
            'total_donasi' => $total_donasi, // Kirim data ke view
            'message' => $message ? $message : '', // Pastikan variabel message selalu terdefinisi
            'iddonasi' => $iddonasi ? $iddonasi : '' // Kirim iddonasi ke view
        ];
        $this->load->view('donasi.php', $data);
    }

    // submit data donasi
    public function submitdonasi()
{
    // Generate ID Donasi secara otomatis
    $total_donasi = $this->Donasi_model->getTotalDonasi();
    $jumlah = $total_donasi + 1;
    $waktu = date('dmy');
    $iddonasi = "DNS" . $waktu . $jumlah;

    $data = [
        'iddonasi'     => $iddonasi,
        'nama'         => $this->input->post('nama'),
        'kota'         => $this->input->post('kota'),
        'alamat'       => $this->input->post('alamat'),
        'tlp'          => $this->input->post('tlp'),
        'email'        => $this->input->post('email'),
        'jumlah'       => $this->input->post('jumlah'),
        'kategori'     => $this->input->post('kategori'),
        'foto'         => $this->input->post('foto'),
        'created_at'   => date('Y-m-d H:i:s'), // Tambahkan waktu donasi
        'progress'     => 'Pengecekan' // Tambahkan progress dengan nilai "Pengecekan"
    ];

    // Simpan ke database menggunakan model
    if ($this->Donasi_model->insert_donasi($data)) {
        // Redirect ke halaman donasi dengan parameter query string
        redirect('donasiin/donasi?status=success&iddonasi=' . $iddonasi);
    } else {
        // Redirect ke halaman form dengan parameter query string
        redirect('donasiin/donasi?status=error');
    }

}

public function cekstatusdonasi()
{
    // Ambil ID Donasi dari input
    $iddonasi = $this->input->post('iddonasi');

    // Validasi input kosong
    if (empty($iddonasi)) {
        $this->session->set_flashdata('error', 'Harap masukkan ID Donasi!');
        redirect('donasiin/donasi');
    }

    // Ambil data donasi berdasarkan ID
    $donasi = $this->Donasi_model->get_donasi_by_id($iddonasi);

    // Jika data ditemukan, tampilkan di view baru
    if ($donasi) {
        $data = [
            'nama' => $donasi['nama'],
            'progress' => $donasi['progress']
        ];
        $this->load->view('hasil_donasi.php', $data);
    } else {
        // Jika tidak ditemukan, redirect kembali dengan pesan error
        $this->session->set_flashdata('error', 'ID Donasi tidak ditemukan!');
        redirect('donasiin/donasi');
    }
}





     public function about()
    {
      
        $this->load->view('aboutus.php');
      
    }
   
}