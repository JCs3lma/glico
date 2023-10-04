<?php
  $header = false;
  $footer = false;
  $sampleData = [
    (object)[
      "id" => 1,
      "name" => "商品名ダミー商品名",
      "description" => "ダミー商品名ダミー",
      "price" => 150,
      "quantity" => 1
    ],
    (object)[
      "id" => 2,
      "name" => "商品名ダミー商品名",
      "description" => "ダミー商品名ダミー",
      "price" => 200,
      "quantity" => 1
    ],
    (object)[
      "id" => 3,
      "name" => "商品名ダミー商品名",
      "description" => "ダミー商品名ダミー",
      "price" => 110,
      "quantity" => 1
    ],
    (object)[
      "id" => 4,
      "name" => "商品名ダミー商品名",
      "description" => "ダミー商品名ダミー",
      "price" => 50,
      "quantity" => 1
    ],
    (object)[
      "id" => 5,
      "name" => "商品名ダミー商品名",
      "description" => "ダミー商品名ダミー",
      "price" => 45,
      "quantity" => 1
    ],
  ];
?>
<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to qr-reading goes here -->
<link rel="stylesheet" href="cart.css">

<!-- Content Goes Here -->
<div id="cart" class="container full-screen">
  <div class="row">
    <div class="round-container">
      <div class="cart-items">
        <?php
          for ($i=0; $i < count($sampleData); $i++):
            $result = $sampleData[$i];
        ?>
          <div class="item" id="item-<?=$result->id;?>">
            <div class="item-details">
              <div class="item-content">
                <div class="product-name"><?=$result->name;?></div>
                <div class="product-short-description"><?=$result->description;?></div>
              </div>
              <div class="item-multiplier">
                <div class="prize">
                  <h2><?=$result->price;?> <span>円</span></h2>
                </div>
                <div class="action-multiplier">
                  <span class="minus">-</span>
                  <span class="result">1</span>
                  <span class="plus">+</span>
                </div>
              </div>
            </div>
            <div class="item-action">
              <div class="cancel-item">X</div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div class="coupons-list">
        <div class="flex">
          <div class="title">
            <p>クーポンの利用</p>
          </div>
          <div class="coupons">
            <ul>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="glico-radio">
                  <p>クーポンダミーテキストクーポン</p>
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
              </li>
            </ul>
          </div>
        </div>
        <a href="" class="about-membership-rank">会員ランクについて</a>
      </div>
      <div class="amount-container">
        <div class="flex">
          <p class="title">お支払い金額</p>
          <div class="total">
            <div class="total-container">750</div>
            <span>円</span>
          </div>
        </div>
      </div>
      <div class="payment-method">
        <div class="row">
          <p>お支払い方法</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row action-buttons">
    <div class="group-button-container">
      <button class="btn danger w-50 h-45px">商品選択に戻る</button>
      <button class="btn danger w-50 h-45px">支払手続き</button>
    </div>
  </div>
</div>
<!-- End of content -->

<!-- Insert Scripts right here -->
<script src="cart.js"></script>
<?php include "../../layouts/footer.php"?>