<?php  
$topic = loadModel('topic');
$list=$topic->topic_list();

?>

<?php 
require_once 'views/header.php';
  ?>

<section class="clear
fix maincontent py-3">
		<div class="w-100 container " >
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">LIST OF TOPIC</strong></div>
						<div class="col-md-6 text-right">
							<?php if ($_SESSION['Access']!=1) {
								echo "Bạn k có quyền sửa";
							}else{ ?>
							<a class="btb btn-success btn-sm" href="index.php?option=topic&cat=insert"> <i class="fa fa-plus-square-o"></i> Add topic</a>
							<a class="btb btn-danger btn-sm" href="index.php?option=topic&cat=trash"><i class="fa fa-trash-o"></i> Trash</a>
						<?php } ?>
						</div> 
					</div>
				</div>
				<div  class="card-block p-3">
				<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>

					<table id="myTable" class="table table-inverse table-hover table-bordered">
						<thead>
							<tr>
								<th class="text-center">Detai</th>
								<th class="text-center"> Date Submitted</th>
								<th class="text-center">Option</th>
								<th style="width:20px;" class="text-center">ID</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>
								<?php
								 $id=$row['id']; 
								?>
							<tr>
								
								<td class="text-danger text-center"> <?php echo $row['name'];  ?></td>
								<td class="text-danger text-center">
									<?php echo $row['updated_at']  ?>
								</td>
								<td class="text-danger text-center">
										<?php if ($_SESSION['Access']!=1) {
								echo "Bạn k có quyền sửa";
							}else{ ?>
									<?php if($row['status']==1):  ?>
									<a class="btn btn-sm btn-success" href="index.php?option=topic&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-on"></i> </a>
									<?php else: ?>
										
										<a class="btn btn-sm btn-danger" href="index.php?option=topic&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-off"></i> </a>	
								<?php endif;  ?>
									<a class="btn btn-sm btn-warning" href="index.php?option=topic&cat=update&id=<?php echo $id; ?>" > <i class="fa fa-pencil-square-o"></i> </a>
									<a class="btn btn-sm btn-danger " href="index.php?option=topic&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a><?php } ?></td>
								<td class="text-danger"><?php echo $id; ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php require_once 'views/footer.php';  ?>