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
<?php include "../../../layouts/header.php"?>

<!-- Calling CSS Specifically to qr-reading goes here -->
<link rel="stylesheet" href="checkout.css">

<!-- Content Goes Here -->
<div id="checkout" class="container full-screen">
  <div class="row">
    <div class="round-container">
      <div class="checkout-items">
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
                  <h4><?=$result->quantity;?> <span>円</span></h4>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div class="amount-container">
        <div class="flex flex-direction-column w-100 mb-1em">
          <div class="item">
            <div class="name">小計 (5点)</div>
            <div class="amount">750円</div>
          </div>
          <div class="item">
            <div class="name">100円引きクーポン</div>
            <div class="amount">-100円</div>
          </div>
        </div>
        <div class="flex flex-1 w-100">
          <p class="title">お支払い金額</p>
          <div class="total">
            <div class="total-container">650</div>
            <span>円</span>
          </div>
        </div>
      </div>
      <div class="payment-method">
        <div class="row flex align-items-center">
          <p class="title">お支払い方法</p>
          <img src="<?=$source.'/assets/img/paypay.png'?>" alt="paypay">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <p class="center">
      上記内容でお間違いなければ <br>
      「お支払いへ」 を押してください。 <br>
      決済アプリが起動します。 <br>
      XX分以内に決済操作を完了させてください。 <br>
    </p>
  </div>
  <div class="action-buttons">
    <div class="group-button-container">
      <a href="<?=$source.'/pages/cart';?>" class="btn danger w-50 h-45px">前の画面に戻る</a>
      <a href="<?=$source.'/pages/cart/checkout';?>" class="btn danger w-50 h-45px">支払いへ</a>
    </div>
  </div>
</div>
<!-- End of content -->

<!-- Insert Scripts right here -->
<script src="checkout.js"></script>
<?php include "../../../layouts/footer.php"?>