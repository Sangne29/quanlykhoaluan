<?php 
class Phantrang
{
    function pageCurrent()
    {
        $page=1;
        if(isset($_REQUEST['page']))
        {
            $page=$_REQUEST['page'];
        }
        return $page;
    }
    function pageFirst($limit)
    {
        $current = $this->pageCurrent();
        return ($current-1)*$limit;
    }
    function pageLink($total,$limit,$url)
    {
        $pageNumber=ceil($total/$limit);
        $pageLink='';
        for($i=1;$i<=$pageNumber;$i++)
        {
            $pageLink.='<li class="page-item">';
            $pageLink.=' <a  class="page-link" href="'.$url.'&page='.$i.'">'.$i.'</a> ';
            $pageLink.='</li>';
        }
        return $pageLink;
    }
}
?>