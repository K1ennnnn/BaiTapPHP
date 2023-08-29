<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $soDau = $_POST['soDau'];
    $soCuoi = $_POST['soCuoi'];
    $soTien = 0;
    if ($soCuoi > $soDau) {
        $soTieuthu = $soCuoi - $soDau;
        if ($soTieuthu <= 100) {
            $soTien = $soTieuthu * 1250;
        } elseif ($soTieuthu <= 150) {
            $soTien = 100 * 1250 + ($soTieuthu - 100) * 1550;
        } elseif ($soTieuthu <= 200) {
            $soTien = 100 * 1250 + 50 * 1550 + ($soTieuthu - 150) * 1850;
        } else {
            $soTien = 100 * 1250 + 50 * 1550 + 50 * 1850 + ($soTieuthu - 200) * 2250;
        }
    } else {
        echo "Chỉ số cuối phải lớn hơn chỉ số đầu";
    }

    echo "Tên hộ dân : " . $name."<br>";
    echo "Số đầu : " . $soDau."<br>";
    echo "Số cuối : " . $soCuoi."<br>";
    echo "Số điện tiêu thụ : " . $soTieuthu."<br>";
    echo "Tiền điện : " . $soTien."<br>";
}
