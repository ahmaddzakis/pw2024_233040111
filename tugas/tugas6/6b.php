<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
            display: flex;
            margin: 3px;
            border-radius: 0px 10px 0px 0px;
            transition: 300ms all;
        }

        .kotak:hover {
        transform: scale(120%);
        }

        .kotak h2{
            margin: auto;
        }

        .kotak1 {
            background-color: lightblue;
        }

        .kotak2 {
            background-color: white;
        }

        .row {
            display:flex;
        }

        button {
        background-color: #000;
        border-radius: 10px 2px 10px 2px;
        color: #fff;
        transition: 1s all;
        cursor: pointer;
        }

        button:hover {
        transform: scale(90%);
        }
    </style>

</head>
<body>

    <form action="" method="post">
        <label for="angka"><b>Masukkan jumlah angka : </b></label>
        <input type="text" name="angka" id="angka">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php if(!isset($_POST["angka"])) : ?>

        <p>Silakan Masukkan Variabel "Submit"</p>

        <?php else : ?>

        <?php for ($i = $_POST["angka"]; $i >= 1; $i--) : ?>
        <div class="row">
            <?php for ($j = 1; $j <= $i; $j++) : ?>

                <?php if($i % 2 == 0) : ?>
                <div class="kotak kotak1"><h2><?= "$i" ?></h2></div>
                <?php else : ?>
                <div class="kotak kotak2"><h2><?= "$i" ?></h2></div>
                <?php endif ; ?>
                <?php if ($i == $j) : ?>
                    <br>
                    <?php endif ; ?>
                    <?php endfor ; ?>
        </div>
        <?php endfor ; ?>

        <?php endif; ?>
</body>
</html>