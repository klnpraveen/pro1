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
<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>
<?php 
      $attributes = array('class' => 'form-horizontal');
      echo form_open("auth/create_group",$attributes);
?>
<div class="form-group">
      <?php
            $lbl_gname = array('for' => 'group_name', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_group_name_label'), 'group_name', $lbl_gname);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($group_name);?>
    </div>
</div>

<div class="form-group">
      <?php
            $lbl_desc = array('for' => 'description', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_group_desc_label'), 'description', $lbl_desc);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($description);?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>