<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to top goes here -->
<link rel="stylesheet" href="profile-edit.css">

<!-- Content Goes Here -->
<div id="profile-edit" class="container">
    <div class="row center">
        <h2>プロフィールの編集</h2>
    </div>
    <div class="row">
        <div class="round-container">
            <div class="profile-edit-form">
                <div class="form-select-input">
                    <label for="member_no">会員No</label>
                    <div class="center">123456789</div>
                </div>
                <div class="form-select-input">
                    <label for="gender">
                        性別
                        <span class="required">*</span>
                    </label>
                    <select name="gender" class="center">
                        <option value="男性">男性</option>
                    </select>
                </div>
                <div class="group-form-select">
                    <label for="birthdate">
                        生年月日
                        <span class="required">*</span>
                    </label>
                    <div class="input-container">
                        <div class="form-select-input">
                            <select name="year" class="small-icon">
                                <option value="1999">1999</option>
                            </select>
                            <label for="year">年</label>
                        </div>
                        <div class="form-select-input">
                            <select name="month" class="small-icon">
                                <option value="12">12</option>
                            </select>
                            <label for="month">月</label>
                        </div>
                        <div class="form-select-input">
                            <select name="day" class="small-icon">
                                <option value="22">22</option>
                            </select>
                            <label for="day">日</label>
                        </div>
                    </div>
                </div>
                <div class="form-select-input">
                    <label for="industry">
                        業種
                        <span class="required">*</span>
                    </label>
                    <select name="industry" class="center">
                        <option value="IT">IT</option>
                    </select>
                </div>
                <div class="form-select-input">
                    <label for="job_type">
                        職種
                        <span class="required">*</span>
                    </label>
                    <select name="job_type" class="center">
                        <option value="会社員">会社員</option>
                    </select>
                </div>
                <div class="form-select-input">
                    <label for="company_email_address">
                        会社メールアドレス
                    </label>
                    <input type="text" value="xxxx@example.co.jp" class="center">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="group-button-container">
            <div class="btn danger">キャンセル</div>
            <div class="btn danger">登録する</div>
        </div>
    </div>
</div>
<!-- End of Content -->

<?php include "../../layouts/footer.php"?>