<?php
require_once 'models/product.php';
require_once 'models/categorys.php';
require_once 'models/validate.php';


class ProductController
{
    function ListProduct()
    {
        $product = new Product();
        if (isset($_POST['search']) && $_POST['search']) {
            $key = $_POST['key'];
        } else {
            $key = "";
        }
        $products = $product->getProduct($key);
        include "views/Product/listProduct.php";
    }

    function deleteProduct()
    {
        $deleteProduct = new Product();
        $deleteProducts = $deleteProduct->xoaProduct($_GET['id']);

        $this->ListProduct();
    }
    function createProduct()
    {
        $createProduct = new Product();
        $createCategory = new categorys();
        $createCategorys  = $createCategory->getCategory();
        if (isset($_POST['create']) && $_POST['create']) {
            if ($_FILES['img']['name'] == "") {
                $err = "Vui lòng chọn ảnh";
            } else {
                $ten_sp = $_POST['ten_sp'];
                $gia = $_POST['gia'];
                $id_category = $_POST['id_category'];

                $img = time() . "_" . $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "upload/$img");

                $createProducts = $createProduct->themProduct($ten_sp, $gia, $img, $id_category);
                header("Location: index.php");
            }
        }
        include "views/Product/createProduct.php";
    }
    function editProduct()
    {
        $product = new Product();
        $products = $product->getOneProduct($_GET['id']);
        $category = new categorys();
        $categorys  = $category->getCategory();
        

        // $category = $createCategory->getCategory();
        if (isset($_POST['edit']) && $_POST['edit']) {
            $ten_sp = $_POST['ten_sp'];
            $gia = $_POST['gia'];
            $id_category = $_POST['id_category'];
            $err = validate($ten_sp, $gia);

            if ($_FILES['img']['name'] == "") {
                $img  = $products['img'];
            } else {
                $img = time() . "_" . $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "upload/$img");
            }

            if (empty($err)) {
                $editProduct = new Product();
                $editProducts = $editProduct->suaProduct($ten_sp, $gia, $img, $id_category, $_GET['id']);
                header("Location: index.php");
            }
        }

        include "views/Product/editProduct.php";
    }
}
