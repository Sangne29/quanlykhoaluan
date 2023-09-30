<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');
?>

<?php if(has_flash('thongbao')):  ?>
  <div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
<?php endif; ?>

<?php
if(isset($_POST['LOGINSS']))
{	
 $auth=loadModel('Auth');
 $username =$_POST['username'];
 $password =sha1($_POST['password']);
 if($auth->user_auth_check($username)==true)
 {

   $user = $auth->u_auth_guard($username,$password);
   if($user!=false)
   {
    $_SESSION['customer_username']=$username;
    $_SESSION['customer_id']=$user['ID'];
    $_SESSION['customer_fullname']=$user['fullname'];
    $_SESSION['customer_email']=$user['email'];
    $_SESSION['customer_phone']=$user['phone'];
    $_SESSION['customer_gender']=$user['gender'];
    $_SESSION['customer_address']=$user['address'];
    $_SESSION['customer_img']=$user['img'];
    redirect('index.php'.$_SESSION['goback']);
  }
  else
  {
    $error_password='*Mật Khẩu Không Đúng';
  }
}	
else
{
 $error_username='*Tên Đăng Nhập Không Đúng';
}
}
?>
<section class="mt_search">
  <div class="container card bg-white" style="padding:30px !important; ">
    <div class="search-content-slider">
      <form name="form1" action="" method="post" class="clearfix">
        <div class="col-md-6">
          <div class="billing-details ">
            <div class="form-group">
             <label>Tên đăng nhập:</label>
             <input value="" class="input" type="text" name="username" placeholder="Username">
             <?php
             if(isset($error_username)) {  echo "<span class='text-danger'>".$error_username."</span>";}?>
           </div>
           <div class="form-group">  
             <label>Mật khẩu:</label>
             <input value="" class="input" type="password" name="password" placeholder="Password">
             <?php if(isset($error_password)) {  echo "<span class='text-danger'>".$error_password."</span>";}?> 
           </div>
           <button type="submit"   name="LOGINSS"   style="margin-top:20px;" class="btn-blue btn-red btn-style-1 pt-2" type="submit">Đăng nhập</button>
         </div>
       </div>
     </form>
   </div>
 </div>
</section>

<?php require_once('views/footer.php');  ?>