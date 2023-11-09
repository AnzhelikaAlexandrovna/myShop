<?php
require('products_db.php');
require('components/header.php');

// Дата акции сегодняшнего дня
$day = date('j');
$month = date('n');
$year = date('Y');
$months = [1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля', 5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа', 9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря'];
$today = "$day $months[$month] $year";

// Фильтр
$filters = get_filters();
$type = $_GET['product_type'] ?? 'all';


// Фильтрация продуктов
$products = get_products();
if ($type !== 'all') {
    $filteredProducts = array_filter($products, function ($item) use ($type) {
        return $item['type'] === $type;
    });
} else {
    $filteredProducts = $products;
}

// Пагинация
$limit = 3;
$pages = ceil(count($filteredProducts) / $limit);
$currentPage = isset($_GET['page']) ? intval($_GET['page']): 1;
$offset = ($currentPage - 1) * $limit;
$filteredProducts = array_slice($filteredProducts, $offset, $limit, true);

require('components/products_list.php');
require('components/footer.php');
