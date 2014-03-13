<html>
<head>
<?php
  echo link_tag('css/style.css');
  echo link_tag('css/bootstrap.css');
?>
</head>
<body>
<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>
<?php 
      $attributes = array('class' => 'form-horizontal');
      echo form_open(uri_string(),$attributes);
?>
<div class="form-group">
      <?php
            $lbl_fname = array('for' => 'first_name', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_fname_label'), 'first_name', $lbl_fname);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($first_name);?>
    </div>
</div>
<div class="form-group">
      <?php
            $lbl_lname = array('for' => 'last_name', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_lname_label'), 'last_name', $lbl_lname);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($last_name);?>
    </div>
</div>
<div class="form-group">
      <?php
            $lbl_cname = array('for' => 'company', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_company_label'), 'company', $lbl_cname);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($company);?>
      </div>
</div>
<div class="form-group">
      <?php
            $lbl_phone = array('for' => 'phone', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_phone_label'), 'phone', $lbl_phone);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($phone);?>
      </div>
</div>
<div class="form-group">
      <?php
            $lbl_pswd = array('for' => 'password', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_password_label'), 'password', $lbl_pswd);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($password);?>
      </div>
</div>
<div class="form-group">
      <?php
            $lbl_cpswd = array('for' => 'password_confirm', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_password_confirm_label'), 'password_confirm', $lbl_cpswd);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($password_confirm);?>
      </div>
</div>

     

      <?php if ($this->ion_auth->is_admin()): ?>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <h3><?php echo lang('edit_user_groups_heading');?></h3>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo $group['name'];?>
              </label>
          <?php endforeach?>
          </div>
        </div>
          

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-primary"');?>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>