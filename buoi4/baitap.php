<?php

class GiangVien
{
    public $maGv;
    public $tenGv;
    public $namSinh;
    public $namBatDau;
    public $luongCB;
    public $soGioDay;


    public function __construct($maGv, $tenGv, $namSinh, $namBatDau, $luongCB, $soGioDay)
    {
        $this->maGv = $maGv;
        $this->tenGv = $tenGv;
        $this->namSinh = $namSinh;
        $this->namBatDau = $namBatDau;
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }
    public function setGiangVien($ma, $ten, $ns, $nbd, $luong, $sgd)
    {
        $this->maGv = $ma . $this->tenGv = $ten . $this->namSinh = $ns . $this->namBatDau = $nbd . $this->luongCB = $luong . $this->soGioDay = $sgd;
    }

    public function tinhLuong()
    {
        return $this->luongCB * $this->soGioDay;
    }

    public function tinhTuoi()
    {
        return date("Y") - $this->namSinh;
    }
    public function tinhNamDay()
    {
        return date("Y") - $this->namBatDau;
    }
    public function hienThiThongTin()
    {
        echo "Mã Giang: " . $this->maGv . "<br>" . "Tên giảng viên: " . $this->tenGv . "<br>" . "Năm sinh: " . $this->namSinh . "<br>" . "Tuổi: " . $this->tinhTuoi() . "<br>" . "Số năm đi làm: " . $this->tinhNamDay() . "<br>" . "Lương cơ bản: " . number_format($this->tinhLuong(), 0, ',', '.') . "<br>" . "Số giờ dạy: " . $this->soGioDay . "<br>";
    }
}


$giangVien = new GiangVien("kientc", "Chương Công Kiên", "2000", "2010", "10000", "200");
$giangVien->hienThiThongTin();
