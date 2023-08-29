<?php
$x;
$y;
$z;
for ($x = 1; $x < 100; $x++) {
    for ($y = 1; $y < 100; $y++) {
        for ($z = 1; $z < 100; $z++) {
            if ((($x + $y + $z) == 100) && ($x * 15 + $y * 9 + $z) == 300) {
                echo "\nSo trau dung: " . $x;
                echo "\nSo trau nam: " . $y;
                echo "\nSo trau gia: " . $z . "<br/>";
            }
        }
    }
}
