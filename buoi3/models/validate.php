<?php
function validate($ten_sp, $gia)
{
    $err = [];

    if (empty($ten_sp)) {
        $err['ten_sp'] = 'Tên sản phẩm không được để trống!';
    }
    if (empty($gia)) {
        $err['gia'] = 'Giá không được để trống!';
    } elseif ($gia < 0) {
        $err['gia'] = 'Giá sản phẩm phải là số dương';
    }

    return $err;
}
