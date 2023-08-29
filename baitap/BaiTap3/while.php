<?php
$x;
$y;
$z;
while ($x < 100) {
    $x++;
    while ($y < 100) {
        $y++;
        while ($z < 100) {
            $z++;
            if ((($x + $y + $z) == 100) && ($x * 15 + $y * 9 + $z) == 300) {
                echo "\nSo trau dung: " . $x;
                echo "\nSo trau nam: " . $y;
                echo "\nSo trau gia: " . $z . "<br/>";
            }
        }
    }
}
