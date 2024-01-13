<?php

class SinhVien
{
    public $maSv;
    public $tenSv;
    public $namSinh;

    // public function getInfo()
    // {
    //     echo $this->maSv . "<br>";
    //     echo $this->tenSv . "<br>";
    //     echo $this->namSinh . "<br>";
    // }
    // ----------------------------------------------

    // public function getMaSV()
    // {
    //     return $this->maSv . "<br>" . $this->tenSv . "<br>" . $this->namSinh;
    // }
    // public function setMaSV($maSv, $tenSv, $namSinh)
    // {
    //     $this->maSv = $maSv;
    //     $this->tenSv = $tenSv;
    //     $this->namSinh = $namSinh;
    // }
    // ----------------------------------------------
    public function __construct($maSv, $tenSv, $namSinh)
    {
        $this->maSv = $maSv;
        $this->tenSv = $tenSv;
        $this->namSinh = $namSinh;
    }

    public function setMa($ma)
    {
        $this->maSv = $ma;
    }
    public function setTen($ten)
    {
        $this->tenSv = $ten;
    }
    public function tinhTuoi()
    {
        return date("Y") - $this->namSinh;
    }

    public function hienThiThongTin()
    {
        echo "Ma SV: " . $this->maSv . "<br>" . " Ten SV: " . $this->tenSv . "<br>" . " Nam Sinh: " . $this->namSinh . "<br>" . " Tuoi: " . $this->tinhTuoi();
    }
}

// $sinhVien = new SinhVien();
// $sinhVien->maSv = "PH36687";
// $sinhVien->tenSv = "Nguyễn Tiến Đạt";
// $sinhVien->namSinh = "2004";
// $sinhVien->getInfo();
// --------------------------------------------------

// $sinhVien = new SinhVien();
// $sinhVien->setMaSV("PH36687", "Nguyễn Tiến Đạt", "2004");
// echo $sinhVien->getMaSV();
// --------------------------------------------------

$sinhVien = new SinhVien("PH36687", "Nguyễn Tiến Đạt", "2004");
$sinhVien->hienThiThongTin();
