<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <title>Donasiin.id</title>
    <style>
        body {
            margin: 0;
            font-family: "Roboto", sans-serif;
            
        }
        :root{
            --primary: #cd3417;
        } 

                /* navbar start */

        nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1.4px solid var(--primary);
        margin: 20px auto;
        width: 87%;
        height: 55px;
        border-radius: 19px;
        background-color: white;
        padding: 0 32px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        }

        nav h1 {
        color: var(--primary);
        font-size: 1.8rem;
        }

        nav .feature {
        display: flex;
        gap: 1.5rem;
        align-items: center;
        position: relative;
        }

        nav .feature a {
        color: #6d6c6c;
        text-decoration: none;
        }

        nav .feature a.active {
            color: #CD3417; /* Ubah warna teks */
            font-weight: bold; /* Menebalkan teks */
            border-bottom: 2px solid #CD3417; /* Menambahkan garis bawah */
        }

        nav .feature .daftar {
        color: white;
        outline: none;
        border: none;
        border-radius: 6px;
        background-color: var(--primary);
        width: 127px;
        cursor: pointer;
        height: 37px;
        }
        nav img {
        display: none;
        }

        /* Mobile styles for dropdown and navbar */
        @media (max-width: 768px) {
        nav {
            width: 80%;
            height: 5%;
        }
        nav h1 {
            font-size: 1.3rem;
        }

        nav .feature {
            position: absolute;
            flex-direction: column;
            display: flex;
            width: 87%;
            font-weight: 600;
            top: -300px;
            background-color: #ffff;
            z-index: -1;
            opacity: 0;
            transform: translateY(-100%);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        nav .feature a {
            padding-bottom: 10px;
            border-bottom: 1px solid #cd3417;
            width: 100%;
            text-align: center;
        }
        /* nav .feature.active {
            top: 60px;
            transform: translateY(0);
            opacity: 1;
            z-index: 999;
        } */

        nav .feature a.active {
            color: #CD3417; /* Ubah warna teks */
            font-weight: bold; /* Menebalkan teks */
            border-bottom: 2px solid #CD3417; /* Menambahkan garis bawah */
        }

        nav img {
            display: inline-block;
        }
        }
        /* navbar end */

        .hero {
            background-image: url('<?php echo base_url('assets/img/frame.png'); ?>'); 
            padding-top: 95px;
            height: 300px;
            color: white;
            text-align: center;
            font-size: 30px;
        }

        .hero p {
            font-size: 20px;
            padding: 35px;
        }

        .hero img {
            width: 100%;
            max-height: 480px;
            object-fit: cover;
        }

        .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
        /* margin: 20px; */
        width: 100%;
        height: 100vh; /* Tinggi 100% dari viewport */
    }
        .left, .right {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            
        }
        .left {
    width: 40%; 
    height: 70%; 
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
}
        .right {
            width: 50%;
            border: 2px solid #ff4500;
        }
        h1 {
            color: #ff4500;
            text-align: center;
        }
        .description {
            color: #ff4500;
            text-align: center;
            margin-bottom: 20px;
        }
        .news {
            position: relative;
        }
        .news img {
            width: 100%;
            height:auto;
            border-radius: 10px;
        }
        .news .label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ff4500;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .news .date, .news .title {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .news .date {
            font-size: 14px;
        }
        .news .title {
            font-size: 18px;
            font-weight: bold;
        }
        .donation-info {
            color: #ff4500;
            text-align: center;
            margin-top: 20px;
        }
        .form-title {
            color: #ff4500;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 97%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group div {
    display: flex; /* Menggunakan flexbox untuk mengatur posisi */
    align-items: center; /* Menyelaraskan item secara vertikal */
    margin-bottom: 10px; /* Jarak antar radio button */
}
        .form-group input[type="radio"] {
            width: auto;
            margin-right: 10px;
            
        }
        .form-group .radio-label {
            display: block;
            margin-bottom: 5px;
        }
        .form-buttons {
            display: flex;
            justify-content: space-between;
        }
        .form-buttons button {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-buttons .submit {
            background-color: #28a745;
        }
        .form-buttons .reset {
            background-color: #dc3545;
        }

/* cek donasi */
.donation-check {
    background-color: #ffffff;
    border-radius: 10px; /* Sesuaikan dengan border-radius di bagian lain */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sesuaikan dengan gaya lain */
    padding: 25px; /* Sesuaikan padding */
    width: calc(100% - 150px); /* Lebar 100% dikurangi ruang di kanan dan kiri */
    margin: 20px auto; /* Margin atas dan bawah, auto untuk kiri dan kanan */
    text-align: center; /* Teks di tengah */
}

.donation-check h2 {
    font-size: 24px; /* Ukuran font yang lebih kecil untuk konsistensi */
    margin-bottom: 15px; /* Jarak bawah yang lebih kecil */
    color: var(--primary); /* Menggunakan variabel warna */
}

.input-group {
    margin-bottom: 15px; /* Jarak bawah yang lebih kecil */
    text-align: left; /* Teks di kiri */
}

.input-group label {
    font-size: 16px; /* Ukuran font yang lebih kecil */
    margin-bottom: 5px; /* Jarak bawah yang lebih kecil */
    color: #495057; /* Warna label */
}

.input-group input {
    width: 98%; /* Lebar penuh */
    padding: 10px ; /* Padding yang lebih kecil */
    font-size: 16px; /* Ukuran font */
    border: 1px solid #ced4da; /* Border yang lebih halus */
    border-radius: 5px; /* Border radius yang lebih kecil */
    transition: border-color 0.3s; /* Transisi border */
}

.input-group input:focus {
    border-color: var(--primary); /* Menggunakan variabel warna */
    outline: none; /* Menghilangkan outline */
}

.check-button {
    background-color: var(--primary); /* Menggunakan variabel warna */
    color: #ffffff; /* Warna teks putih */
    padding: 10px 20px; /* Padding yang lebih kecil */
    font-size: 16px; /* Ukuran font */
    border: none; /* Tanpa border */
    border-radius: 5px; /* Border radius yang lebih kecil */
    cursor: pointer; /* Pointer saat hover */
    display: inline-flex; /* Flexbox untuk ikon dan teks */
    align-items: center; /* Menyelaraskan item secara vertikal */
    transition: background-color 0.3s; /* Transisi warna latar belakang */
}

.check-button i {
    margin-right: 5px; /* Jarak antara ikon dan teks */
}




        footer {
  height: 280px;
  display: flex;
  padding: 42px 600px 42px 0px;
  gap: 350px;
  justify-content: center;
  background-color: #CD3417;
  color: #ffff;
}

footer .column-one {
  width: 399px;
  padding: 10px 40px 0px 0px;
  
}
footer .column-two {
display: flex;
flex-direction: column;
gap: 18px;
padding: 10px 40px 0px 18px;


}
footer .column-one .keterangan {
  margin-top: 12px;
}
footer .column-one .location {
  display: flex;
  margin-top: 30px;
  gap: 15px;
}
footer .column-one .location p {
  width: 231px;
}

footer .column-two .email,
footer .column-two .telp ,
footer .column-two .social-media {
  display: flex;
  gap: 10px;
  align-items: center;
}
footer .column-two .email p,
footer .column-two .telp p {
  font-size: 18px;
}

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
            .left, .right {
                max-width: 100%;
            }
            .right {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- navbar start -->
  <nav>
    <h1>DONASIIN.ID</h1>
    <div class="feature" id="feature">
      <a href="<?php echo base_url() . 'donasiin' ?>" >Beranda</a>
      <a href="<?php echo base_url() . 'donasiin/donasi' ?>">Donasi</a>
      <a href="<?php echo base_url() . 'donasiin/kolab' ?>">Kolaborasi Berdampak</a>
      <a href="<?php echo base_url() . 'donasiin/about' ?>">Tentang kami</a>
      <!-- <button class="daftar">Daftar</button> -->
    </div>
    <img src="assets/menu (1).svg" alt="">
  </nav>

    <div class="hero">
        <h2>DONASIIN.ID <br>Bergerak Membantu Negeri</h2>
        <!-- <p>Kontribusi kecil Anda dapat membawa dampak besar bagi mereka yang  <br> membutuhkan, seperti korban bencana, pendidikan, dan kesehatan..</p> -->
        <!-- <img  src="<?php echo base_url('assets/img/hero.jpg'); ?>" alt="Hero Image"> -->
    </div>
    
    <div class="donation-check">
    <h2>CEK STATUS DONASI ANDA</h2>
    <form method="POST" action="<?= base_url('donasiin/cekstatusdonasi') ?>">
        <div class="input-group">
            <input type="text" id="cekdonasi" name="iddonasi" placeholder="Masukkan Kode ID Donasi Anda">
        </div>
        <button type="submit" class="check-button"><i class="fas fa-search"></i> Cek Status</button>
    </form>

    <!-- Pesan error jika ada -->
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?= $this->session->flashdata('error') ?></p>
    <?php endif; ?>
</div>




    <div class="container">
    <div class="left">
        <div class="news">
            <img alt="Gambar berita terkini tentang hujan deras disertai angin kencang mengakibatkan longsor dan banjir di Kota Bandung" height="300" src="<?php echo base_url('assets/img/banjir1.png'); ?>" width="500"/>
            <div class="label">Berita Terkini</div>
            <div class="date">27 November 2024</div>
            <div class="title">Hujan Deras Disertai Angin Kencang Mengakibatkan Longsor dan Banjir di Kota Bandung</div>
        </div>
        <p class="donation-info">Untuk Donasi saat ini kami salurkan kepada korban bencana longsor dan banjir di Kota Bandung</p>
    </div>
    <div class="right">
        <h2 class="form-title">Form Donasi</h2>
        <!-- untuk status setelah submit -->
        <?php if (isset($_GET['status'])): ?>
    <script>
        var message;
        var title;
        var iddonasi = "<?php echo isset($_GET['iddonasi']) ? $_GET['iddonasi'] : ''; ?>"; // Ambil iddonasi dari query string

        if ("<?php echo $_GET['status']; ?>" === "success") {
            title = "Sukses";
            title = "ID Donasi Anda: " + iddonasi ;
            message = "Pastikan anda mengingat dan menyimpan ID Donasi Anda"; // Tampilkan iddonasi
        } else if ("<?php echo $_GET['status']; ?>" === "error") {
            title = "Gagal!";
            message = "Gagal menyimpan donasi. Silakan coba lagi.";
        }

        if (message) {
            swal(title, message, "<?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>");
        }
    </script>
<?php endif; ?>
<form method="POST" action="<?= base_url('donasiin/submitdonasi') ?>" enctype="multipart/form-data">
                                  <?php 
                                    $waktu = date('dmy');
                                    $jumlah = $total_donasi + 1; // Variabel dari controller
                                    $nourut = "DNS" . $waktu . $jumlah; 
                                  ?> 

            <div class="form-group" style="display: none;">
                <label for="iddonasi">ID Donasi</label>
                <input type="text" name="iddonasi" value="<?php echo $nourut; ?>" class="form-control" id="iddonasi" readonly>
            </div> 

            <div class="form-group">
                <label for="nama">Nama Donatur</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Donatur" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
            </div>

            <div class="form-group">
                                                <label for="kota">Pilih Kota</label>
                                                <select name="kota" class="form-control" id="kota" required>
                                                    <option value="">Pilih</option>
                                                    <option value="Jakarta">Jakarta</option>
                                                    <option value="Depok">Depok</option>
                                                    <option value="Bogor">Bogor</option>
                                                    <option value="Tanggerang">Tanggerang</option>
                                                    <option value="Bekasi">Bekasi</option>
                                                </select>
            </div>

            <div class="form-group">
                  <label for="alamat">Alamat Domisili</label>
                  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap" required>
            </div>

            <div class="form-group">
                   <label for="tlp">Nomor Telepon</label>
                  <input type="text" name="tlp" class="form-control" id="tlp" placeholder="Masukkan Nomor Telepon" required>
            </div>

            <div class="form-group">
                   <label for="foto">URL Drive Foto Barang Donasi</label>
                  <input type="text" name="foto" class="form-control" id="foto" placeholder="Masukkan Link Drive Foto" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah Barang yang Didonasikan</label>
                 <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Barang" required>
            </div>

            <div class="form-group">
                                                <label for="kategori">Kategori Barang</label>
                                                <div>
                                                    <input type="radio" name="kategori" value="Pria" id="kategoriPria" required>
                                                    <label for="kategoriPria">Pria</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="kategori" value="Wanita" id="kategoriWanita">
                                                    <label for="kategoriWanita">Wanita</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="kategori" value="Keduanya" id="kategoriKeduanya">
                                                    <label for="kategoriKeduanya">Keduanya</label>
                                                </div>
              </div>
            <div class="form-buttons">
                <button class="submit" type="submit">KIRIM</button>
                <button class="reset" type="reset">RESET</button>
            </div>
        </form>
    </div>
</div>

    <footer>
    <div class="column-one">
      <h1>DONASIIN.ID</h1>
      <p class="keterangan">Kami telah memiliki izin pengumpulan uang dan barang untuk bencana di kementerian sosial
        republik Indonesia
      </p>
      <div class="location">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
          <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
            <path
              d="M7.25 10a4.75 4.75 0 1 1 9.5 0a4.75 4.75 0 0 1-9.5 0M12 6.75a3.25 3.25 0 1 0 0 6.5a3.25 3.25 0 0 0 0-6.5" />
            <path
              d="M3.524 8.857a8.29 8.29 0 0 1 8.26-7.607h.432a8.29 8.29 0 0 1 8.26 7.607a8.94 8.94 0 0 1-1.99 6.396l-4.793 5.861a2.187 2.187 0 0 1-3.386 0l-4.793-5.861a8.94 8.94 0 0 1-1.99-6.396m8.26-6.107A6.79 6.79 0 0 0 5.02 8.98a7.44 7.44 0 0 0 1.656 5.323l4.793 5.862a.687.687 0 0 0 1.064 0l4.793-5.862A7.44 7.44 0 0 0 18.98 8.98a6.79 6.79 0 0 0-6.765-6.23z" />
          </g>
        </svg>
        <p>Grand Depok City, Jl. Jati Raya No.106, Depok, Jawa Barat</p>
      </div>
    </div>
    <div class="column-two">
      <div class="email">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
        </svg>
        donasiinidofficial.gmail.com
      </div>
      <div class="telp">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M3.833 4h4.49L9.77 7.618l-2.325 1.55A1 1 0 0 0 7 10c.003.094 0 .001 0 .001v.021a2 2 0 0 0 .006.134q.008.124.035.33c.039.27.114.642.26 1.08c.294.88.87 2.019 1.992 3.141s2.261 1.698 3.14 1.992c.439.146.81.22 1.082.26a4 4 0 0 0 .463.04l.013.001h.008s.112-.006.001 0a1 1 0 0 0 .894-.553l.67-1.34l4.436.74v4.32c-2.111.305-7.813.606-12.293-3.874S3.527 6.11 3.833 4m5.24 6.486l1.807-1.204a2 2 0 0 0 .747-2.407L10.18 3.257A2 2 0 0 0 8.323 2H3.781c-.909 0-1.764.631-1.913 1.617c-.34 2.242-.801 8.864 4.425 14.09s11.848 4.764 14.09 4.425c.986-.15 1.617-1.004 1.617-1.913v-4.372a2 2 0 0 0-1.671-1.973l-4.436-.739a2 2 0 0 0-2.118 1.078l-.346.693a5 5 0 0 1-.363-.105c-.62-.206-1.481-.63-2.359-1.508s-1.302-1.739-1.508-2.36a5 5 0 0 1-.125-.447z" />
        </svg>
        <p>+62 812-9090-9992</p>
      </div>
      <div class="social-media">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
          <path fill="currentColor" fill-opacity="0" d="M12 11L12 12L12 13z">
            <animate fill="freeze" attributeName="d" begin="0.6s" dur="0.2s"
              values="M12 11L12 12L12 13z;M10 8.5L16 12L10 15.5z" />
            <set fill="freeze" attributeName="fill-opacity" begin="0.6s" to="1" />
          </path>
          <path fill="none" stroke="currentColor" stroke-dasharray="64" stroke-dashoffset="64" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" d="M12 5c9 0 9 0 9 7c0 7 0 7 -9 7c-9 0 -9 0 -9 -7c0 -7 0 -7 9 -7Z">
            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0" />
          </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24">
          <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            color="currentColor">
            <path
              d="M2.5 12c0-4.478 0-6.718 1.391-8.109S7.521 2.5 12 2.5c4.478 0 6.718 0 8.109 1.391S21.5 7.521 21.5 12c0 4.478 0 6.718-1.391 8.109S16.479 21.5 12 21.5c-4.478 0-6.718 0-8.109-1.391S2.5 16.479 2.5 12" />
            <path d="M16.5 12a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m1.008-5.5h-.01" />
          </g>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 14 14">
          <g fill="none">
            <g clip-path="url(#primeTwitter0)">
              <path fill="currentColor"
                d="M11.025.656h2.147L8.482 6.03L14 13.344H9.68L6.294 8.909l-3.87 4.435H.275l5.016-5.75L0 .657h4.43L7.486 4.71zm-.755 11.4h1.19L3.78 1.877H2.504z" />
            </g>
            <defs>
              <clipPath id="primeTwitter0">
                <path fill="#fff" d="M0 0h14v14H0z" />
              </clipPath>
            </defs>
          </g>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
        </svg>
      </div>
      <div class="cp">
        <h4>Hak Cipta &copy; 2024 DONASIIN.ID</h4>
        <p>"Bersama Kita Ciptakan Perubahan."</p>
      </div>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Mengambil URL saat ini
        var currentUrl = window.location.href;

        // Menandai tautan aktif berdasarkan URL
        $('.feature a').each(function() {
            if (this.href === currentUrl) {
                $(this).addClass('active');
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- SweetAlert2 Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>