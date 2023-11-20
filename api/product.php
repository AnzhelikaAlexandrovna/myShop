<?php
require_once('products_db.php');
require_once('components/header.php');

$id = $_GET['product_id'];

$title = get_product_title($id);
$img_url = get_img_url($id);

$price = get_product_price($id);
$discount = get_product_discount($id);

$is_new = get_product_is_new($id);
$is_last = get_product_is_last($id);
$product_class = 'item';

$features = get_product_is_features($id);

if ($discount > 0) {
    $price_with_discount = $price - $discount;
}

if ($is_new) {
    $product_class = $product_class . ' item-new';
}

if ($discount > 1400 || $is_last) {
    $product_class = $product_class . ' item-hot';
}

require_once('components/product_info.php');
require_once('components/footer.php');