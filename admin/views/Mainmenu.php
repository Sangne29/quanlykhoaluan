   <?php

   $id1= $_SESSION['user_id'];
   $name = $_SESSION['user_admin'];
   ?>

   <section class="container-fluid ">
    <div class="row">
        <!-- Image and text -->
        <nav class="navbar navbar-light py-0  w-100 border-bottom bg-light">
            <div class="p-1">  <img  width="120" src="https://lms.iuh.edu.vn/pluginfile.php/1/theme_academi/logo/1676936055/Logo_IUH.png" alt="Alternate Text" /></div>
            <ul class="list-unstyled m-0">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_fullname'] ; ?>
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu" style="position: absolute;top: 40px;left: -90px;" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="logout.php"> Đăng xuất</a>
                    <?php $id= $_SESSION['user_id']; ?>
                    <a class="dropdown-item" href="index.php?option=user&cat=update&id=<?php echo $id; ?>">Thông tin</a>
                </div>
            </li>
        </ul>
    </nav>
</div>
</section>

