<?php

// 同じファイルを何度も読み込むことを防ぐ
include_once "../classes/Product.php";

$product = new Product;

if(isset($_POST['add_product']))
{
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $product->addProduct($product_name,$price,$quantity);
    // Product クラスの addProduct 関数を使って、先ほど取得した商品名、価格、数量を引数として渡す
}
// 今日↓
elseif(isset($_POST['edit_product'])){
    $product_id = $_GET['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $product->editProduct($product_id, $product_name, $price, $quantity);
}

?>