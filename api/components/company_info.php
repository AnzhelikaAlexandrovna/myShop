<!-- <section class="popular-products">
  <div class="container">
    <h2 class="visually-hidden">Популярные товары</h2>
    <ul class="products-list">
      <li>
        <a class="product-card" href="product.php?product_id=6">
          <h3>Мсеюлида</h3>
          <p>лампа напольная</p>
          <span class="price"><del>4000</del> 3500</span>
          <img src="img/item-mseyulida.jpg" width="156" height="120" alt="Напольная лампа «Мсеюлида»">
        </a>
      </li>
      <li>
        <a class="product-card product-card-new" href="product.php?product_id=7">
          <h3>Рмаериби</h3>
          <p>диван трёхместный</p>
          <span class="price">15000</span>
          <img src="img/item-rmaeribi.jpg" width="156" height="120" alt="Трёхместный диван «Рмаериби»">
        </a>
      </li>
      <li>
        <a class="product-card" href="product.php?product_id=4">
          <h3>Блетуб</h3>
          <p>люстра потолочная</p>
          <span class="price">4000</span>
          <img src="img/item-bletub.jpg" width="156" height="120" alt="Потолочная люстра «Блетуб»">
        </a>
      </li>
    </ul>
  </div>
</section>   -->

<section class="brands">
  <div class="container">
    <h2 class="brands-title">Представляем продукцию <b>мировых</b> брендов</h2>
    <ul class="brands-list">
      <?php $brands = ['ehm', 'cubic', 'tehnodom', 'dg'];
        foreach($brands as $value): ?>
        <li class="brands-<?= $value ?>"></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="features">
  <div class="container">
    <h2 class="features-title">Что <b>выделяет</b> нас среди конкурентов?</h2>
    <ul class="features-list">
      <li class="feature-unique">Уникальные товары не&nbsp;имеют аналогов</li>
      <li class="feature-organic">Используем только природные материалы</li>
      <li class="feature-protected">Устойчивы к кошачьим зубам и когтям</li>
    </ul>
  </div>
</section>
