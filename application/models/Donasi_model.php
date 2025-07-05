<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_model extends CI_Model {

    // BAGIAN UNTUK DONASI
    // Mendapatkan total jumlah donasi
    public function getTotalDonasi()
    {
        $query = $this->db->get('tbdonasi'); // Ambil data dari tabel tbdonasi
        return $query->num_rows(); // Kembalikan jumlah baris
    }

    // Menambahkan data donasi baru
    public function insert_donasi($data)
    {
        return $this->db->insert('tbdonasi', $data); // Simpan data ke tabel tbdonasi
    }

    // Mendapatkan semua data donasi
    public function getAllDonasi()
    {
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('tbdonasi'); // Ambil data dari tabel tbdonasi
        return $query->result_array(); // Kembalikan hasil sebagai array
    }

  

    public function get_donasi_by_id($iddonasi)
{
    $this->db->where('iddonasi', $iddonasi);
    $query = $this->db->get('tbdonasi'); // Pastikan nama tabelnya "donasi"
    return $query->row_array(); // Kembalikan data sebagai array
}

    


    // BAGIAN UNTUK KOLAB
     // Menambah data kolab
    public function insert_kolab($data)
{
    return $this->db->insert('tbkolab', $data);
}


}