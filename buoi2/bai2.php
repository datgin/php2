<?php

$danhSachSanPham = array();


function themSanPham($maSP, $tenSP, $giaSP)
{
    global $danhSachSanPham;
    $sanPham = array('maSP' => $maSP, 'tenSP' => $tenSP, 'giaSP' => $giaSP);
    $danhSachSanPham[$maSP] = $sanPham;
}


function hienThiThongTinSanPham($maSP)
{
    global $danhSachSanPham;
    if (isset($danhSachSanPham[$maSP])) {
        $sanPham = $danhSachSanPham[$maSP];
        echo "Thông tin chi tiết sản phẩm: '$maSP'<br>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Mã SP</th>";
        echo "<th>Tên SP</th>";
        echo "<th>Giá SP</th>";

        echo "<tr>";
        echo "<td>" . $sanPham['maSP'] . "</td>";
        echo "<td>" . $sanPham['tenSP'] . "</td>";
        echo "<td>" . $sanPham['giaSP'] . "</td>";
        echo "</tr>";

        echo "</tr>";
        echo "</table>";
        var_dump($sanPham);
    } else {
        echo "Không tìm thấy sản phẩm với mã $maSP.\n";
    }
}


function hienThiDanhSachSanPham()
{
    global $danhSachSanPham;
    echo "Danh sách sản phẩm:<br>";
    echo "<table border='1' style='margin-top: 20px'>";
    echo "<tr>";
    echo "<th>Mã SP</th>";
    echo "<th>Tên SP</th>";
    echo "<th>Giá SP</th>";
    foreach ($danhSachSanPham as $maSP => $sanPham) {
        echo "<tr>";
        echo "<td>" . $sanPham['maSP'] . "</td>";
        echo "<td>" . $sanPham['tenSP'] . "</td>";
        echo "<td>" . $sanPham['giaSP'] . "</td>";
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
}

themSanPham('SP001', 'Laptop Dell', 1200);
themSanPham('SP002', 'Smartphone Samsung', 800);
themSanPham('SP003', 'Camera Canon', 500);


hienThiDanhSachSanPham(); ?>
<form action="" method="post" style="margin-top: 10px;">
    <input type="text" name="maSP" placeholder="Mã SP">
    <button name="tim" value="tim">Tìm</button>
</form>

<?php
if (isset($_POST['tim'])) {
    if (isset($_POST['maSP']) && $_POST['maSP'] != '') {
        $maSP = $_POST['maSP'];
        hienThiThongTinSanPham($maSP);
    }
}
?>