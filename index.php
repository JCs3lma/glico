<?php include "layouts/header.php"?>
  <div class="scrollable-y flex gap-10">
    <a href="pages/terms" class="btn danger">Terms</a>
    <a href="pages/registration" class="btn danger">Register</a>
    <a href="pages/qr-reading" class="btn danger">QR Reading</a>
    <a href="pages/barcode" class="btn danger">Barcode</a>
    <a href="pages/top" class="btn danger">Top</a>
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
<?php include "layouts/footer.php"?>