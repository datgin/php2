<?php

class ConNguoi
{
    public $tay, $chan, $mat, $mui;

    // public function __construct($tay, $chan, $mat, $mui)
    // {
    // }

    public function an()
    {
        echo 'Ăn bằng miệng';
    }

    public function setTay($tay)
    {
        $this->tay = $tay;
    }
    public function setChan($chan)
    {
        $this->chan = $chan;
    }
}

class NguoiLon extends ConNguoi
{
    //Đối với các class con có thể chứa các thuộc tính và phương thức riêng tư khai báo.
    public $rang, $rau, $lonNach;

    public function di()
    {
        echo 'Người lớn thì đi bằng ' . $this->chan . " chân";
    }
}

class TreCon extends ConNguoi
{
    public function bo()
    {
        echo "Trẻ con thì bò bằng " . $this->tay . " Tay " . $this->chan . " Chân";
    }
}

$NguoiLon = new NguoiLon();
$NguoiLon->setChan(2);
$NguoiLon->di();

echo "<br>";

$TreCon = new TreCon();
$TreCon->setTay(2);
$TreCon->setChan(2);
$TreCon->bo();