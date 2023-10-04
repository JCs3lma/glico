<?php
  $footer = false;
  include "layouts/header.php"
?>
  <div class="flex flex-direction-column gap-10 align-items-center">
    <a href="pages/terms" class="btn danger w-50">Terms</a>
    <a href="pages/registration" class="btn danger w-50">Register</a>
    <a href="pages/qr-reading" class="btn danger w-50">QR Reading</a>
    <a href="pages/barcode" class="btn danger w-50">Barcode</a>
    <a href="pages/top" class="btn danger w-50">Top</a>
    <a href="pages/cart" class="btn danger w-50">Cart</a>
    <a href="pages/cart/checkout" class="btn danger w-50">Checkout</a>
    <a href="pages/how-to-use" class="btn danger w-50">How to use</a>
    <a href="pages/faq" class="btn danger w-50">FAQ</a>
  </div>
  <br>
  <br>
  <hr>
  <h1>Docs</h1>
  <h4>How to include navbar to each page?</h4>
  <span>Put this to the top of your code to include navbar</span>
  <pre style="
    background: black;
    padding-top: 10px;
    color: #fff;
  ">
    &lt;?php
      $navbar = true;
    ?&gt;
  </pre>
  <h4>QR Code not working?</h4>
  <span>Then run this command</span>
  <pre style="
    background: black;
    padding-top: 10px;
    color: #fff;
  ">
    npm i html5-qrcode
  </pre>
  
  <h4>Header is not needed but need to read its css?</h4>
  <span>Put this to the top of your code to remove header but still able to use glico.css</span>
  <pre style="
    background: black;
    padding-top: 10px;
    color: #fff;
  ">
    &lt;?php
      $header = false;
    ?&gt;
  </pre>
  <h4>Footer is not needed but needs its js?</h4>
  <span>Put this to the top of your code to remove footer but still able to use glico.js</span>
  <pre style="
    background: black;
    padding-top: 10px;
    color: #fff;
  ">
    &lt;?php
      $footer = false;
    ?&gt;
  </pre>
<?php include "layouts/footer.php"?>