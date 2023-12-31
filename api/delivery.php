<?php
require_once('products_db.php');
require_once('components/header.php');

$order = [2, 7, 11, 15, 20];

$id = $_GET['product_id'] ?? null;

$title = get_product_title($id);
$img_url = get_img_url($id);

function get_final_price($id) { 
  $price = get_product_price($id);
  $discount = get_product_discount($id);

  return $price - $discount;
}

function get_delivery_cost($id) {
  $is_new = get_product_is_new($id);
  $final_price = get_final_price($id);

  if ($is_new && $final_price < 2000) {
    $delivery_cost = $final_price;
  } else {
    $delivery_cost = $final_price / 20;
  }
  return $delivery_cost;
}

require_once('components/delivery_info.php');
require_once('components/footer.php');
