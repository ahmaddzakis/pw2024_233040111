<?php

$mahasiswa = [
    [
        "nama" => "Ahmad Dzaki",
        "npm" => "233040111",
        "email" => "dzaki.233040111@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "g1 (0).jpg"
    ],
    [
        "nama" => "Armin Arlert",
        "npm" => "233010101",
        "email" => "arminar22@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "g1 (11).jpg" 
    ],
    [
        "nama" => "Gabi Braun",
        "npm" => "200049911",
        "email" => "braungabs@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "g1 (2).jpg"  
    ],
    [
        "nama" => "Satoru Gojo",
        "npm" => "040111233",
        "email" => "saikyo1@gmail.com",
        "jurusan" => "Sastra Inggris",
        "gambar" => "g1 (3).jpg" 
    ],
    [
        "nama" => "Levi Ackermann",
        "npm" => "11111111",
        "email" => "omlepi111@gmail.com",
        "jurusan" => "Ilmu Komunikasi",
        "gambar" => "g1 (4).jpg"  
    ],
    [
        "nama" => "Denji",
        "npm" => "233040999",
        "email" => "gergajicsm1@gmail.com",
        "jurusan" => "Teknologi Pangan",
        "gambar" => "g1 (5).jpg"   
    ],
    [
        "nama" => "Annie Leonhart",
        "npm" => "243050981",
        "email" => "leonhartt@gmail.com",
        "jurusan" => "Seni Musik",
        "gambar" => "g1 (6).jpg"
    ],
    [
        "nama" => "Eren Yeager",
        "npm" => "243050891",
        "email" => "erenyeg@gmail.com",
        "jurusan" => "DKV",
        "gambar" => "g1 (7).jpg"
    ],
    [
        "nama" => "Mikasa Ackermmann",
        "npm" => "243050111",
        "email" => "ilov3eren@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "g1 (8).jpg"
    ],
    [
        "nama" => "Ryomen Sukuna",
        "npm" => "000111000",
        "email" => "kingofcurses0@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "g1 (9).jpg"   
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa UNPAS</title>
</head>
<body>
    <h1>Daftar Mahasiswa UNPAS</h1>
    <?php foreach($mahasiswa as $m) : ?>
        <ul>
            <li><img src="img/<?= $m["gambar"]; ?>"></li>
            <li>Nama : <?= $m["nama"]; ?></li>
            <li>NPM : <?= $m["npm"]; ?></li>
            <li>Email : <?= $m["email"]; ?></li>
            <li>Jurusan : <?= $m["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>