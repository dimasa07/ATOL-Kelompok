<?php 
//include "auth/session_check.php";

include "auth/lang_config.php";

if(!empty($_GET['pesan'])){
	if($_GET['pesan']=="simpan"){
		$no_kereta = $_POST['no_kereta'];
		$nama_kereta = $_POST['nama_kereta'];
		
		
		if($no_kereta=="" || $nama_kereta==""){
			header("location:train_add.php?pesan=gagal");
			//Menghentikan proses kebawah
			exit;
		}
		
		if(strlen($no_kereta)>3){
			header("location:train_add.php?pesan=jml_karakter");
			//Menghentikan proses kebawah
			die;
		}
		
		$data = mysqli_query($mysqli,"select * from kereta where no_kereta='$no_kereta'");
		$cek = mysqli_num_rows($data);

		//Jika no_kereta sudah terdaftar makan kembali ke form pendaftaran
		if($cek > 0){
			header("location:train_add.php?pesan=no_kereta");
			//Menghentikan proses kebawah
			die;
		}
		
		$data2 = mysqli_query($mysqli,"select * from kereta where nama_kereta='$nama_kereta'");
		$cek2 = mysqli_num_rows($data2);

		//Jika nama_kereta sudah terdaftar makan kembali ke form pendaftaran
		if($cek2 > 0){
			header("location:train_add.php?pesan=nama");
			//Menghentikan proses kebawah
			die;
		}
		
		//$mysqli berasal dari file dbconfig
		$result = mysqli_query($mysqli, "INSERT INTO kereta(no_kereta,nama_kereta) VALUES
		('$no_kereta','$nama_kereta')");
		
		if ($result) {
			//Jika berhasil
			header("location:train_list.php?pesan=sukses");
			//Menghentikan proses kebawah
			exit;
		} else {
			echo "Error: "  . "<br>" .  mysqli_error($mysqli);
		}
		
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title><?php echo "$txt_add $txt_train"; ?></title>
  </head>
  <body>
    
<?php include "partials/navbar.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="row">
			<div class="col text-center">
				<h1><?php echo "$txt_add $txt_train"; ?></h1>
			</div>
		</div>
    </div>
	
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
				<?php
                if (!empty($_GET["pesan"])) {
					$pesan = "";
				     if($_GET["pesan"]=="gagal"){
						$pesan = $txt_alert_empty_form;
					 }else if($_GET["pesan"]=="no_kereta"){
						$pesan = $txt_alert_registered_no_train;
					 }else if($_GET["pesan"]=="nama"){
						$pesan = $txt_alert_registered_name_train;
					 }else if($_GET["pesan"]=="jml_karakter"){
						$pesan = $txt_alert_number_character;
					 }
				?>
				<div class="alert alert-danger">
                    <?php echo $pesan; ?>
                </div>
				<?php } ?>
              <div class="row">
                <div class="col-md-1">
				</div>
                <div class="col-md-11">
				<form name="form_add" action="train_add.php?pesan=simpan" method="post">
                  <dl class="dl-horizontal">     
					<dt>No <?php echo $txt_train; ?></dt>
                    <dd><input type="text" name="no_kereta" placeholder="M01" /></dd> 
					<dt><?php echo $txt_train_name; ?></dt>
                    <dd><input type="text" name="nama_kereta" /></dd> 
                    
                  </dl>
                </div>
              </div>
            </div>
            <div class="card-footer">
                <a href="train_list.php" class="btn btn-outline-info"><?php echo $txt_back; ?></a>
                <button type="submit" class="btn btn-primary float-end" name="simpan"><?php echo $txt_save; ?></button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script language="javascript">
	document.getElementById("nl-3").classList.add("active");
</script>

<?php include "partials/footer.php"; ?>