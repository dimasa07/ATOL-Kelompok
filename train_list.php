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

    <title><?php echo $txt_train_list; ?></title>
  </head>
  <body>
    
<?php include "partials/navbar.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="row">
			<div class="col text-center">
				<h1><?php echo $txt_train_list; ?></h1>
			</div>
		</div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $txt_train_list; ?>
                            <a href="train_add.php" class="btn btn-primary float-end"><?php echo $txt_add; ?></a>
                        </div>
                        <div class="card-body">
							<?php
							if (!empty($_GET["id_hapus"])) { 
								$query = "DELETE FROM kereta WHERE no_kereta ='".$_GET['id_hapus']."'";
								$result = mysqli_query($mysqli,$query);
							?>
                            <div class="alert alert-warning">
                                <?php echo "$txt_success_delete $txt_train !"; ?>
                            </div>
                            <?php }
							if(!empty($_GET["pesan"])){
								if($_GET["pesan"]=="sukses"){
							?>
							<div class="alert alert-success">
                                <?php echo $txt_success_add_train; ?>
                            </div>
							<?php }} ?>
 
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th width="10px" class="text-center">No</th>
                                            <th>No <?php echo $txt_train; ?></th>
                                            <th><?php echo $txt_train_name; ?></th>
                                            <th class="text-center"><?php echo $txt_action; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$query_kereta = mysqli_query($mysqli,"SELECT * FROM kereta");
											$row = mysqli_num_rows($query_kereta);
											
											if($row > 0){
												$n=1;
												while ($res = mysqli_fetch_assoc($query_kereta))
												{
													echo "<tr><td>$n
														<td>".$res['No_Kereta']."
														<td>".$res['Nama_Kereta']."
														<td class='text-center'>
																<a onclick=\"javascript: return confirm('$txt_sure_delete');\" href='?id_hapus=".$res['No_Kereta']."' class='btn btn-sm btn-danger'>
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
	document.getElementById("nl-3").classList.add("active");
</script>
<?php include "partials/footer.php"; ?>