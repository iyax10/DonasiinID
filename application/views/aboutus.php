<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   DONASIIN.ID
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
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
        color: #CD3417;
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
        nav .feature.active {
            top: 60px;
            transform: translateY(0);
            opacity: 1;
            z-index: 999;
        }

        nav img {
            display: inline-block;
        }
        }
        /* navbar end */

        header {
    width: 100%;
    height: 631px;
    background-image: url('<?php echo base_url('assets/img/banjir1.png'); ?>'); /* Ganti dengan path gambar Anda */
    border-bottom-left-radius: 100px;
            border-bottom-right-radius: 100px;
    background-size: cover; /* Mengatur gambar agar menutupi seluruh area */
    background-position: center; /* Mengatur posisi gambar di tengah */
    background-repeat: no-repeat; /* Mencegah gambar diulang */
    display: flex;
    justify-content: center;
    align-items: center;
}

       

        header .column-parent {
            height: 631px;
            display: flex;
            width: 1122px;
            justify-content: space-between;
            align-items: center;
            padding-top: 200px;
        }

        header .column-one {
            color: #ffff;
            position: absolute;
    top: 50%;
    left: 7%; /* Ubah menjadi nol untuk rata kiri */
    right: 50%; /* Ubah menjadi nol untuk rata kiri */
    transform: translateY(-50%);
    text-align: left; /* Pastikan teks dalam elemen juga rata kiri */
        }

        header .column-one h1 {
          color: #CD3417;
            font-size: 42px;
            margin: 0;
        }

        header .column-one h1 span {
            color: var(--primary);
        }

        header .column-one p {
          font-size: 25px;
          margin: 10px 0 0;
        }

        header .column-one .donasi {
            color: white;
            outline: none;
            border: 2px solid transparent;
            border-radius: 6px;
            margin-top: 20px;
            background-color: var(--primary);
            width: 178px;
            height: 45px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease, border-color 0.3s ease;
        }

        header .column-one .donasi:hover {
            background-color: var(--secondary);
            border-color: var(--primary);
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header .column-two {
    width: 288px;
    height: 178px;
    border-radius: 9px;
    background-image: url('<?php echo base_url('assets/img/image1.png'); ?>'); 
    color: #ffff;
    cursor: pointer;
    position: relative; /* Tambahkan ini untuk mengatur posisi */
}

header .column-two .berita {
    margin-top: 20px;
    width: 150px; /* Ubah menjadi 100% agar memenuhi lebar kolom */
    justify-content: center;
    font-size: 12px;
    font-weight: 600;
    height: 28px; /* Pastikan ini cukup untuk menampilkan teks */
    display: flex;
    align-items: center;
    background-color: #cd3418; /* Warna latar belakang merah */
    position: absolute; /* Tambahkan ini untuk menempatkan di atas */
    top: 0; /* Atur posisi di atas */
    left: 0; /* Atur posisi di kiri */
}

        header .column-two .keterangan {
            padding: 65px 11px 0px 17px;
        }

        header .column-two .keterangan p {
            font-size: 12px;
        }

        header .column-two .keterangan h3 {
            font-size: 16px;
            font-weight: 500;
            padding-top: 2px;
        }


        

        .content {
            display: flex;
            justify-content: space-around;
            padding: 170px 40px;
            background-color: #f9f9f9;
        }
        .content .section {
            width: 45%;
            left: 7%; /* Ubah menjadi nol untuk rata kiri */
    right: 50%; /* Ubah menjadi nol untuk rata kiri */
        }
        .content .section h2 {
            color: #CD3417;
            font-size: 36px;
        }
        .content .section p {
            font-size: 25px;
            color: #333;
        }

        /* footer */
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
            .content {
                flex-direction: column;
                align-items: center;
            }
            .content .section {
                width: 90%;
                margin-bottom: 20px;
            }
        }
  </style>
 </head>
 <body>
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
  <header>
        <div class="column-parent">
            <div class="column-one">
                <h1>DONASIIN.ID</h1>
                <p>
     adalah platform bantuan kemanusiaan yang dirancang untuk menyatukan hati dan langkah dari berbagai lapisan masyarakat. Kami hadir sebagai jembatan untuk menyalurkan kebaikan, baik dalam bentuk donasi finansial maupun barang seperti pakaian layak pakai, kepada mereka yang membutuhkan.
    </p>
                <!-- <button class="donasi">Donasi Sekarang</button> -->
            </div>
            <!-- <div class="column-two">
                <div class="card" id="newsCard">
                    <p class="berita">Berita Terkini</p>
                    <div class="keterangan">
                        <p class="tanggal">27 November 2024</p>
                        <h3>Hujan Deras Disertai Angin Kencang Mengakibatkan Longsor dan Banjir di Kota Bandung</h3>
                    </div>
                </div>
            </div> -->
        </div>
    </header>
  <!-- <section class="hero">
  <img alt="People in a boat during a flood, helping each other" height="427" src="<?php echo base_url('assets/img/banjir.jpg'); ?>" width="1281"/>
   <div class="hero-text">
    <h1>
     DONASIIN.ID
    </h1>
    <p>
     adalah platform bantuan kemanusiaan yang dirancang untuk menyatukan hati dan langkah dari berbagai lapisan masyarakat. Kami hadir sebagai jembatan untuk menyalurkan kebaikan, baik dalam bentuk donasi finansial maupun barang seperti pakaian layak pakai, kepada mereka yang membutuhkan.
    </p>
   </div>
  </section> -->
  <section class="content">
   <div class="section">
    <h2>
     Visi
    </h2>
    <p>
     Menciptakan dunia yang lebih peduli dan saling mendukung. Tidak hanya melalui donasi uang, kami juga membuka kesempatan bagi Anda untuk berbagi pakaian layak pakai dan kebutuhan lainnya yang dapat membantu mereka yang sedang menghadapi masa sulit, seperti korban bencana alam, kaum dhuafa, dan mereka yang membutuhkan dukungan khusus.
    </p>
   </div>
   <div class="section">
    <h2>
     Misi
    </h2>
    <p>
     Berkomitmen untuk membangun solidaritas sosial dengan menyalurkan donasi uang dan barang secara transparan dan tepat sasaran. Kami bekerja sama dengan mitra terpercaya dan komunitas lokal untuk memberikan bantuan cepat dalam situasi darurat serta memberdayakan masyarakat rentan, menciptakan dampak yang berkelanjutan bagi kehidupan mereka.
    </p>
   </div>
  </section>
  <!-- footer -->
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
 </body>
</html>