
<?php 
$category = loadModel('category');
$listcat1 = $category->category_parentid(0);
$html_listcategory='';


foreach($listcat1 as $c1)
{
  $listcat2=$category->category_parentid($c1['id']);
  if(count($listcat2))
  {
    $html_listcategory.='<li class="dropdown side-dropdown"><a class="dropdown-toggle" href="index.php?option=product&cat='.$c1['slug'].'" data-toggle="dropdown" aria-expanded="true">'.$c1['name'].'<i class="fa fa-angle-right"></i></a>';
    $html_listcategory .='<div class="custom-menu">';
    $html_listcategory.='<ul class="list-links">';
     $html_listcategory.='<h3 class="list-links-title">Categories</h3></li>';
    foreach($listcat2 as $c2)
    {
     
      $html_listcategory.='<li><a href="index.php?option=product&cat='.$c2['slug'].'">'.$c2['name'].'</a></li>';
    }
    $html_listcategory.='</ul>';
    $html_listcategory .='</div>';
    $html_listcategory.='</li>';
  }
  else
  {
    $html_listcategory.='<li ><a href="index.php?option=product&cat='.$c1['slug'].'">'.$c1['name'].'</a>';
    $html_listcategory.='</li>';
  }

}
?>
				<!-- category nav -->
        <span class="category-header">Categories <i class="fa fa-list"></i></span>
						<ul class="category-list">
							<?php echo $html_listcategory; ?>
						</ul>



























<style type="text/css">
	
	.dropdown.side-dropdown>.custom-menu {
  border-left: 2px solid #F8694A;
  left: 100%;
  top: 0;
  width: 200px;
  -webkit-transform: translate(15px, 0px);
  -ms-transform: translate(15px, 0px);
  transform: translate(15px, 0px);
}

</style>