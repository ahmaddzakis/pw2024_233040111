<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-color: lightblue;
            font-family: Georgia;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .content {
            background-color: salmon;
            width: 50%;
            height: 50%;
            border: 2px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 2px 2px 4px 2px #999;
        }

        .content h1 {
            margin: 10px;
        }

        button {
        background-color: lightblue;
        border: 2px solid red;
        box-shadow: 2px 2px 10px 2px #999;
        border-radius: 0px 10px 0px 10px;
        padding: 5px;
        transition: 1s all;
        }

        button a {
        text-decoration: none;
        }

        button:hover {
        transform: scale(90%);
        }

    </style>
</head>
<body>
    <div class="container">
    <div class="content">
    <h1>Selamat Datang!!</h1>
    <button><a href="login.php">Keluar</a></button>
    </div>
    </div>
</body>
</html>