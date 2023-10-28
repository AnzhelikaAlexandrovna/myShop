<section class="order">
  <div class="container">
    <h1 class="order-title">Заказ доставки</h1>
    <table class="order-list">
      <tr>
        <th>Фото</th>
        <th>Название товара</th>
        <th>Цена</th>
        <th>Стоимость доставки</th>
      </tr>
      <?php foreach($order as $id): ?>
        <tr>
          <td><img src="<?= get_img_url($id) ?>" width="68" height="52" alt="<?= get_product_title($id) ?>"></td>
          <td><?= get_product_title($id) ?></td>
          <td class="item-price"><?= get_final_price($id) ?></td>
          <td class="delivery-cost"><?= get_delivery_cost($id) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</section>
