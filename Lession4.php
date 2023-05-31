<?php
//Câu 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkNumber($number) {
    if ($number % 2 == 0) {
        return "Số $number là số chẵn.";
    } else {
        return "Số $number là số lẻ.";
    }
}
$number = 7;
echo "Bài 1: ";
echo checkNumber($number);
echo "<br>";
//Câu 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
function xepHangHocLuc($diemGiuaKy, $diemCuoiKy) {
    $diemTrungBinh = ($diemGiuaKy * 0.3) + ($diemCuoiKy * 0.7);

    if ($diemTrungBinh >= 9.0) {
        return "Xuất sắc";
    } elseif ($diemTrungBinh >= 7.0) {
        return "Giỏi";
    } elseif ($diemTrungBinh >= 5.0) {
        return "Khá";
    } else {
        return "Trung bình - Yếu";
    }
}

$diemGiuaKy = 8.5;
$diemCuoiKy = 7.2;
echo "Bài 2: ";
echo xepHangHocLuc($diemGiuaKy, $diemCuoiKy);
echo "<br>";
//Câu 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkYear() {
    $Year = date('Y');

    if ($Year % 2 == 0) {
        return "Năm $Year là năm chẵn.";
    } else {
        return "Năm $Year là năm lẻ.";
    }
}
echo "Bài 3: ";
echo checkYear();
echo "<br>";
//Câu 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100
function printNumber() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i . " ";
    }
}
echo "Bài 4: ";
 printNumber();
echo "<br>";
//Câu 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .
function hienThiDaySo() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<b>" . $i . "</b> ";
        } else {
            echo $i . " ";
        }
    }
}
echo "Bài 5: ";
hienThiDaySo();
echo "<br>";
//Câu 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
function printYear($nam) {
    foreach ($nam as $value) {
        echo $value . " ";
    }
}
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
echo "Bài 6: ";
printYear($nam);

?>
