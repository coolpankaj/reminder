<?php
session_start();
unset($_SESSION["phpssid"]);

echo "<script>alert('Logout Successfull........');</script>";
echo "<script>window.location.href='index.php';</script>";



?>