<?php
session_start();
$_SESSION['fullname'] = array();
session_destroy();
header('Location: login.php');
exit();
?>