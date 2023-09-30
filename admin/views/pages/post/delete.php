<?php
$id = $_REQUEST['id'];
$post = loadModel('post');
$row = $post->post_rowid($id);
//xoa hình
if(file_exists('../public/image/post/'.$row['img']))
{
unlink('../public/image/post/'.$row['img']);
}
$post->post_delete($id);
set_flash('thongbao',' xóa thành công');
redirect('index.php?option=post&cat=trash');
 ?>