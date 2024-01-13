<?php
$DanhBa = [];

function ThemDanhBa($HoTen, $SoDienThoai, $Email)
{
    global $DanhBa;
    $ThongTin = [
        "HoTen" => $HoTen,
        "SoDienThoai" => $SoDienThoai,
        "Email" => $Email
    ];
    $DanhBa[$HoTen] = $ThongTin;
}
function hienThiDanhBa()
{
    global $DanhBa;
    echo "<table border='1' style='margin-top: 20px'>
        <tr>
            <th>Ho ten</th>
            <th>So dien thoai</th>
            <th>Email</th>
        </tr>";

    foreach ($DanhBa as $key => $value) {
        echo "<tr>
            <td>{$value['HoTen']}</td>
            <td>{$value['SoDienThoai']}</td>
            <td>{$value['Email']}</td>
          </tr>";
    }

    echo "</table>";
}

function timKiemThongTin($HoTen)
{
    global $DanhBa;
    if (isset($DanhBa[$HoTen])) {
        $ThongTin = $DanhBa[$HoTen];
        echo "Thông tin chi tiết sản phẩm: '$HoTen'<br>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Ho ten</th>";
        echo "<th>So dien thoai</th>";
        echo "<th>Email</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . $ThongTin['HoTen'] . "</td>";
        echo "<td>" . $ThongTin['SoDienThoai'] . "</td>";
        echo "<td>" . $ThongTin['Email'] . "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "Không tìm thấy thông tin của $HoTen.\n";
    }
}

ThemDanhBa("Nguyen Van A", "0123456789", "x0YQv@example.com");
ThemDanhBa("Nguyen Van B", "0987654321", "y0YQv@example.com");
ThemDanhBa("Nguyen Van C", "0123498765", "z0YQv@example.com");
// ThemDanhBa("Nguyen Van D", "0987651234", "J0YQv@example.com");

hienThiDanhBa();


?>

<form action="" method="post" style="margin-top: 10px;">
    <input type="text" name="HoTen" placeholder="Ho ten">
    <button name="search" value="search">Tim kiem</button>
</form>

<?php
if (isset($_POST['search'])) {
    if (isset($_POST['HoTen']) && $_POST['HoTen'] != '') {
        $HoTen = $_POST['HoTen'];
        timKiemThongTin($HoTen);
    }
}
?>