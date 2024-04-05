<html>
<head>
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

    <h3>Tambah Kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        Nama Kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        Kelompok : 
        <input type="text" name="kelompok" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
