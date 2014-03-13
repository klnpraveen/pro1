<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="shortcut icon" href="images/favicon.ico">
	<style type="text/css">

	::selection{ background-color: #2ecc71; color: white; }
	::moz-selection{ background-color: #2ecc71; color: white; }
	::webkit-selection{ background-color: #2ecc71; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1::selection{ background-color: #f1c40f; color: white; }
	h1::moz-selection{ background-color: #f1c40f; color: white; }
	h1::webkit-selection{ background-color: #f1c40f; color: white; }

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	code a{
		color: red;
	}
	#body{
		margin: 0 15px 0 15px;
	}
	p.header{
		text-align: right;
		font-size: 11px;
		
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	.uname
	{
		margin-left: 10px;
		padding-left: 10px;
		color: #2c3e50;
		width: 200px;
		height: 30px;
		border: #80bee8 5px solid;
	}
	.uname:hover
	{
		margin-left: 10px;
		padding-left: 10px;
		color: #2c3e50;
		width: 200px;
		height: 30px;
		border: #3498db 5px solid;
	}
	.pswd
	{
		margin-left: 10px;
		padding-left: 10px;
		color: #2c3e50;
		width: 200px;
		height: 30px;
		border: #80bee8 5px solid;
	}
	.pswd:hover
	{
		margin-left: 10px;
		padding-left: 10px;
		color: #2c3e50;
		width: 200px;
		height: 30px;
		border: #3498db 5px solid;
	}
	.loginbtn
	{
		background: #98bfd9;
		font-family: Verdana;
		font-size: 16px;
		color: #34495e;
		width: 120px;
		height: 30px;
		border: #98bfd9 5px solid;
		box-shadow: 0px 4px 0px #3498db;
	}
	.loginbtn:hover
	{
		background: #98bfd9;
		font-family: Verdana;
		font-size: 16px;
		color: #ecf0f1;
		width: 120px;
		height: 30px;
		cursor: pointer;
		border: #98bfd9 5px solid;
		box-shadow: 0px 4px 0px #27ae60;
	}
	.logo
	{
		border: #3498db 5px solid;
	}
	</style>
</head>
<body>

<div id="container">
		<p class="header">If you are exploring CodeIgniter for the very first time, you should start by reading the <?php echo anchor('../user_guide/','User Guide',array('target' => '_blank')); ?> </p>

	<h1>Welcome to CodeIgniter!</h1>
	
	<div id="body">
		
		<h3>Login Form :</h3>
		<code>
			<?php

				echo form_open('auth');
				$udata = array(
              		'name'        => 'username',
              		'id'          => 'username',
              		'value'       => '',
              		'maxlength'   => '30',
              		'size'        => '',
              		'class'		  => 'uname',
              
            	);
            	$pdata = array(
              		'name'        => 'password',
              		'id'          => 'password',
              		'type'		  => 'password',
          			'value'       => '',
              		'maxlength'   => '30',
              		'size'        => '',
              		'class'		  => 'pswd',
              
            	);
            	$loginbtn = array(
              		'name'        => 'submit',
              		'id'          => 'submit',
              		'type'		  => 'submit',
              		'value'       => 'Login',
              		'class'		  => 'loginbtn'
            	); 
				echo form_label('UserName :','ulbl').form_input($udata).br(2);
				echo form_label('PassWord :','pswd').form_input($pdata).nbs(2).form_submit($loginbtn).br(1);
				echo nbs('12').anchor('#','forgot password?');

				echo form_close();
			 ?>
		
		</code>

		<div align=center>
			<?php
				$image_properties = array(
          'src' => 'images/mbl.jpg',
          'alt' => 'Me, demonstrating how to eat 4 slices of pizza at one time',
          'class' => 'logo',
          'width' => '',
          'height' => '',
          'title' => 'BootStrap Guru',
          'rel' => 'lightbox',
);

echo img($image_properties);
			?>
		</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>