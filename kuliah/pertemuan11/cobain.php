<?php
// Konek ke database
$conn = mysqli_connect('localhost', 'root', '', 'contoh_ahmad_233040111');

// Query ke tabel matakuliah
$result = mysqli_query($conn, 'SELECT * FROM mahasiswa');

// Menyiapkan data matakuliah
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$mahasiswa = $rows;
// print_r($mahasiswa);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cobain Database Lain</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h1>Matakuliah</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIM</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1 ?>
  <?php foreach($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $mhs['nama'] ?></td>
      <td><?= $mhs['nim'] ?></td>
    <td>
      <a href="#" class="badge text-bg-info text-decoration-none">Pilih</a>
    </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>