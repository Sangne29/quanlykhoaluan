<?php

    if($_SESSION['Access'] == 8 && $_POST){
        $pointL = loadModel("PointL");
        $id = $_REQUEST['id'];
        foreach($_POST as $key=>$value){
            $pointL->update($key, $value , $id);
        }
        set_flash("thongbao" , "Cập nhật thành công");
        redirect("index.php?option=pointL");
    }
?>