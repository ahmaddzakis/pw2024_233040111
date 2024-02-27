<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
    <style>
        .kotak1 {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            color: white;
            display: flex;
            background-color: black;
        }

        .kotak2 {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            color: black;
            display: flex;
            background-color: white;
        }

        .kotak1 h2, .kotak2 h2 {
            margin: auto;
        }


        .row {
            display: flex;
        }

        black {
            background-color: black;
        }


        white {
            background-color: white;
        }
    </style>
</head>
<body>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if($i % 2 == 0) : ?>
            <div class="row">
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <?php if($j % 2 == 0) : ?>
                        <div class="kotak1"></div>
                    <?php else : ?>
                        <div class="kotak2"></div>
                    <?php endif ; ?>
                    <?php if($i == $j) : ?>
                        <br>
                    <?php endif ; ?>
                <?php endfor ; ?>
            </div>
        <?php else : ?>
            <div class="row">
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <?php if($j % 2 == 0) : ?>
                        <div class="kotak2"></div>
                    <?php else : ?>
                        <div class="kotak1"></div>
                    <?php endif ; ?>
                    <?php if($i == $j) : ?>
                        <br>
                    <?php endif ; ?>
                <?php endfor ; ?>
            </div>
        <?php endif ; ?>
    <?php endfor ; ?>
</body>
</html>