<html>
<head>
    <title>Kolab Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, #f0f2f5, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            margin: 0;
            position: relative;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: none;
            border: none;
            font-size: 20px;
            color: #CD3417;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .back-button i {
            margin-right: 10px;
            font-size: 24px;
        }
        .container {
            background:linear-gradient(to bottom, #f0f2f5, #ffffff);
            padding: 15px 40px;
            border-radius: 10px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            width: 100%;
            max-width: 600px;
        }
        .container h1 {
            color: #CD3417;
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
           
        }
        .container p {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
            
        }
        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .radio-group {
    display: flex; /* Menggunakan flexbox untuk mengatur posisi */
    align-items: center; /* Menyelaraskan item secara vertikal */
}

.radio-group div {
    display: flex; /* Menggunakan flexbox untuk mengatur posisi label dan radio button */
    align-items: center; /* Menyelaraskan item secara vertikal */
    margin-right: 20px; /* Jarak antar radio button */
}

.radio-group input[type="radio"] {
    margin-right: 5px; /* Jarak antara radio button dan label */
}

        .form-group .submit-btn {
            background: #4CAF50;
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        .form-group .submit-btn i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <button class="back-button" onclick="window.history.back();">
        <i class="fas fa-arrow-left"></i> Kembali ke halaman sebelumnya
    </button>
    <div class="container">
        <h1>DONASIIN.ID</h1>
        <p>Silahkan isi form kolaborasi berdampak anda</p>

        <!-- untuk status setelah submit -->
        <?php if (isset($_GET['status'])): ?>
                                <script>
        var message;
        var title;
        if ("<?php echo $_GET['status']; ?>" === "success") {
            title = "Permintaan Kolaborasi Anda Berhasi Dikirim!";
            message = "Kami akan informasikan progress lanjut melalui Email prefensi Anda";
        } else if ("<?php echo $_GET['status']; ?>" === "error") {
            title = "Gagal!";
            message = "Gagal Mengirim Permintaan Kolaborasi. Silakan coba lagi.";
        }

        if (message) {
            swal(title, message, "<?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>");
        }
    </script>
    
<?php endif; ?>
    <form method="POST" action="<?= base_url('donasiin/submitkolab') ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Lengkap *</label>
                <input type="text" id="nama" name="nama"  required>
            </div>
            <div class="form-group">
                <label for="lahir">Tanggal Lahir *</label>
                <input type="date" id="lahir" name="lahir" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Domisili *</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon *</label>
                <input type="text" id="telepon" name="telepon" required>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="jenjang">Jenjang Saat Ini *</label>
                <select id="jenjang" name="jenjang" required>
                    <option value="sma">SMA/SMK</option>
                    <option value="diploma">Diploma</option>
                    <option value="sarjana">Sarjana</option>
                    <option value="magister">Magister</option>
                    <option value="doktor">Doktor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="institusi">Nama Institusi *</label>
                <input type="text" id="institusi" name="institusi" required>
            </div>
            <div class="form-group">
                <label for="cv">Link CV/Portofolio *</label>
                <input type="url" id="cv" name="cv" required>
            </div>

            <div class="form-group">
    <label for="kategori">Tipe Kolaborasi</label>
    <div class="radio-group">
        <div>
            <input type="radio" name="kategori" value="Fulltime" id="kategorifull" required>
            <label for="kategorifull">Fulltime</label>
        </div>
        <div>
            <input type="radio" name="kategori" value="Partime" id="kategoripart">
            <label for="kategoripart">Part Time</label>
        </div>
        <div>
            <input type="radio" name="kategori" value="Dailywork" id="kategoridaily">
            <label for="kategoridaily">Daily Work</label>
        </div>
        <div>
            <input type="radio" name="kategori" value="Volunteer" id="kategorivolunteer">
            <label for="kategorivolunteer">Volunteer</label>
        </div>
    </div>
</div>             
            <div class="form-group">
                <button type="submit" class="submit-btn"><i class="fas fa-save"></i><b> Simpan<b></button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>