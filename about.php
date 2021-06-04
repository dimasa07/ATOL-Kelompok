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
    <title>About</title>
  </head>
  <body>
    
	<?php include "partials/navbar.php"; ?>


<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1><?php echo $txt_about; ?></h1>
    </div>
</div>
<div class="row">
  <div class="col">
	<h2>APLIKASI TEKNOLOGI ONLINE</h2>
	<hr>
	<h3><pre>Kelas     : IF-8</pre></h3>
	<h3><pre>Kelompok  : EXIT</pre></h3>
   
  </div>

    <div class="col">
      <h2>NAMA ANGGOTA</h2>
	<hr>
	<font size="4">
	<pre>Tedi Gios M.      (10119296)</pre>
	<pre>Zulpani R.        (10119302)</pre>
	<pre>Ivan Aprilman H.  (10119305)</pre>
	<pre>Dimas Agung       (10119306)</pre>
	<pre>Ihsan Taofik      (10119315)</pre>
	</font>
</div>
</div>
</div>

<script language="javascript">
	document.getElementById("nl-9").classList.add("active");
</script>

<?php include "partials/footer.php"; ?>