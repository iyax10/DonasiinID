<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Donasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            margin-top: 50px; /* Menambahkan margin atas untuk memberi ruang */
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-header {
            background-color: #cd3417; /* Warna merah yang diinginkan */
            color: #fff;
            font-size: 1.5rem;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            font-size: 1.1rem;
            padding: 2rem;
        }
        .table th {
            width: 30%;
            text-align: left;
        }
        .btn-primary {
            background-color: #cd3417; /* Warna merah yang diinginkan */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #a82c14; /* Warna lebih gelap saat hover */
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Status Donasi Anda</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Nama:</th>
                                    <td><?= $nama ?></td>
                                </tr>
                                <tr>
                                    <th>Progress:</th>
                                    <td><?= $progress ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= base_url('donasiin/donasi') ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>&copy; <?= date("Y") ?> DonasiIn. Semua hak dilindungi.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>