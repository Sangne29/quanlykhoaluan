<?php
require_once ('../config.php');
//session_start();
require_once('../system/core.php');
if(!isset($_SESSION['user_admin']))
{

	redirect('login.php');
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once('../system/Database.php');
require_once('../system/load.php');
loadComponent(false);
?>
 	