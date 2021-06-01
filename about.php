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

<div class="card" style="width: 18rem;">
  <img src="gambar/kk.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1>about</h1>
    </div>
</div>
<div class="row">
  <div class="col">
    <p>Berkurangnya I/O yang dibutuhkan, sehingga lalu lintas I/O menjadi rendah. 

Berkurangnya memori yang dibutuhkan, ruang tersedia semakin luas.  

Menurunnya beban I/O dan memori, maka respon menjadi meningkat. 

Menambah jumlah user yang dapat dilayani. Karena ruang memori semakin besar tersedia, maka computer dapat menerima permintaan user lebih banyak
    </p>
  </div>

    <div class="col">
      <p>Berkurangnya I/O yang dibutuhkan, sehingga lalu lintas I/O menjadi rendah. 

Berkurangnya memori yang dibutuhkan, ruang tersedia semakin luas.  

Menurunnya beban I/O dan memori, maka respon menjadi meningkat. 

Menambah jumlah user yang dapat dilayani. Karena ruang memori semakin besar tersedia, maka computer dapat menerima permintaan user lebih banyak</p>
</div>
</div>
</div>

<script language="javascript">
	document.getElementById("nl-9").classList.add("active");
</script>

<?php include "partials/footer.php"; ?>