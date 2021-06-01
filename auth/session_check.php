<?php
if (!isset($_SESSION['username']))
{
    header("location:auth/session_logout.php");
    exit;
}
?>