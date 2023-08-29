<?php
// Lấy số tiền cần rút từ form HTML
$so_tien = $_POST["soTien"];

// Kiểm tra số tiền có hợp lệ không
if ($so_tien % 50000 == 0 && $so_tien > 0) {
    // Khai báo biến
    $menh_gia = array(50000, 100000, 200000); // Mảng chứa các mệnh giá tiền
    $so_to = array(0, 0, 0); // Mảng chứa số tờ tiền theo mệnh giá
    $phuong_an = array(); // Mảng chứa các phương án rút tiền

    // Sử dụng vòng lặp for để duyệt qua các trường hợp có thể
    for ($i = 0; $i <= $so_tien / $menh_gia[0]; $i++) {
        for ($j = 0; $j <= $so_tien / $menh_gia[1]; $j++) {
            for ($k = 0; $k <= $so_tien / $menh_gia[2]; $k++) {
                // Kiểm tra điều kiện của bài toán
                if ($i * $menh_gia[0] + $j * $menh_gia[1] + $k * $menh_gia[2] == $so_tien) {
                    // Gán giá trị cho mảng số tờ tiền
                    $so_to[0] = $i;
                    $so_to[1] = $j;
                    $so_to[2] = $k;
                    // Thêm mảng số tờ tiền vào mảng phương án
                    array_push($phuong_an, $so_to);
                }
            }
        }
    }

    // In kết quả
    echo "Số tiền cần rút: " . number_format($so_tien) . " đồng\n";
    echo "Các phương án rút tiền là:\n";
    foreach ($phuong_an as $pa) {
        echo "- " . $pa[0] . " tờ " . number_format($menh_gia[0]) . " đồng, ";
        echo $pa[1] . " tờ " . number_format($menh_gia[1]) . " đồng, ";
        echo $pa[2] . " tờ " . number_format($menh_gia[2]) . " đồng\n";
    }
} else {
    // In thông báo lỗi
    echo "Số tiền không hợp lệ. Vui lòng nhập lại.";
}
