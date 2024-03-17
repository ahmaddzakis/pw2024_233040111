<?php

$emot = ["🥶", "😍", "😅", "😎", "😐"];
array_push($emot, "😙");

$makan = ["🍈", "🍇", "🍊", "🥝", "🍅"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMOJI ARRAY</title>
</head>
<body>
    <h3>Daftar Emoji</h3>
    <ol>
        <?php for($i = 0; $i < count($emot); $i++) { ?>
        <li><?php echo "$emot[$i]"; ?></li>
            <?php } ?>
    </ol>

    <h3>Daftar Maknanan</h3>
    <ul>
    <?php for($i = 0; $i < count($makan); $i++) { ?>
        <li><?php echo "$makan[$i]"; ?></li>
            <?php } ?>
    </ul>

    <hr>

    <h3>Daftar Hewan</h3>
    <ol>
        <?php foreach($emot as $e) : ?>
        <li><?= $e; ?></li>
        <?php endforeach; ?>
    </ol>

    <h3>Daftar Makanan</h3>
    <ul>
        <?php foreach($makan as $m) : ?>
        <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>