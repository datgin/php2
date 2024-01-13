<!DOCTYPE html>
<html>

<body>

    <?php
    $class  = [
        "wd123" => [
            "GiaoVien" => "kientc",
            "SiSo" => 40,
            "KhuVuc" => "A"
        ],
        "hd324" => [
            "GiaoVien" => "trunght",
            "SiSo" => 46,
            "KhuVuc" => "B"
        ],
        "kj234" => [
            "GiaoVien" => "nhungnt",
            "SiSo" => 36,
            "KhuVuc" => "C"
        ]
    ];
    // echo "<pre>";
    // var_dump($class);
    ?>
    <table border="1">
        <tr>
            <th>Lớp</th>
            <th>Giáo viên</th>
            <th>Sĩ Số</th>
            <th>Khu vực</th>
        </tr>
        <?php foreach ($class as $key => $value) { ?>

            <tr>
                <td><?= $key ?></td>
                <td><?= $value['GiaoVien'] ?></td>
                <td><?= $value['SiSo'] ?></td>
                <td><?= $value['KhuVuc'] ?></td>
            </tr>

        <?php }
        ?>
    </table>
    <form action="" method="post">
        <input type="text" name="key" placeholder="nhap lop can tim"> <button name="search" value="search">Tim kiem</button>
    </form>
    <?php
    if (isset($_POST['search']) && $_POST['search']) {
        if (isset($_POST['key']) && $_POST['key'] != '') {
            $key = $_POST['key'];
            if (array_key_exists($key, $class)) { ?>
                <h2>Thông tin cho lớp <?= $key ?></h2>
                <table border="1">
                    <tr>
                        <th>Lớp</th>
                        <th>Giáo viên</th>
                        <th>Sĩ số</th>
                        <th>Khu vực</th>
                    </tr>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $class[$key]['GiaoVien'] ?></td>
                        <td><?= $class[$key]['SiSo'] ?></td>
                        <td><?= $class[$key]['KhuVuc'] ?></td>
                    </tr>
                </table>
    <?php
            } else {
                echo "Không tìm thấy thông tin cho lớp   '$key' ";
            }
        } else {
            echo 'Mời nhập tên lớp!';
        }
    }
    ?>
</body>

</html>