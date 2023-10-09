<?php
  $navbar = true;
  $header = false;
?>
<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to top goes here -->
<link rel="stylesheet" href="top.css">

<!-- Content Goes Here -->
<div id="top" class="container">
    <div class="row">
        <h3>お知らせ</h3>
    </div>
    <div class="row">
        <div class="carousel">
            <div class="card">
                <img src="https://images.pexels.com/photos/18399245/pexels-photo-18399245/free-photo-of-brunette-woman-posing-on-a-field.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="ここに画像が入ります" class="card-img-top">
                <div class="card-body">
                    <div class="card-title">新商品が追加されました！</div>
                    <div class="card-text">20XX年MM月DD日</div>
                </div>
            </div>
            <div class="card">
            <img src="https://images.pexels.com/photos/18399245/pexels-photo-18399245/free-photo-of-brunette-woman-posing-on-a-field.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="ここに画像が入ります" class="card-img-top">
                <div class="card-body">
                    <div class="card-title">新商品が追加されました！</div>
                    <div class="card-text">20XX年MM月DD日</div>
                </div>
            </div>
            <div class="card">
            <img src="https://images.pexels.com/photos/18399245/pexels-photo-18399245/free-photo-of-brunette-woman-posing-on-a-field.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="ここに画像が入ります" class="card-img-top">
                <div class="card-body">
                    <div class="card-title">新商品が追加されました！</div>
                    <div class="card-text">20XX年MM月DD日</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>会員ランク</h3>
    </div>
    <div class="row">
        <div class="membership-rank">
            <div class="badge">
                <div class="badge-container">    
                    <div class="label-container">
                        <label>現在のランク</label>
                    </div>
                    <div class="badge-container">
                        <span class="badge">主任</span>
                    </div>
                </div>
                <div class="badge-container">
                    <div class="label-container">
                        <label>次のランクまであと</label>
                    </div>
                    <div class="badge-container">
                        <span class="badge">4回</span>
                    </div>
                </div>
            </div>
            <div class="progress">
                <ul>
                    <li>
                        <label>主任</label>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <label>課長</label>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <label>部長</label>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <label>常務</label>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <label>専務</label>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <label>社長</label>
                        <span class="circle"></span>
                    </li>
                </ul>
                <div class="progress-bar-position">
                    <progress id="progressBar" max="100"></progress>
                </div>
            </div>
            <a href="" class="about-membership-rank">会員ランクについて</a>
        </div>
    </div>
    <div class="row my-50px">
        <div class="menu">
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="bag" class="icon">
                <label>お買い物方法</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="horn" class="icon">
                <label>お知らせ</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="pencil" class="icon">
                <label>アンケート</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="calculator" class="icon">
                <label>商品情報</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="newspaper" class="icon">
                <label>コラム</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="translator" class="icon">
                <label>よくあるご質問</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="book" class="icon">
                <label>利用規約</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="frog" class="icon">
                <label>オフィスグリコHP</label>
            </div>
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/2662/2662503.png" alt="direct" class="icon">
                <label></label>
            </div>
        </div>
    </div>
</div>
<!-- End of Content -->
<script src="top.js"></script>
<?php include "../../layouts/footer.php"?>