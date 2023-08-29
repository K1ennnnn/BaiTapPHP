<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a !== 0) {
        $x = -$b / $a;
        echo "Phuong trinh co nghiem x1 = $x";
    } else {
        echo "Phương trình vô nghiệm";
    }
}
