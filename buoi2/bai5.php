<?php
function TinhLuyThua($number)
{
    $kq = 0;
    $luythua = 2; 
        $kq = $number ** $luythua;   
    return $kq;
}
?>
<form action="" method="post" style='margin-top: 20px'>
    <input min="0" type="number" name="number" placeholder="Một số nguyên">
    <button name="tinh" value="tinh">Tính</button>
</form>
<?php
if (isset($_POST['tinh'])) {
    $number = $_POST['number'];
    $Tinh = TinhLuyThua($number);
    echo "Luy thừa của $number là: $Tinh";
}
?>