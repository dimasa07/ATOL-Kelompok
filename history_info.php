<?php 
//include "auth/session_check.php";

include "auth/lang_config.php";
if(!empty($_GET["kode_booking"])){
	$_SESSION['detail_kode']=$_GET['kode_booking'];
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

    <title><?php echo $txt_history_detail; ?></title>
  </head>
  <body>
    
<?php include "partials/navbar.php"; ?>

<div class="content-wrapper">
  <div class="content-header">
        <div class="row">
			<div class="col text-center">
				<h1><?php echo $txt_history_detail; ?></h1>
			</div>
		</div>
    </div>
 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
				<div class="col-md-1">
				</div>
                <div class="col-md-11">
                  <dl class="dl-horizontal">
					<?php
						$query_detail = mysqli_query($mysqli,"SELECT * FROM tiket_dibeli JOIN user ON tiket_dibeli.username=user.username JOIN detail_tiket ON tiket_dibeli.kode_booking=detail_tiket.kode_booking JOIN jadwal ON detail_tiket.id_jadwal=jadwal.id_jadwal JOIN kereta ON jadwal.no_kereta=kereta.no_kereta WHERE tiket_dibeli.kode_booking='".$_SESSION['detail_kode']."' LIMIT 1");
						
						$query_durasi = mysqli_query($mysqli,"SELECT TIMEDIFF(perkiraan_tiba,waktu_berangkat) AS durasi FROM jadwal JOIN detail_tiket ON detail_tiket.id_jadwal=jadwal.id_jadwal WHERE kode_booking='".$_SESSION['detail_kode']."' LIMIT 1");
										
						
						$res = mysqli_fetch_assoc($query_detail);
						$kode = $res['Kode_Booking'];
						$nama_pemesan = $res['fullname'];
						$tanggal_pesan = $res['Tanggal'];
						$nama_kereta = $res['Nama_Kereta'];
						$berangkat = $res['Berangkat'].", ".$res['Waktu_Berangkat'];
						$tiba = $res['Tujuan'].", ".$res['Perkiraan_Tiba'];
						$harga = $res['Harga'];
						$no_identitas = $res['No_Identitas'];
						$no_telepon = $res['No_Telepon'];
						$alamat = $res['Alamat'];
						$tipe_penumpang = $res['Tipe_Penumpang'];
						
						$res2 = mysqli_fetch_assoc($query_durasi);
						$durasi = $res2['durasi'];
						$arr_durasi = explode(":",$durasi);
					
					?>
                    <dt><?php echo $txt_booking_kode; ?></dt>
                    <dd><?php echo $kode; ?></dd>
                    <dt><?php echo $txt_buyer_name; ?></dt>
                    <dd><?php echo $nama_pemesan; ?></dd>
					<dt>No <?php echo $txt_identity; ?></dt>
                    <dd><?php echo $no_identitas; ?></dd>
					<dt><?php echo $txt_phone_number; ?></dt>
                    <dd><?php echo $no_telepon; ?></dd>
					<dt><?php echo $txt_passenger_type; ?></dt>
                    <dd><?php echo $tipe_penumpang; ?></dd>
					<dt><?php echo $txt_address; ?></dt>
                    <dd><?php echo $alamat; ?></dd>
                    <dt><?php echo $txt_date; ?></dt>
                    <dd><?php echo $tanggal_pesan; ?></dd>
                    <dt><?php echo $txt_train_name; ?></dt>
                    <dd><?php echo $nama_kereta; ?></dd>       
                    <dt><?php echo $txt_from; ?></dt>
                    <dd><?php echo $berangkat; ?></dd>       
                    <dt><?php echo $txt_to; ?></dt>
                    <dd><?php echo $tiba; ?></dd>
					<dt><?php echo $txt_duration; ?></dt>
                    <dd><?php echo "$arr_durasi[0]<sub>$txt_hour</sub> $arr_durasi[1]<sub>m</sub>"; ?></dd>
					<dt><?php echo $txt_price; ?></dt>
                    <dd><?php echo "Rp. $harga"; ?></dd> 
                  </dl>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <a href="javascript: history.go(-1)" class="btn btn-outline-info float-right"><?php echo $txt_back; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script language="javascript">
	document.getElementById("nl-12").classList.add("active");
</script>

<?php include "partials/footer.php"; ?>