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
                <progress id="file" value="32" max="100"> 32% </progress>
            </div>
            <a href="" class="about-membership-rank">会員ランクについて</a>
        </div>
    </div>
</div>
<!-- End of Content -->

<?php include "../../layouts/footer.php"?>