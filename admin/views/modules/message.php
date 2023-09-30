<?php if($_SESSION['message']) ?>
<?php 
$tb = get_flash('message')
  ?>
  <div class=" alert alert-danger"> Thông báo lỗi
  </div>

  <?php endif; ?>