<?php
	include "lang_config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $txt_sign ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/adminlte.min.css">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body class="hold-transition login-page"  style="background-image:url('../gambar/bg-kereta.jpg');
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;">
	<div class="login-box" style="border:0.5px solid rgba(0,0,0,0.2)">
		
		<div class="card bg-trans" >
			<div class="login-logo" style="border-bottom:1px solid grey; padding:10px;">
				<a href="login.php"><b>Transportasi Kereta</b></a>
			</div>
			<div class="card-body login-card-body bg-trans">
				<p class="login-box-msg"><?php echo $txt_sign_caption ?></p>
				
				<?php if (!empty($_GET["pesan"])) {
						// pesan jika username atau password tidak di isi
						if ($_GET["pesan"] == "gagal"){
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo $txt_alert_empty; ?>
				</div>
				<?php } ?>
				<?php 
						// pesan jika username atau password tidak cocok
						if ($_GET["pesan"] == "tidak_cocok"){ 
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-danger text-center">
							<?php echo $txt_alert_failed_login; ?>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php 
						// pesan jika berhasil register
						if ($_GET["pesan"] == "sukses_register"){
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-success text-center">
							<?php echo $txt_success_register; ?>
						</div>
					</div>
				</div>
				<?php }} ?>
				
				<form action="proses_login.php" method="post">
					<div class="input-group mb-3">
						<input size="35" type="text" placeholder="Username" name="username" id="username" />
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
					<div class="row bg-row">
						<div class="col-8">
							<p class="mb-0 mylink">
								<a href="register.php" class="textcenter"><b><?php echo $txt_register ?></b></a>
							</p>
						</div>
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block btnflat"><?php echo $txt_sign ?></button>
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