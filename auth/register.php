<?php
	require "lang_config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $txt_register ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/adminlte.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	
</head>
<body class="hold-transition login-page" style="background-image:url('../gambar/bg-kereta.jpg');
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;">
	<div class="login-box" style="border:0.5px solid rgba(0,0,0,0.2)">
		<div class="login-logo" style="border-bottom:1px solid grey; padding:10px;">
			<a href="login.php"><b>Transportasi Kereta</b></a>
		</div>
		<div class="card bg-trans">
			<div class="card-body login-card-body bg-trans">
				<p class="login-box-msg"><?php echo $txt_register_caption ?></p>
				
				<?php if (!empty($_GET["pesan"])) {
						//pesan jika form kosong
						if ($_GET["pesan"] == "gagal"){
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-danger">
							<?php echo $txt_alert_empty_form; ?>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php 
						// pesan jika username sudah terdaftar
						if ($_GET["pesan"] == "username"){ 
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-danger text-center">
							<?php echo $txt_username_registered; ?>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php 
						// pesan jika konfirmasi password tidak benar
						if ($_GET["pesan"] == "password"){ 
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-danger text-center">
							<?php echo $txt_incorrect_password_confirm; ?>
						</div>
					</div>
				</div>
				<?php }} ?>
				
				<form action="proses_register.php" method="post">
					<div class="input-group mb-3">
						<input size="35" type="text" placeholder="Username" name="username" id="username" />
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input size="35" type="text" placeholder="<?php echo $txt_fullname ?>" name="fullname" id="fullname" />
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input size="35" type="password" placeholder="Password" name="password" id="password" />
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>					
					<div class="input-group mb-3">
						<input size="35" type="password" placeholder="<?php echo $txt_confirm." password" ?>" name="confirm_password" id="confirm_password" />
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row bg-row">
						<div class="col-8">
							<p class="mb-0">
								<font color="white"><?php echo $txt_have_account ?></font><br><a href="login.php" class="text-center"><b><?php echo $txt_sign ?></b></a>
							</p>
						</div>
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block btnflat"><?php echo $txt_register ?></button>
						</div>
					</div>
				</form>
				<br>
				<div class="row bg-row">
					<div class="col-md-12 ">
						<div class="text-center">
							<a href="?lang=indonesia"><b>Indonesia</b></a> <font style="color:white"> | </font>
							<a href="?lang=inggris"><b>Inggris</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
