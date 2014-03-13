<html>
<head>
<?php
  echo link_tag('css/style.css');
  echo link_tag('css/bootstrap.css');
?>
</head>
<body>
<h1><?php echo lang('deactivate_heading');?></h1>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
<?php 
      $attributes = array('class' => 'form-horizontal');
      echo form_open("auth/deactivate/".$user->id,$attributes);
?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    	<input type="radio" name="confirm" value="yes" checked="checked" />
    	<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    	<input type="radio" name="confirm" value="no" />
    </div>
</div>
  
  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-primary"');?>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>