<?php if(!isset($footer)): ?>
<footer>
  <div class="footer <?= isset($navbar) ? 'footer-bottom':''?>">
    <a href="">利用者情報の外部送信について</a>
    <p class="m-0">Copyright © 2023 Ezaki Glico Co., Ltd. All right reserved</p>
  </div>
</footer>
<?php endif; ?>
<?php
  if (isset($navbar)) {
    include 'navigation.php';
  }
?>
<script src="<?=$source.'/assets/js/glico.js'?>"></script>
</body>
</html>