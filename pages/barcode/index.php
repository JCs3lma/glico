<?php 
  $header = false;
?>
<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to barcode goes here -->
<link rel="stylesheet" href="barcode.css">

<!-- Content Goes Here -->
<div id="barcode">
  <div class="barcode-container">
    <label>商品のバーコードをスキャンしてください</label>
    <div id="barcode-reader"></div>
  </div>
  <div class="container">
    <div class="row center">
    </div>
    <!-- Item Detail Container -->
    <div class="row center">
      <div class="item-detail-container">
        <p class="m-0">110円商品</p>
      </div>
    </div>
    <!-- Price display -->
    <div class="row">
      <div class="price-multiplication-container">
        <div class="price">
          <span>金額</span>
          <span class="price-individual-container" id="price"></span>
          <span>円</span>
        </div>
        <div class="item-count-container">
            <div class="form-select-input flex-direction-row m-0">
              <label for="number_of_pieces">個数</label>
              <select name="" id="number_of_pieces" class="small-icon">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
        </div>
      </div>
    </div>
    <!-- Price selection -->
    <div class="row">
      <div class="price-list">
        <button class="btn danger" data-value="100">100円</button>
        <button class="btn danger" data-value="110">110円</button>
        <button class="btn danger" data-value="150">150円</button>
        <button class="btn danger" data-value="200">200円</button>
        <button class="btn danger" data-value="210">210円</button>
        <button class="btn danger" data-value="250">250円</button>
      </div>
    </div>
    <!-- Add to cart or purchase -->
    <div class="row mt-10">
      <div class="add-to-cart-purchase">
        <div class="action-buttons">
          <button class="btn outline-grey hide" id="enterAmountManually">金額を手入力する場合はこちら</button>
          <button class="btn danger" id="addToCart">カートに入れる</button>
          <a href="" class="btn danger">購入手続き</a>
        </div>
        <a href="">
          <div class="cart">
            <div class="item-count">
              <span>1</span>
            </div>
            <img src="<?=$source?>/assets/img/cart-icon.png" alt="cart" class="cart">
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End of content -->

<!-- Insert Scripts right here -->
<script src="<?=$source?>/node_modules/html5-qrcode/html5-qrcode.min.js"></script>
<script src="barcode.js"></script>
<?php include "../../layouts/footer.php"?>