<?php
  $footer = false;
?>
<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to qr-reading goes here -->
<link rel="stylesheet" href="qr-reading.css">

<!-- Content Goes Here -->
<div id="qr-reading" class="container">
  <div class="row center">
    <p class="bold">
      売場のアプリ専用QRコードを<br>
      読み取ってください
    </p>
  </div>
  <div class="row">
    <div class="qr-container">
      <div class="inner-container">
        <h1 class="m-0">オフィスグリコアプリ</h1>
        <div id="qr-reader"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="qr-second-option">
      <span>売場にQRコードがない場合は</span><br>
      <a href="">こちら</a>
    </div>
  </div>
</div>
<!-- End of content -->

<!-- Insert Scripts right here -->
<script src="<?=$source?>/node_modules/html5-qrcode/html5-qrcode.min.js"></script>
<script src="qr-reading.js"></script>
<?php include "../../layouts/footer.php"?>