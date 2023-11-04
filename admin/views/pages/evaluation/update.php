<?php
$id = (int)$_REQUEST['id'];
$evaluation = loadModel("evaluation");
if(isset($_POST['update_evaluation'])){
    foreach ($_POST as $k => $v){
        $ex = explode('_' , $k);
        // echo $ex[0]." - ".$ex[1]."<br>";
        $evaluation->update($ex[0] , $v , $ex[1]);
    }
    set_flash('thongbao','Cập nhật thành công');
    redirect("index.php?option=evaluation&cat=dashboard&id=".$id);
}


?>