<?php
    $navbar = true;
    $header = false;
    $footer = false;
?>
<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to content list goes here -->
<link rel="stylesheet" href="content-list.css">

<!-- Content Goes Here -->
<div id="content-list">
    <div class="nav-row row">
        <div class="nav-header">
            <div class="nav-item" data-tab="product-information">
                <div>商品情報</div>
                <div class="page-indicator"></div>
            </div>
            <div class="nav-item" data-tab="column">
                <div>コラム</div>
                <div class="page-indicator"></div>
            </div>
            <div class="nav-item" data-tab="notice">
                <div>お知らせ</div>
                <div class="page-indicator"></div>
            </div>
        </div>
    </div>
    <div class="card-row row">
        <div class="container">
            <div id="content-list-display"></div>
        </div>
    </div>
</div>
<!-- End of content -->

<!-- Insert Scripts right here -->
<script src="content-list.js"></script>
<?php include "../../layouts/footer.php"?>