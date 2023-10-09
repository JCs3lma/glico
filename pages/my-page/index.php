<?php
  $navbar = true;
  $header = false;
  $footer = false;
?>
<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to top goes here -->
<link rel="stylesheet" href="my-page.css">

<!-- Content Goes Here -->
<div id="my-page" class="container">
    <div class="row">
        <div class="membership-rank">
            <h3 class="center m-0 bold">会員ランク</h3>
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
                <div class="date-update">
                  <div class="range">
                    <p>
                      20YY/MM/01~20YY/MM/31
                      <br>
                      までの購入回数
                    </p>
                  </div>
                  <div class="result">
                    20回
                  </div>
                </div>
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
            <div class="link">
              <img src="<?=$source.'/assets/img/link.png'?>" alt="chain">
              <a href="" class="about-membership-rank">会員ランクについて</a>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="member-info">
          <h3 class="center m-0 mb-20px bold">会員情報</h3>
          <table>
            <tr>
              <td>会員No</td>
              <td>123456789</td>
            </tr>
            <tr>
              <td>性別</td>
              <td>男性</td>
            </tr>
            <tr>
              <td>生年月日</td>
              <td>1999年12月22日</td>
            </tr>
            <tr>
              <td>業種</td>
              <td>IT</td>
            </tr>
            <tr>
              <td>職種</td>
              <td>会社員</td>
            </tr>
            <tr>
              <td>会社メールアドレス</td>
              <td>xxxx@...</td>
            </tr>
          </table>
          <button class="btn danger fix">修正する</button>
      </div>
    </div>
</div>
<!-- End of Content -->
<script src="my-page.js"></script>
<?php include "../../layouts/footer.php"?>