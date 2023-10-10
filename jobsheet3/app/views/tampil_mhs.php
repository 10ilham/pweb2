<?php
//memanggil class database
include '../classes/database.php';
//instansiasi class database
$db = new database;
?>

<head>
<!-- <link rel="stylesheet" href="../views/css/tabel.css"> -->
<link rel="stylesheet" href="../views/css/all.min.css">
  <!-- Theme style -->
<link rel="stylesheet" href="../views/css/adminlte.min.css">
</head>

<div class="container-fluid">
    <br>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3><br>
              </div>
              <a class="btn btn-warning" href="input_mhs.php">Tambah Mahasiswa</a>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>

                  </thead>
                  <tbody>

                    <?php
                    $no = 1;
                    foreach ($db->tampil_mahasiswa() as $x) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $x['nim'] ?></td>
                            <td><?php echo $x['nama'] ?></td>
                            <td><?php echo $x['alamat'] ?></td>
                            <td>
                            <span class="badge bg-warning"><a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a></span>
                            <span class="badge bg-danger"><a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a></span>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->