<?php
    $navbar = true;
    $header = false;
    $footer = false;
?>

<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to questionnaire goes here -->
<link rel="stylesheet" href="questionnaire.css">

<!-- Content Goes Here -->
<div id="questionnaire" class="container">
    <div class="form-row row">
        <div class="form-container">
            <div class="round-container">
                <div class="questionnaire-details">
                    <div class="questionnaire-header center">
                        <div class="header-item-1">アンケートA</div>
                        <div class="header-item-2">アンケート概要</div>
                    </div>
                    <div class="answer-period">
                        <div class="white-rectangle">
                            <div>回答期間:</div>
                            <div>20YY年 MM月DD 日 ~20YY年 MM月 DD 日</div>
                        </div>
                    </div>
                    <div class="questionnaire-item-container">
                        <div class="questionnaire-title">
                            アンケートA
                        </div>
                        <div class="questionnaire-items">
                            <div class="question-item-1">
                                <div class="question-label">
                                    <div>1.質問</div>
                                    <div class="relative-number">
                                        1
                                        <div class="absolute-circle"></div>
                                    </div>
                                </div>
                                <input type="text" name="question_1">
                            </div>
                            <div class="question-item-2">
                                <div class="question-label">
                                    <div>2.質問</div>
                                    <div class="relative-number">
                                        2
                                        <div class="absolute-circle"></div>
                                    </div>
                                </div>
                                <div class="question-radio">
                                    <label class="glico-radio">
                                        <div>ラジオボックス1</div>
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="glico-radio">
                                        <div>ラジオボックス2</div>
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="glico-radio">
                                        <div>ラジオボックス3</div>
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="question-item-3">
                                <div class="question-label">
                                    <div>3.質問</div>
                                    <div class="relative-number">
                                        3
                                        <div class="absolute-circle"></div>
                                    </div>
                                </div>
                                <div class="question-checkbox">
                                    <label class="glico-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <div class="checkbox-text">
                                            チェックボックス1
                                        </div>
                                    </label>
                                </div>
                                <div class="question-checkbox">
                                    <label class="glico-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <div class="checkbox-text">
                                            チェックボックス2
                                        </div>
                                    </label>
                                </div>
                                <div class="question-checkbox">
                                    <label class="glico-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <div class="checkbox-text">
                                            チェックボックス3
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-row row">
        <div class="button-container">
            <div class="btn danger">送信する</div>
        </div>
    </div>
</div>
<!-- End of content -->

<?php include "../../layouts/footer.php"?>