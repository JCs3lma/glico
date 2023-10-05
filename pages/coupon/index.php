<?php
    $navbar = true;
    $header = false;
    $footer = false;
?>
<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to coupons goes here -->
<link rel="stylesheet" href="coupon.css">

<!-- Content Goes Here -->
<div id="coupon">
    <div class="nav-row row">
        <div class="nav-header">
            <div class="nav-item" data-tab="available-coupons">
                使用可能クーポン
                <div class="page-indicator"></div>
            </div>
            <div class="nav-item" data-tab="used-or-expired">
                使用済・期限切れ
                <div class="page-indicator"></div>
            </div>
        </div>
    </div>
    <div class="card-row row">
        <div class="container">
            <div id="coupon-content">
            </div>
        </div>
    </div>
</div>
<!-- End of content -->

<!-- Insert Scripts right here -->
<script src="coupon.js"></script>
<?php include "../../layouts/footer.php"?>