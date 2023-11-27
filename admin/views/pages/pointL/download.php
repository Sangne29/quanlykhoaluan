<?php 
    if($_SESSION['Access'] == 8){
        $pointL = loadModel('PointL');
        $data = $pointL->get_data_export();
        // print_r($data);
        $fp = fopen('php://output', 'w');
        if(count($data) <= 0 ){
            set_flash('thongbao' , 'Chưa có sinh viên đăng ký đề tài');
            redirect("index.php?option=pointL");
        } 
        if ($fp) {
            $headers = array();
            foreach($data[0] as $k => $v){
                array_push($headers, $k);
            }
            header("Content-Type: application/vnd.ms-excel; charset=utf-8");    
            header("Content-Disposition: attachment; filename=download_pointL.xlsx");  
            header("Pragma: no-cache"); 
            header("Expires: 0");
            // fputs($fp, "\xEF\xBB\xBF");
            fputcsv($fp, $headers);
            for($i = 0 ; $i < count($data) ; $i++){
                fputcsv($fp, array_values($data[$i]));
            }
            
            die;
            redirect("index.php?option=pointL");
        }
    }

?>