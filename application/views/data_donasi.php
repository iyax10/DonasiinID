<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Donasi</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href ="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
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
                            <div class="card-header" style="background-color: #B2C8DF">
                                <h5 class="m-0">Data Donasi</h5>
                            </div>
<!-- 
                            <?php if ($this->session->flashdata('message')): ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('message'); ?>
    </div>
<?php endif; ?> -->

                            <div class="card-body" style="overflow-x: auto;">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><i class="fa fa-list"></i></th>
                                            <th>ID Donasi</th>
                                            <th>Nama Donatur</th>
                                            <th>Kota</th>
                                            <th>Alamat</th>
                                            <th>No. Telepon</th>
                                            <th>Email</th>
                                            <th>Jumlah Barang</th>
                                            <th>Barang Didonasikan</th>
                                            <th>Foto</th>
                                            <th>Tanggal Donasi</th>
                                            <th>Progres</th>
                                            <th class="text-center"><i class="fa fa-cog"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
    $no = 1;
    // Periksa apakah $donasi ada dan tidak kosong
    if (isset($donasi) && !empty($donasi)) {
        foreach ($donasi as $row) { ?>
                                                                    
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['iddonasi']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['kota']; ?></td>
                                                <td><?php echo $row['alamat']; ?></td>
                                                <td><?php echo $row['tlp']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['jumlah']; ?></td>
                                                <td><?php echo $row['kategori']; ?></td>
                                                <td><?php echo $row['foto']; ?></td>
                                                <td><?php echo $row['created_at']; ?></td>
                                                <td><?php echo $row['progress']; ?></td>
                                                <td class="text-center">
                                                    <a href="<?= base_url('donasi/detail/' . $row['iddonasi']); ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a>
                                                    <a href="<?= base_url('donasi/edit/' . $row['iddonasi']); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a>
                                                    <a href="<?= base_url('donasi/delete/' . $row['iddonasi']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="fa fa-trash-alt"></i> </a>
                                                </td>
                                            </tr>
                                       
                                            <?php }
    } else {
        echo "<tr><td colspan='12' class='text-center'>Tidak ada data donasi.</td></tr>";
    }
    ?>

    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <script>
        // Menampilkan popup berdasarkan query string
        <?php if (isset($_GET['status'])): ?>
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
        <?php endif; ?>
    </script>
</body>
</html>
