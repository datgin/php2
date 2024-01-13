<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="ten_sp" placeholder="Tên sản phẩm"><br> <br>
        <input type="text" name="gia" placeholder="Giá"> <br> <br>
        <input type="file" name="img" placeholder="Ảnh"> <br>
        <select name="id_category" id="">
            <option value="" hidden>Thêm loại</option>
            <?php
            foreach ($createCategorys as $value) {
                extract($value);
            ?>
                <option value="<?= $id ?>"><?= $category_name ?></option>
            <?php
            }
            ?>
        </select> <br>
        <small><?= (isset($err)) ? $err : '' ?></small><br> <br>
        <button type="submit" name="create" value="create">Tạo</button>
    </form>
</body>

</html>