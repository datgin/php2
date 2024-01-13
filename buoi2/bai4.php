<?php
function TinhGiaiThua($giaiThua)
{
    $result = 1;
    for ($i = 1; $i <= $giaiThua; $i++) {
        $result *= $i;
    }
    return $result;
}
?>
<form action="" method="post" style='margin-top: 20px'>
    <input min="0" type="number" name="giaiThua" placeholder="Mời bạn nhập số nguyên dương">
    <button name="tinh" value="tinh">Tính</button>
</form>
<?php
if (isset($_POST['tinh'])) {
    $giaiThua = $_POST['giaiThua'];
    $Tinh = TinhGiaiThua($giaiThua);
    echo "Giai thừa của $giaiThua là: $Tinh";
}
?>