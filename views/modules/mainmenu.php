
<?php 
$menu = loadModel('Menu');
$listcat1 = $menu->menu_parentid(0);
$html_listmenu='';
foreach($listcat1 as $c1)
{
  $listcat2=$menu->menu_parentid($c1['id']);
  if(count($listcat2))
  {
    $html_listmenu.='<li class="dropdown default-dropdown"><a class="dropdown-toggle" href="'.$c1['link'].'" data-toggle="dropdown" aria-expanded="true">'.$c1['name'].'   <i class="fa fa-caret-down"></i></a>';
    $html_listmenu .='<ul class="custom-menu">';
     $html_listmenu.='<ul class="list-links">';
    foreach($listcat2 as $c2)
    {
     
      $html_listmenu.='<li><a href="index.php?option='.$c2['link'].'">'.$c2['name'].'</a></li>';
    }
    $html_listmenu .='</ul>';
    $html_listmenu .='</ul>';
    $html_listmenu.='</li>';
  }
  else
  {
    $html_listmenu.='<li ><a href="'.$c1['link'].'">'.$c1['name'].'</a>';
    $html_listmenu.='</li>';
  }

}
?>
				<div class="menu-nav">
					<span class="menu-header">Menu<i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<?php echo $html_listmenu; ?>
					</ul>
				</div>