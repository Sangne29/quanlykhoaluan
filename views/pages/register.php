<?php
ob_start();
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');
require_once ('views/header.php');
?>
<link type="text/css" rel="stylesheet" href="public/css/login.css">
<?php require_once('views/header.php');  ?>
	<div id="navigation">
		<div class="container">
			<div id="responsive-nav">	
					<div class="category-nav show-on-click">
				<?php require_once('views/modules/category.php');  ?>
			</div>
<?php require_once('views/modules/mainmenu.php');  ?>
			</div>
		</div>
	</div>
<?php
$user=loadModel('user');

if(isset($_POST['REGISTERRR']))
{
	$error='';
	if($user->user_exits_username($_POST['username'])==FALSE)
	{ 
		$error='<div class="alert alert-danger"> Username available </div>';
    echo $error;
	 }
	if($_POST['password1']!=$_POST['password2'])
	{ 
		$error='<div class="alert alert-danger"> Password incorrect </div>';
     echo $error;
 }
if($error=='')
{
	$mydata=array(
		'username'=>$_POST['username'],
		'fullname'=>$_POST['userfullname'],
		'password'=>sha1($_POST['password1']),
		'email'=>$_POST['email'],
		'phone'=>$_POST['phone'],
		'gender'=>$_POST['gender'],
		'img'=>null,
		'access'=>0,
		'created_at'=>date('y-m-d h:i:s'),
		'status'=>1,	
	);
	$user->user_insert($mydata);
	//redirect('login.php');
set_flash('thongbao',' Đăng Ký Thành Công');
redirect('index.php?option=login');

}
}
 ?>
			<div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="billing-details">
              <div class="section-title">
                <h3 class="title">LOGIN WITH SOCAL</h3>
              </div>
                  <button class="loginBtn loginBtn--facebook">
          Login with Facebook
        </button>
        </br>
        <button class="loginBtn loginBtn--google">
         Login with Google
        </button><br>
        <button class="loginBtn loginBtn--zalo">
          Login with Zalo
        </button>
            </div>
          </div>
      <form name="from1" action="" method="post" class="clearfix">
          <div class="col-md-6">
            <div class="billing-details ">
              <div class="section-title">
                <h3 class="title">REGISTER</h3>
              </div>
              <div class="form-group">
                <input class="input" type="text" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input class="input" type="password" name="password1" placeholder="Password ">
              </div>
              <div class="form-group">
                <input class="input" type="password" name="password2" placeholder="Repeat Password">
              </div>
              <div class="row">
                <div class="col-md-4">
                    <select class="date_chose input w-100" name="gender"><option selected="selected" value="">Gender</option>
              <option value="0">Male</option>
              <option value="1">Female</option>
            </select>
                </div>
                 <div class="col-md-8">
                  <div class="form-group">
                    <input class="input" type="password2" name="userfullname" placeholder="Full Name">
                    </div>
                 </div>
              </div>
               <div class="form-group">
                    <input class="input" type="email" name="email" placeholder="Email">
                    </div> <div class="form-group">
                    <input class="input" type="number" name="phone" placeholder="Phone Number">
                    </div>
                <button type="submit"   name="REGISTERRR"  class="primary-btn">&nbsp;&nbsp;Register&nbsp;&nbsp;</button>
            </div>
          </div>
        </form>
</div>
</div>
<div class="clearfix"></div>

<div class="footer1"></div>
<?php require_once('views/footer.php'); ?>
<style type="text/css">
    
    .login_other1{
    height:185px;
    width: 60%;
    padding-left: 30px;
}

/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
  width: 204px;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}

/* zalo */
.loginBtn--zalo {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #6666FF;
  width: 204px;
}
.loginBtn--zalo:before {
  border-right: #6666FF 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--zalo:hover,
.loginBtn--zalo:focus {
  background: #6666FF;
}
</style>




	<?php require_once('views/footer.php');  ?>
  <?php ob_end_flush(); ?>