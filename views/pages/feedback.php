<?php
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');
require_once ('views/header.php');

if(isset($_POST['feedback']))
 {
 $feedback = loadModel('feedback');
 	$data = array(
 			'fullname'=>$_POST['fullname'],
 			'email'=>$_POST['email'],
 			'phone'=>$_POST['phone'],
 			'title'=>$_POST['title'],
 			'detail'=>$_POST['detail'],
 			'created_at'=>date('y-m-d h:i:s'),
 			'updated_at'=>date('y-m-d h:i:s'),
 			'status'=>1,
 	);
 	$feedback->feedback_insert($data); ?>
<script> alert('Đã Gửi Liên Hệ Thành Công') </script>
<?php }?>

	<div id="navigation">
		<div class="container">
			<div id="responsive-nav">	
					<div class="category-nav show-on-click">
			
			</div>

			</div>
		</div>
	</div>
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Feedback	</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
		<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-6">
						<div class="billing-details">
							<p>Visit The Store?</p>
							<div class="section-title">
								<h3 class="title">Store Place</h3>
							</div>
							<iframe style="width:450px; height:300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4430.362587027646!2d106.77177364582573!3d10.84125755628939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527a70e572a51%3A0xa37b0c265f0da87a!2z4bqkbiBUxrDhu6NuZyBjb2ZmZWU!5e0!3m2!1svi!2s!4v1557977136831!5m2!1svi!2s" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				<form name="from1" action="" method="post" class="clearfix">
					<div class="col-md-6">
						<div class="billing-details">
							<p>Already a customer ? <a href="#">Login</a></p>
							<div class="section-title">
								<h3 class="title">Send feedback</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="fullname" placeholder="Your Name">
							</div>
							<div class="form-group">
								<input class="input" type="Email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="phone" placeholder="Phone">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="title" placeholder="title">
							</div>
							<div class="form-group">
								<textarea name="detail" class="input" rows="4" placeholder="Content" required></textarea>
							</div>
								<button type="submit"   name="feedback"  class="primary-btn">Send feedback</button>
						</div>
					</div>
				</form>

				</div>
			</div>
				



	<?php require_once('views/footer.php');  ?>