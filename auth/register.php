<?php
	require "lang_config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi</title>
          <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
          <link href="../css/style.css" rel="stylesheet">
		   <link rel="stylesheet" href="../css/adminlte.min.css">
    </head>
 <body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>Registrasi</h2>
              <div class="underline-title"></div>
            </div>
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
			
            <form action="proses_register.php" method="post" class="form">
                <label for="user-password" style="padding-top:22px">&nbsp;Username</label>   
                <input
                    class="form-content"
                    type="text"
                    name="username"
                    required />
                        <div class="form-border"></div>
                <label for="user-email" style="padding-top:13px">&nbsp;<?php echo $txt_fullname; ?></label>
                    <input
                        class="form-content"
                        type="text"
                        name="fullname"
                        autocomplete="of"
                        required />
                            <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                    <input
                        class="form-content"
                        type="password"
                        name="password"
                        autocomplete="of"
                        required />
                            <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Re-Password</label>
                    <input
                        class="form-content"
                        type="password"
                        name="confirm_password"
                        required />
                            <div class="form-border"></div>
                                <a style="text-align: right" font-family="Raleway Thin"><?php echo $txt_have_account; ?></a>
                                <a href="login.php"><legend id="forgot-pass"><?php echo $txt_sign; ?></legend></a>
                                <input id="submit-btn" type="submit" name="submit" value="<?php echo $txt_register; ?>" />
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
            </form>
          </div>
    </div>
 </body>
</html>