<?php 
$slider=loadModel('slider');
$list=$slider->slider_list();
?>
	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<?php foreach($list as $li ): ?>
					<div class="banner banner-1">
						<img src="public/img/slider/<?php echo $li['img']; ?>" alt="">
						<div class="banner-caption text-center">
							<h1 class="white-color"><?php echo $li['sale']; ?></h1>
							<h3 class="white-color font-weak"><?php echo $li['saletitel']; ?></h3>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

				<?php endforeach; ?>
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->