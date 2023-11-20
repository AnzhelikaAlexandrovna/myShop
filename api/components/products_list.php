<section class="banner">
  <p>Маркетологи объявили <?= $today ?> года<br>самым удачным временем для покупок!</p>
</section>

<section class="catalog">
  <div class="container">
    <h1 class="catalog-title">Каталог товаров</h1>

    <ul class="filters">
        <?php foreach ($filters as $filter): ?>
        <?php $filter_class = 'filter';?>
        <?php if ($type === $filter['url']): {
            $filter_class = $filter_class . ' filter-current';
        } ?>
        <?php endif; ?>

        <li>
            <a class="<?= $filter_class ?>" href="/api/catalog.php?product_type=<?= $filter['url'] ?>"><?= $filter['name'] ?></a>
        </li>

        <?php endforeach; ?>
    </ul>

    <ul class="products-list">
        <?php foreach($filteredProducts as $i => $item): ?>
        <li>
            <a class="product-card" href="/api/product.php?product_id=<?= $i ?>">
                <h3><?= $item['title'] ?></h3>
                <img src="<?= path($item['img_url']) ?>" width="156" height="120" alt="<?= $item['title'] ?>">
                <div class="product-options">
                    <span class="price"><?= $item['price'] ?></span>
                    <ul class="colors-list">
                        <?php foreach ($item['colors'] as $color): ?>
                        <li class="color-<?= $color ?>"></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

    <ol class="pagination">
      <?php for ($i = 1; $i <= $pages; $i = $i + 1): ?>
      <li>
        <a href="/api/catalog.php?page=<?= $i ?>&product_type=<?= $type ?>" class="<?= $i === $currentPage ? 'current' : '' ?>"><?= $i ?></a>
      </li>
      <?php endfor; ?>
    </ol>
  </div>
</section>