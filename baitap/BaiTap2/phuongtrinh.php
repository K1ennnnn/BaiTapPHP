<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if ($a !== 0) {
    $x1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
    $x2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);

    echo "Phương trình có nghiệm :<br/> x1 = $x1 <br/> x2 = $x2";
} else {

    if ($b === 0) {
        echo "Phương trình vô nghiệm";
    } else {
        echo "Phương trình có 1 nghiệm : <br/> x = $c / $a";
    }
}
