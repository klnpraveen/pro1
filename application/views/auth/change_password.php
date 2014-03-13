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
<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>
<?php 
      $attributes = array('class' => 'form-horizontal');
      echo form_open("auth/change_password",$attributes);
?>
<div class="form-group">
      <?php
            $lbl_oldp = array('for' => 'old_password', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('change_password_old_password_label'), 'old_password', $lbl_oldp);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($old_password);?>
    </div>
</div>
<div class="form-group">
      <?php
            $lbl_newp = array('for' => 'new_password', 'class' => 'col-sm-2 control-label');
            echo form_label(sprintf(lang('change_password_new_password_label'), $min_password_length),'new_password', $lbl_newp);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($new_password);?>
    </div>
</div>
<div class="form-group">
      <?php
            $lbl_cnewp = array('for' => 'new_password_confirm', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('change_password_new_password_confirm_label'), 'new_password_confirm', $lbl_cnewp);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($new_password_confirm);?>
      </div>
</div>
  
      <?php echo form_input($user_id);?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>