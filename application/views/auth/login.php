<?php 
  echo doctype('html5');
?>
<html>
<head>
<?php
  echo link_tag('css/style.css');
  echo link_tag('css/bootstrap.css');
?>
</head>
<body>
<?php
  echo heading(lang('login_heading'),1);
  echo lang('login_subheading');
  echo $message;
  $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
  echo form_open("auth/login",$attributes);?>
  <div class="form-group">
    <?php 
      $lbl_email = array('for' => 'identity', 'class' => 'col-sm-2 control-label');
      echo form_label(lang('login_identity_label'), 'identity', $lbl_email);
    ?>
    <div class="col-sm-10">
      <?php echo form_input($identity);?>
    </div>
  </div>

  <div class="form-group">
    <?php
      $lbl_pswd = array('for' => 'password', 'class' => 'col-sm-2 control-label');
      echo form_label(lang('login_password_label'), 'password', $lbl_pswd);
    ?>
    <div class="col-sm-10">
      <?php echo form_input($password);?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> 
          <?php echo form_label(lang('login_remember_label'), 'remember');?>
        
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <?php $data = array('name' => 'submit','value' => lang('login_submit_btn'),'id' => 'btnSubmit','class' => 'btn btn-primary');  echo form_submit($data);?>
    </div>
  </div>
<?php echo form_close();?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>&nbsp;&nbsp;&nbsp;
        <a href="register">Register</a>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#btnSubmit').click(function(e) {
        var isValid = true;
        $('input[type="text"]').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
        if (isValid == false) 
            e.preventDefault();
       
    });
});​

</script>
</body>
</html>