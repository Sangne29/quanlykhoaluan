<?php require_once 'views/header.php'; ?>
<body style="background-color:#F2F2F2;">
<?php require_once 'views/Mainmenu.php'; ?>
    <section>
        <div class="main-content container-fluid">
            <div class="row">
<?php require_once 'views/LeftMenu.php'; ?>
<style>
    .ul-left-menu > li > a {
        color: #2E2E2E;
    }
</style>  <div class="col-md-10 ">
                    <div class="p-4">
                        
            <?php if(has_flash('thongbao')):  ?>
              <div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
            <?php endif; ?>
            <?php if(has_flash('thongbaoloi')):  ?>
              <div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
            <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Load Facebook SDK for JavaScript -->
</body>