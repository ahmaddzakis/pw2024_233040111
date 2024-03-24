<?php 

if(isset($_POST["submit"])) {
    if($_POST["uname"] == "jakisukses" && ($_POST["pw"] == "aamiin")) {
        header("Location:admin.php");
        exit;
    } else {
        $err = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
    <style>


    * {
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        height: 100vh;
        font-family: Arial;
        background-color: salmon;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .container h1 {
        text-shadow: 2px 2px 2px salmon;
    }

    .content {
        width: 50%;
        height: 50%;
        background-color: lightblue;
        margin: auto;
        border: 2px solid black;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        box-shadow: 2px 2px 4px 2px #999;
    }

    input {
        margin: 3px;
    }

    input[type="password"] {
        margin-right: 3px;
    }

    button {
        background-color: salmon;
        border-radius: 20%;
        padding: 3px;
        transition: 1s all;

    }

    button:hover {
        transform: scale(90%);

    }

    .gambar {
        background-image: url(img/mikasa.jpeg);
        background-size: cover;
        background-position: center;
        margin: 5px;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        transition: 2s all;
        }

        .gambar:hover {
        transform: rotate(360deg);
        box-shadow: 2px 2px 2px 2px ;
        
        }

    </style>
</head>
<body>

<div class="container">
    <div class="content">
    <h1>Login Admin</h1>

    <div class="gambar"></div>

<?php if(isset($err)): ?>
    <h4>Username atau Password <i>salah!</i></h4>
    <?php endif; ?>

<form action="" method="post">
        <label for="uname">Username :</label>
        <input type="text" name="uname" id="uname">
        <br>
        <label for="pw">Password :</label>
        <input type="password" name="pw" id="pw">
        <br>
        <button type="submit" name="submit">Masuk</button>
    </form>
    </div>
 </div>
</body>
</html>