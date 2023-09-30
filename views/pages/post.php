<?php
$post = loadModel('post');
$list1 = $post->post_list1();
 require_once('views/header.php');  ?>

	<div id="navigation">
		<div class="container">
			<div id="responsive-nav">	
					<div class="category-nav show-on-click">
				<?php require_once('views/modules/category.php');  ?>
			</div>
<?php require_once('views/modules/mainmenu.php');  ?>
			</div>
		</div>
	</div>
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Post</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">All POST</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th style="width:15%;">Post Image</th>
										<th style="width:60%;">Post Title</th>
										<th class="text-center">Create Update</th>		
									</tr>
								</thead>
								<tbody>
									 <?php foreach($list1 as $r): ?>
									<tr>
										<td ><img style="width: 150px;" src="public/img/post/<?php echo $r['img']?>" alt=""></td>
										<td class="details">
											<a href="index.php?option=post&id=<?php  echo $r['slug']; ?>"><?php echo $r['title']?></a>
											<ul >
												<li><span><?php echo substr($r['detail'],0,351); ?></span></li>
												
											</ul>
										</td>
										<td class="qty text-center"><p class="" type="number" ></p>2019-32-45 </td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							
						</div>

					</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
<section>
	
</section>
<?php require_once('views/footer.php');  ?>