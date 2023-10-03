<?php include "../../layouts/header.php"?>

<!-- Calling CSS Specifically to registration goes here -->
  <link rel="stylesheet" href="registration.css">

<!-- Content Goes Here -->
  <div id="registration" class="container">
    <div class="row center">
      <h3>Registration</h3>
      <p>This is a very long description that goes up to 3 rows
        when mobile and not sure yet in desktop but that is the goal</p>
    </div>
    <div class="row">
      <div class="round-container">
        <div class="registration-form">
          <div class="form-select-input">
            <label for="first_select">Field 1 <span class="required">*</span></label>
            <select name="" id="first_select">
              <option value="">I am not really sure 1</option>
              <option value="">I am not really sure 2</option>
            </select>
          </div>
          <div class="group-form-select">
            <label for="first_select">Field 2 <span class="required">*</span></label>
            <div class="input-container">
              <div class="form-select-input">
                <select name="" id="first_select" class="small-icon">
                  <option value="">1</option>
                  <option value="">2</option>
                </select>
                <label for="first_select">M</label>
              </div>
              <div class="form-select-input">
                <select name="" id="first_select" class="small-icon">
                  <option value="">3</option>
                  <option value="">4</option>
                </select>
                <label for="first_select">D</label>
              </div>
              <div class="form-select-input">
                <select name="" id="first_select" class="small-icon">
                  <option value="">5</option>
                  <option value="">6</option>
                </select>
                <label for="first_select">Y</label>
              </div>
            </div>
          </div>
          <div class="form-select-input">
            <label for="first_select">Field 3 <span class="required">*</span></label>
            <select name="" id="first_select">
              <option value="">I am not really sure 1</option>
              <option value="">I am not really sure 2</option>
            </select>
          </div>
          <div class="form-select-input">
            <label for="first_select">Field 4 <span class="required">*</span></label>
            <select name="" id="first_select">
              <option value="">I am not really sure 1</option>
              <option value="">I am not really sure 2</option>
            </select>
          </div>
          
          <div class="form-select-input">
            <label for="first_select">Field 5 <span class="required">*</span></label>
            <input type="text">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="group-button-container">
        <button class="btn danger w-50 h-45px">Save</button>
        <button class="btn danger w-50 h-45px">Cancel</button>
      </div>
    </div>
  </div>
<!-- End of content -->


<?php include "../../layouts/footer.php"?>