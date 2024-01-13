<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="?act=create"><button>Thêm</button></a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Category</th>
            <th>Chức năng</th>
        </tr>
        <?php
        foreach ($products as $value) {
            extract($value); ?>
            <tr>
                <td><?= $id_product ?></td>
                <td><img width="50" src="upload/<?= $img ?>" alt=""></td>
                <td><?= $ten_sp ?></td>
                <td><?= number_format($gia, 0, '', '.') ?></td>
                <td><?=$category_name?></td>
                <td><a href="?act=edit&id=<?= $id_product ?>">Sửa</a> | <a onclick="return confirm('Bạn có chắc muốn xoá không?')" href="?act=delete&id=<?= $id_product ?>">Xóa</a></td>
            </tr>
        <?php }
        ?>

    </table>

    <form action="" method="post" style="margin-top: 20px;">
        <input type="text" name="key" placeholder="Mời nhập tên sản phẩm">
        <button name="search" value="search">Tìm kiếm</button>
        <a href="index.php"><button>Quay lại</button></a>
    </form>
</body>

</html>