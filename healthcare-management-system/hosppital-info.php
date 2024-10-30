<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>SHH Info - Health Service System</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'templates/main-header.php' ?>
		<?php include 'templates/sidebar.php' ?>
 
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<?php include 'templates/loading_screen.php' ?>
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title text-primary">
											<h1>SIDDAGANGA HOSPITAL MAP</h1>
										</div>
									</div>
								</div>
								<div class="card-body">
                                <iframe
                                    width="100%"
                                    height="790"
                                    style="border:0"
                                    loading="lazy"
                                    allowfullscreen
                                    referrerpolicy="no-referrer-when-downgrade"
                                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.3941587030636!2d77.11475017444208!3d13.3378761862994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb02d001075b2db%3A0x6d54197a3957f3d5!2sSiddaganga%20Hospital!5e0!3m2!1sen!2sin!4v1698662941385!5m2!1sen!2sin">
                                </iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
	</div>
	<?php include 'templates/footer.php' ?>
	<style>
		.text-primary, .text-primary a{
			color:  #4682B4 !important;
		}

		.btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:disabled{
			background:  #4682B4 !important;
			border-color:  #4682B4 !important;
		}

        .text-primary:hover, .text-primary a:hover{
			color:  #4682B4 !important;
		}
	</style>
</body>
</html>