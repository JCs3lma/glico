<?php
  // $source = 'http://192.168.254.104/glico';
  $source = 'http://localhost/glico';
  $title = 'Home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= $source;?>/assets/css/glico.css">
  
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
  <?php if (!isset($header)): ?>
  <header>
    <a href="<?= $source; ?>">
      <div class="logo">
        <img src="<?= $source;?>/assets/img/logo.png" alt="logo">
      </div>
    </a>
  </header>
  <?php endif; ?>