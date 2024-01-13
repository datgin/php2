<?php
require_once 'db.php';

class Product extends db
{
    function getProduct($key = "")
    {
        $sql = "select product.id as id_product , product.ten_sp, product.gia, product.img , categories.* from `product` join categories on categories.id = product.id_category";
        if ($key != "") {
            $sql .= " where ten_sp like '%$key%'";
            return $this->getData($sql);
        }
        return $this->getData($sql);
    }
    function xoaProduct($id)
    {
        $sql = "DELETE FROM product WHERE id = " . $id;
        $this->getData($sql, false);
    }

    function themProduct($ten_sp, $gia, $img, $id_category)
    {
        $sql = "INSERT INTO `product`(`ten_sp`, `gia`, `img`,`id_category`) VALUES ('$ten_sp','$gia','$img','$id_category')";
        $this->getData($sql, false);
    }

    function getOneProduct($id)
    {
        $sql = "select product.id as id_product , product.ten_sp, product.gia, product.img, product.id_category , categories.* from `product` join categories on categories.id = product.id_category WHERE `product`.`id` = $id";
        return $this->getData($sql, false);
    }

   

    function suaProduct($ten_sp, $gia, $img, $id_category, $id)
    {
        $sql = "UPDATE `product` SET `ten_sp` = '$ten_sp', `gia` = '$gia', `img` = '$img', `id_category` = '$id_category' WHERE `product`.`id` = $id";
        $this->getData($sql, false);
    }
}
