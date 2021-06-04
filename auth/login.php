<?php
	include "lang_config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
		  <meta charset="utf-8">
          <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		  <link rel="stylesheet" href="../css/adminlte.min.css">
		  
          <link href="../css/style.css" rel="stylesheet">
    </head>
 <body style="background-image: url('../gambar/kereta.jpg'); background-repeat: no-repeat;">
    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>Transportasi Kereta</h2>
			  <br>
              <div class="underline-title"></div>
            </div>
			
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
			
            <form action="proses_login.php" method="post" class="form">
                <label for="user-email" style="padding-top:13px">&nbsp;Username</label>
                    <!-- <input
                    class="form-content"
                    type="email"
                    name="email"
                    required /> -->
                        <!-- <div class="form-border"></div>
                            <label for="user-password" style="padding-top:22px">&nbsp;Nama</label> -->
                    <input
                        class="form-content"
                        type="text"
                        name="username"
                        autocomplete="of"
                        required />
                            <div class="form-border"></div>
                                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                    <input
                        class="form-content"
                        type="password"
                        name="password"
                        required />
                            <div class="form-border"></div>
                                <a href="register.php"><legend id="forgot-pass"><?php echo $txt_register ?></legend></a>
                                <input id="submit-btn" type="submit" name="submit" value="<?php echo $txt_sign ?>" />
			</form>
				<br>
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center">
							<a href="?lang=indonesia" id="signup">indonesia</a> <font color="#2dbd6e"> | </font> 
							<a href="?lang=inggris" id="signup">Inggris</a>
						</div>
					</div>
				</div>
										
                                <!-- <a href="#" id="signup">Don't have account yet?</a> -->
            
          </div>
    </div>
 </body>
</html>