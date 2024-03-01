<?php

echo date("l, j F o");
echo "<br>";
echo time();
// 1 Januari 1970 waktu komputer
echo "<br>";
echo time() + 86400;
echo "<br>";
echo date("l", time() + 86400 * 365);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date("l", (mktime(0, 0, 0, 5, 17, 2005)));