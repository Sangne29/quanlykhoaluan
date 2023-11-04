<?php
    $evaluation = loadModel('evaluation');
    $data = $evaluation->get_data_export();
    $fp = fopen('php://output', 'w');
    if(count($data) <= 0 ){
        set_flash('thongbao' , 'Chưa có sinh viên đăng ký đề tài');
        redirect("index.php?option=evaluation");
    } 
    if ($fp) {
        
        $headers = array();
        foreach($data[0] as $k => $v){
            array_push($headers, $k);
        }
        header("content-type:text/csv; charset=utf-8");    
        header("Content-Disposition: attachment; filename=download_evaluation.csv");  
        header("Pragma: no-cache"); 
        header("Expires: 0");
        fputs($fp, "\xEF\xBB\xBF");
        fputcsv($fp, $headers);
        for($i = 0 ; $i < count($data) ; $i++){
            fputcsv($fp, array_values($data[$i]));
        }
        
        die;
        redirect("index.php?option=evaluation");
    }

?>