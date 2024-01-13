<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="ten_sp" value="<?= $products['ten_sp'] ?>">
        <small><?= (isset($err['ten_sp'])) ? $err['ten_sp'] : '' ?></small><br> <br>
        <input type="number" name="gia" value="<?= $products['gia'] ?>">
        <small><?= (isset($err['gia'])) ? $err['gia'] : '' ?></small><br> <br>
        <img width="100" src="upload/<?= $products['img'] ?>" alt="">
        <input type="file" name="img"> <br>
        <select name="id_category" id="">
            <option value="" hidden>Thêm loại</option>
            <?php
            foreach ($categorys as $value) {
                extract($value);
            ?>
                <option value="<?= $id ?>" <?=($products['id_category'] == $id) ? 'selected' : ''?>><?= $category_name ?></option>
            <?php
            }
            ?>
        </select>
        <button type="submit" name="edit" value="edit">Sửa</button>
    </form>

</body>

</html>