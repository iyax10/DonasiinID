<section>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
	  <link rel="stylesheet" type="text/css" href="assets/datatables/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables.bootstrap5.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	  <script src="assets/datatables/jquery-3.5.1.js"></script>
	  <script src="assets/datatables/jquery.dataTables.min.js"></script>
	  <script src="assets/datatables/dataTables.bootstrap5.min.js"></script>
</head> 
<body>
    <div class="content-wrapper mt-3">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h5 class="m-0 text-white">Donasi</h5>
                            </div>
                            <div class="card-body">

                            <?php if (isset($_GET['status'])): ?>
                                <script>
        var message;
        var title;
        if ("<?php echo $_GET['status']; ?>" === "success") {
            title = "Sukses!";
            message = "Donasi berhasil disubmit!";
        } else if ("<?php echo $_GET['status']; ?>" === "error") {
            title = "Gagal!";
            message = "Gagal menyimpan donasi. Silakan coba lagi.";
        }

        if (message) {
            swal(title, message, "<?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>");
        }
    </script>
    
<?php endif; ?>

                                <form method="POST" action="<?= base_url('donasi/submit') ?>" enctype="multipart/form-data">
                               
                                  <!-- <?php 
                                    $waktu = date('dmy');
                                    $jumlah = $total_donasi + 1; // Variabel dari controller
                                    $nourut = "DNS" . $waktu . $jumlah; 
                                  ?> -->
                                    <div class="row">
                                        <!-- Kolom Kiri -->
                                        <div class="col-md-6">
                                        <!-- <style>
                                              .hidden {
                                                display: none;
                                              }
                                            </style> -->
                                            <div class="form-group" style="display: none;">
                                                <label for="iddonasi">ID Donasi</label>
                                                <input type="text" name="iddonasi" value="<?php echo $nourut; ?>" class="form-control" id="iddonasi" readonly>
                                            </div> 
                                            <div class="form-group">
                                                <label for="nama">Nama Donatur</label>
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Donatur" required>
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
                                                <label for="alamat">Alamat Lengkap Domisili</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tlp">Nomor Telepon</label>
                                                <input type="text" name="tlp" class="form-control" id="tlp" placeholder="Masukkan Nomor Telepon" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                                            </div>
                                        </div>

                                        <!-- Kolom Kanan -->
                                        <div class="col-md-6">
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
                                            <div class="form-group">
                                                <label for="foto">Drive Foto Barang Donasi</label>
                                                <input type="text" name="foto" class="form-control" id="foto" placeholder="Masukkan Link Drive Foto" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tombol -->
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-sm btn-success">
                                            <i class="fa fa-save"></i> Donasi
                                        </button>
                                        <button type="reset" class="btn btn-sm btn-warning">
                                            <i class="fa fa-sync-alt"></i> Reset
                                        </button>
                                        <a href="<?= base_url('donasi') ?>" class="btn btn-sm btn-danger">
                                            <i class="fa fa-reply-all"></i> Back
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a href="<?= base_url('donasi/datadonasi') ?>" class="btn btn-sm btn-info">
                                <i class="fa fa-search"></i> Cek Kontribusi Donasi Anda
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

           