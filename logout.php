<?php
session_start();
unset($_SESSION["loginssid"]);

echo "<script>alert('Logout Successfull........');</script>";
echo "<script>window.location.href='index.php';</script>";



?>