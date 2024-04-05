<!DOCTYPE html>
<html lang="en">
<head>
  <title>Belajar Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
    </li>
  </ul>
</nav>
<br>

    <?php 
    include "koneksi.php";
    $qry_get_kelas=mysqli_query($conn,"select * from kelas where id_kelas = '".$_GET['id_kelas']."'");
    $dt_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>
    <h3>Ubah Data Kelas</h3>
    <form action="proses_ubah_kelas.php" method="post">
        <input type="hidden" name="id_kelas" value= "<?=$dt_kelas['id_kelas']?>">
        Nama Kelas :
        <input type="text" name="nama_kelas" value=   "<?=$dt_kelas['nama_kelas']?>" class="form-control">
        Kelompok : 
        <input type="text" name="kelompok" value="<?=$dt_kelas['kelompok']?>" class="form-control">
    <input type="submit" name="simpan" value="Ubah Kelas" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>