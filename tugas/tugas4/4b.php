<?php

$komponen = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

echo "<h4>Macam-macam perangkat keras komputer</h4>";
for($i = 0; $i < count($komponen); $i++) {
    $j = $i + 1;
    echo "<p>$j. $komponen[$i]</p>";
}

echo "<h4>Macam-macam perangkat keras komputer baru</h4>";
array_push($komponen, "Card Reader", "Modem");
sort($komponen);
for($i = 0; $i < count($komponen); $i++) {
    $j = $i + 1;
    echo "<p>$j. $komponen[$i]</p>";
}
