 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><b>Transportasi Kereta</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" >
        <a id="nl-1" class="nav-link" aria-current="page" href="index.php">Home</a>|
		
		<?php
		if (isset($_SESSION['username'])){
		if($_SESSION['status']=="user"){
		?>
		<a id="nl-2" class="nav-link " aria-current="page" href="order_ticket.php"><?php echo $txt_order_ticket; ?></a>
		<a id="nl-12" class="nav-link " aria-current="page" href="history.php"><?php echo $txt_order_history; ?></a>
		<?php }else if($_SESSION['status']=="admin"){ ?>
		<a id="nl-3" class="nav-link " aria-current="page" href="train_list.php"><?php echo $txt_train_list; ?></a>
		<a id="nl-4" class="nav-link " aria-current="page" href="schedule.php"><?php echo $txt_train_scheduling; ?></a>
		<a id="nl-5" class="nav-link " aria-current="page" href="list_transaction.php"><?php echo $txt_transaction_list; ?></a>
		<?php }} ?>
		
		<?php if (!isset($_SESSION['username'])){ ?>
        <a id="nl-6" class="nav-link " aria-current="page" href="auth/login.php"><?php echo $txt_sign; ?></a>
		<?php }else{ ?>
		<a id="nl-7" class="nav-link " aria-current="page" href="auth/session_logout.php"><?php echo $txt_logout; ?></a>
		<?php } ?>
		
		<?php 
		if (!isset($_SESSION['username'])){
		?>
		<a id="nl-8" class="nav-link " aria-current="page" href="auth/proses_login.php?status=admin"><?php echo $txt_login_admin; ?></a>
		<?php } ?>
		
        <a id="nl-9" class="nav-link " aria-current="page" href="about.php"><?php echo $txt_about; ?></a>
		
		<?php if($_SESSION['lang']=="inggris"){ ?>
		<a id="nl-10" class="nav-link " aria-current="page" href="?lang=indonesia">Bahasa Indonesia</a>
		<?php }else if($_SESSION['lang']=="indonesia"){ ?>
		<a id="nl-11" class="nav-link " aria-current="page" href="?lang=inggris">English</a>
		<?php } ?>
        
      </div>
    </div>
  </div>
</nav>