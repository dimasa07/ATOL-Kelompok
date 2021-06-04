<?php 
//include "auth/session_check.php";

include "auth/lang_config.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title><?php echo $txt_train_scheduling; ?></title>
  </head>
  <body>
    
<?php include "partials/navbar.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="row">
			<div class="col text-center">
				<h1><?php echo $txt_train_scheduling; ?></h1>
			</div>
		</div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $txt_train_scheduling; ?>
                            <a href="schedule_add.php" class="btn btn-primary float-end"><?php echo $txt_add; ?></a>
                        </div>
                        <div class="card-body">
							<?php
							if (!empty($_GET["id_hapus"])) { 
								$query = "DELETE FROM `jadwal` WHERE id_jadwal ='".$_GET['id_hapus']."'";
								$result = mysqli_query($mysqli,$query);
							?>
                            <div class="alert alert-warning">
                                <?php echo $txt_success_delete_schedule; ?>
                            </div>
                            <?php }
							if(!empty($_GET["pesan"])){
								if($_GET["pesan"]=="sukses"){
							?>
							<div class="alert alert-success">
                                <?php echo $txt_success_add_schedule; ?>
                            </div>
							<?php }} ?>
 
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th width="10px" class="text-center">No</th>
                                            <th><?php echo $txt_train; ?></th>
                                            <th><?php echo $txt_from; ?></th>
                                            <th><?php echo $txt_to; ?></th>
                                            <th><?php echo $txt_duration; ?></th>
                                            <th><?php echo $txt_price; ?></th>
                                            <th class="text-center"><?php echo $txt_action; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$query_jadwal = mysqli_query($mysqli,"SELECT id_jadwal,nama_kereta,berangkat,waktu_berangkat,tujuan,perkiraan_tiba,TIMEDIFF(perkiraan_tiba,waktu_berangkat) AS durasi,harga FROM jadwal JOIN kereta ON jadwal.no_kereta=kereta.no_kereta");
											$row = mysqli_num_rows($query_jadwal);
											
											if($row > 0){
												$n=1;
												while ($res = mysqli_fetch_assoc($query_jadwal))
												{
													$durasi = $res['durasi'];
													$arr_durasi = explode(":",$durasi);
													echo "<tr><td>$n
														<td>".$res['nama_kereta']."
														<td>".$res['waktu_berangkat']."<br><small>".$res['berangkat']."</small>
														<td>".$res['perkiraan_tiba']."<br><small>".$res['tujuan']."</small>
														<td>$arr_durasi[0]<sub>$txt_hour</sub> $arr_durasi[1]<sub>m</sub> 
														<td>Rp. ".$res['harga']."
														<td class='text-center'>
																<a onclick=\"javascript: return confirm('$txt_sure_delete');\" href='?id_hapus=".$res['id_jadwal']."' class='btn btn-sm btn-danger'>
																	$txt_delete
																</a>";
															
													$n=$n+1;
												}
											}else {
													echo "<tr><td colspan=7> <center>$txt_no_data";
												}


										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
	document.getElementById("nl-4").classList.add("active");
</script>

<?php include "partials/footer.php"; ?>