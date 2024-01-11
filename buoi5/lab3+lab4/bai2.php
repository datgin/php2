<?php
class Person
{
    public $ten, $tuoi;
    public function __construct($ten, $tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
}
class Employee extends Person
{
    public $luong;
    public $congViec;
    public function __construct($ten, $tuoi, $luong, $congViec)
    {
        parent::__construct($ten, $tuoi);
        $this->luong = $luong;
        $this->congViec = $congViec;
    }
    public function getEmployee()
    {
        echo 'Tên: ' . $this->ten . ', tuoi: ' . $this->tuoi . ', luong: ' . $this->luong . ', congViec: ' . $this->congViec;
    }
}
class Manager extends Employee
{
    public $ngayLamViec;
    public $chucVu;
    public function __construct($ten, $tuoi, $luong, $congViec, $ngayLamViec, $chucVu)
    {
        parent::__construct($ten, $tuoi, $luong, $congViec);
        $this->ngayLamViec = $ngayLamViec;
        $this->chucVu = $chucVu;
    }
    public function getManager()
    {
        echo 'Ten: ' . $this->ten . ', tuoi: ' . $this->tuoi . ', luong: ' . $this->luong . ', congViec: ' . $this->congViec . ', ngayLamViec: ' . $this->ngayLamViec . ', chucVu: ' . $this->chucVu;
    }
}
$employee = new Employee('Nguyen tien dat', 20, 10000000, 'Developer');
echo $employee->getEmployee();
echo '<br>';

$manager = new Manager('Tran Van B', 25, 10000000, 'Sếp của Developer', '2020-01-01', 'Manager');
echo $manager->getManager();
