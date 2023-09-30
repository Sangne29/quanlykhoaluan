<?php  
$product = loadModel('product');
$category= loadModel('category');
$list=$product->product_list();
$lists=$product->product_list1();
?>

<?php 
require_once 'views/header.php';
  ?>

<section class="clear
fix maincontent py-3">
		<div class="w-100 container-fluid " >
			<div class="row">
				<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">THỐNG KÊ SẢN PHẨM</strong></div>
						<div class="col-md-6 text-right">
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
								<th style="width:90px;height:10px;">Image</th>
						
								<th class="text-center">Name Product</th>
								<th class="text-center">Prosuct type</th>
								<th class="text-center" style="width:160px;"> Còn Lại</th>
							<th class="text-center">Đã bán</th>
								<th style="width:20px;" class="text-center">ID</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>
								<?php
								 $id=$row['id']; 
								 $category_name=$category->category_name($row['catid']);
								 $P_conlai = 0;
								 $P_conlai = $row['numberReceipt']-$row['number'];
								?>
							<tr>
								<td><img class="img-fluid" src="../public/img/<?php echo $row['img'] ?>" alt=""></td>
								<td class="text-center"><?php echo $row['name']  ?></td>
								<td><?php echo $category_name;  ?></td>
								<td class="font-weight-bold"> <?php echo $row['number']  ?></td>
								<td class="font-weight-bold"><?php echo $P_conlai  ?></td>
								<td class="text-danger"><?php echo $id; ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			</div>


			<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">BÁN CHẠY NHẤT</strong></div>
						<div class="col-md-6 text-right">
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
								<th style="width:90px;height:10px;">Image</th>
						
								<th class="text-center">Name Product</th>
							<th class="text-center">Đã bán</th>
								<th style="width:20px;" class="text-center">ID</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($lists as $row):?>
								<?php
								 $id=$row['id']; 
								 $category_name=$category->category_name($row['catid']);
								 $P_conlai = 0;
								 $P_conlai = $row['numberReceipt']-$row['number'];
								?>
							<tr>
								<td><img class="img-fluid" src="../public/img/<?php echo $row['img'] ?>" alt=""></td>
								<td class="text-center"><?php echo $row['name']  ?></td>
							
								<td class="font-weight-bold"><?php echo $P_conlai  ?></td>
								<td class="text-danger"><?php echo $id; ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
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