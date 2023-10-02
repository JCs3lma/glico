<?php include "layouts/header.php"?>
  <a href="pages/terms" class="btn danger">Terms</a>
  <a href="pages/registration" class="btn danger">Register</a>
  <a href="pages/qr-reading" class="btn danger">QR Reading</a>
  <a href="pages/top" class="btn danger">Top</a>
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
  <h4>QR Code not working</h4>
  <span>Then run this command</span>
  <pre style="
    background: black;
    padding-top: 10px;
    color: #fff;
  ">
    npm i html5-qrcode
  </pre>
<?php include "layouts/footer.php"?>