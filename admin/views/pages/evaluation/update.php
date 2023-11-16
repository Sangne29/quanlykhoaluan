<?php
$id = (int)$_REQUEST['id'];
$evaluation = loadModel("evaluation");
if(isset($_POST['update-evaluation'])){
    foreach ($_POST as $k => $v){
        if(str_contains($k , 'Point')){
            $ex = explode('_' , $k);
            // echo $ex[0]." - ".$ex[1]."<br>";
            $evaluation->updatePoint($ex[0] , $v , $ex[1]);
            $evaluation->updateBase($ex[1]);
        }
    }
    set_flash('thongbao',$ex[0]." - ".$ex[1]."<br>");
    set_flash('thongbao','Cập nhật thành công');
    redirect("index.php?option=evaluation&cat=dashboard&id=".$id);
}
echo $id;

?>