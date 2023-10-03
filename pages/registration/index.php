<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to registration goes here -->
  <link rel="stylesheet" href="registration.css">

<!-- Content Goes Here -->
  <div id="registration" class="container">
    <div class="row center">
      <h3>会員登録</h3>
      <p>
        会員登録いただきますと
        ご購入履歴に応じたランキング特典や 各種クーポンもご利用いただけます。
      </p>
    </div>
    <div class="row">
      <div class="round-container">
        <div class="registration-form">
          <div class="form-select-input">
            <label for="first_select">性別 <span class="required">*</span></label>
            <select name="" id="first_select">
              <option value="">I am not really sure 1</option>
              <option value="">I am not really sure 2</option>
            </select>
          </div>
          <div class="group-form-select">
            <label for="first_select">生年月日 <span class="required">*</span></label>
            <div class="input-container">
              <div class="form-select-input">
                <select name="" id="first_select" class="small-icon">
                  <option value="">1</option>
                  <option value="">2</option>
                </select>
                <label for="first_select">年</label>
              </div>
              <div class="form-select-input">
                <select name="" id="first_select" class="small-icon">
                  <option value="">3</option>
                  <option value="">4</option>
                </select>
                <label for="first_select">月</label>
              </div>
              <div class="form-select-input">
                <select name="" id="first_select" class="small-icon">
                  <option value="">5</option>
                  <option value="">6</option>
                </select>
                <label for="first_select">日</label>
              </div>
            </div>
          </div>
          <div class="form-select-input">
            <label for="first_select">業種 <span class="required">*</span></label>
            <select name="" id="first_select">
              <option value="">I am not really sure 1</option>
              <option value="">I am not really sure 2</option>
            </select>
          </div>
          <div class="form-select-input">
            <label for="first_select">職種 <span class="required">*</span></label>
            <select name="" id="first_select">
              <option value="">I am not really sure 1</option>
              <option value="">I am not really sure 2</option>
            </select>
          </div>
          
          <div class="form-select-input">
            <label for="first_select">会社メールアドレス <span class="required">*</span></label>
            <input type="text">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="group-button-container">
        <button class="btn danger w-50 h-45px">あとで</button>
        <button class="btn danger w-50 h-45px">登録する</button>
      </div>
    </div>
  </div>
<!-- End of content -->


<?php include "../../layouts/footer.php"?>