<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2c</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
            color: white;
            display: flex;
        }

        .kotak h2{
            margin: auto;
        }

        .row {
            display:flex;
        }
    </style>

</head>
<body>
    <?php for ($i = 10; $i >= 1; $i--) : ?>
        <div class="row">
            <?php for ($j = 1; $j <= $i; $j++) : ?>
                <div class="kotak"><h2><?= "$j" ?></h2></div>
                <?php if ($i == $j) : ?>
                    <br>
                    <?php endif ; ?>
                    <?php endfor ; ?>
        </div>
        <?php endfor ; ?>
</body>
</html>