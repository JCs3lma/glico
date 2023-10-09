<?php 
    $header = false;
    $footer = false;
?>

<?php include "../../../layouts/header.php"?>

<!-- Calling CSS Specifically to registration goes here -->
<link rel="stylesheet" href="completed.css">

<!-- Content Goes Here -->
<div id="purchase-completed" class="container">
    <div class="row center">
        <h2>ご利用ありがとうございました</h2>
    </div>
    <div class="row center bold">
        <p>お支払いが完了いたしました。</p>
        <p>またのご利用をお待ちしております。</p>
    </div>
    <div class="purchase-row row">
        <div class="round-container">
            <div class="purchase-details">
                <div class="first-details">
                    <div>
                        <div>
                            <span>ご購入番号: </span>
                            <span>0000000000000000</span>
                        </div>
                        <div>
                            <span>ご購入店舗: </span>
                            <span>0000000000000000</span>
                        </div>
                        <div>
                            <span>取引時間: </span>
                            <span>2024/mm/dd 00:00:00</span>
                        </div>
                        <div>
                            <span>お支払い方法: </span>
                            <span>PayPay</span>
                        </div>
                    </div>
                </div>
                <div class="details-divider"><hr></div>
                <div class="second-details">
                    <div>
                        <div>小計 (5点)</div>
                        <div>100円引きクーポン</div>
                        <div class="payment">支払金額</div>
                    </div>
                    <div class="yen">
                        <div>750円</div>
                        <div>-100円</div>
                        <div class="payment">650円</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="group-button-container">
            <div class="btn danger">TOPへ戻る</div>
        </div>
    </div>
</div>
<!-- End of content -->

<?php include "../../../layouts/footer.php"?>