<?php
//include "auth/session_check.php";

include "auth/lang_config.php";
if(!empty($_GET["kode"])){
	$_SESSION['id_jadwal']=$_GET['kode'];
}
if(!empty($_GET['pesan'])){
	if($_GET['pesan']=="submit"){
		$no_identitas = $_POST['no_identitas'];
		$no_telepon = $_POST['no_telepon'];
		$alamat = $_POST['alamat'];
		$tipe = $_POST['tipe'];
				
		if($no_identitas=="" || $no_telepon=="" || $alamat=="" || $tipe==""){
			header("location:form.php?pesan=gagal");
			//Menghentikan proses kebawah
			exit;
		}
		
		$date = date("Y-m-d H:i:s");
		//$mysqli berasal dari file dbconfig
		$result = mysqli_query($mysqli, "INSERT INTO tiket_dibeli(username,tanggal) VALUES
		('".$_SESSION['username']."', '$date');");
		$result2 = mysqli_query($mysqli, "INSERT INTO detail_tiket(id_jadwal,no_identitas,no_telepon,alamat,tipe_penumpang) VALUES
		('".$_SESSION['id_jadwal']."','$no_identitas','$no_telepon','$alamat','$tipe');");
		
		if ($result && $result2) {
			header("location:order_ticket.php?pesan=sukses");
			//Menghentikan proses kebawah
			exit;
		} else {
			echo "Error: "  .  mysqli_error($mysqli);
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

    <title>Form</title>
  </head>
  <body>
   <?php include "partials/navbar.php"; ?>
   
<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1><?php echo $txt_purchase_form; ?></h1>
    </div>
  </div>
  
  <form action="?pesan=submit" method="post">
  <?php
		if (!empty($_GET["pesan"])) {
			 if($_GET["pesan"]=="gagal"){
		?>
		<div class="alert alert-danger">
			<?php echo $txt_alert_empty_form; ?>
		</div>
	<?php }} ?>
  <div class="row">
	<div class="col">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">No <?php echo $txt_identity; ?></label>
			<input name="no_identitas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="No KTP" width="">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label"><?php echo $txt_phone_number; ?></label>
			<input name="no_telepon" type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $txt_phone_number; ?>" width="">
		</div>
	</div>
 
	<div class="col">
		<div class="mb-3">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label"><?php echo $txt_address; ?></label>
				<input name="alamat" type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $txt_address; ?>" width="">
			</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label"><?php echo $txt_passenger_type; ?></label>
			<input name="tipe" type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $txt_passenger_hint; ?>" width="">
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col text-center">
			<div class="d-grid gap-2 col-6 float-end">
				<a href="order_ticket.php" class="btn btn-danger" ><?php echo $txt_cancel; ?></a>
			</div>
		</div>
		<div class="col text-center">
			<div class="d-grid gap-2 col-6">
				<button class="btn btn-primary" type="submit" onclick="javascript: return confirm('<?php echo $txt_sure_order; ?>');">SUBMIT</button>
			</div>
		</div>
	</div>
	</form>

<script language="javascript">
	document.getElementById("nl-2").classList.add("active");
</script>

<?php include "partials/footer.php"; ?>