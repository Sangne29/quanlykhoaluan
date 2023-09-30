<?php
session_start();
unset($_SESSION['customer_username']);
unset($_SESSION['customer_id']);
unset($_SESSION['customer_fullname']);
unset($_SESSION['customer_img']);
//session_destroy();
require_once ('system/core.php');
redirect('index.php?option=login');
 ?>
