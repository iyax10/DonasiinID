<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
            background-color: #CD3417;
            padding-top: 95px;
            height: 721px;
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

        .content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 150px 20px;
            background-color: white;
        }

        .card {
            background-color: #f2f2f2;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            margin: 10px;
        }

        .card img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .footer {
            background-color: #CD3417;
            color: white;
            text-align: center;
            font-size: 25px;
            padding: 30px 20px;
        }

        .footer button {
            background-color: white;
            color: #e74c3c;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 20px;
            cursor: pointer;
            margin: 10px;
        }

        .footer a {
            color: #ffff;
            display: flex;
            justify-content: center;
            font-size: 16px;
            gap: 10px;
        }

        .footer p {
            font-size: 20px;
        }

        .footer a img{
            width: 20px;
            height: 20px;
        }

        .footer button:hover {
            background-color: #f2f2f2;
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
        <h2>Satu Juta Relawan Digital untuk <br> Indonesia</h2>
        <p>Menguatkan sinergi antar generasi melalui kolaborasi berbasis teknologi, demi membangun masa depan yang <br> inklusif dan berdaya saing.</p>
        <img  src="<?php echo base_url('assets/img/hero.jpg'); ?>" alt="Hero Image">
    </div>

    <div class="content">
        <div class="card">
            <img src="<?php echo base_url('assets/img/hiring.png'); ?>" alt="Hiring Partner">
            <h3>Hiring Partner</h3>
            <p>Mencari talenta-talenta terbaik untuk bergabung dan menjadi bagian dari tim Donasiin.id.</p>
        </div>
        <div class="card">
            <img src="<?php echo base_url('assets/img/community.png'); ?>" alt="Community Partner">
            <h3>Community Partner</h3>
            <p>Dapatkan beragam manfaat yang bisa membuat komunitas Anda semakin berkembang!</p>
        </div>
        <div class="card">
            <img src="<?php echo base_url('assets/img/volunteer.png'); ?>" alt="Volunteer">
            <h3>Volunteer</h3>
            <p>Mari Berkolaborasi! Bangun dampak positif sambil mengembangkan potensi dirimu sebagai volunteer.</p>
        </div>
    </div>

    <div class="footer">
        <h3><b>Semua Layanan Bisa Saling Terhubung</b></h3>
        <p>Anda bingung memilih layanan yang mana? Tenang, tim kami akan membantu dan <br> Anda bisa memilih lebih dari satu layanan kolaborasi.</p>
        <button onclick="location.href='<?php echo base_url() . 'donasiin/kolabform' ?>'"><b>Kolaborasi Sekarang</b></button>
        <a href=""><img src="<?php echo base_url('assets/img/chat.png'); ?>" alt="">   Hubungi Kami</a>
    </div>

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