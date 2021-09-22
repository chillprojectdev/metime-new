<!DOCTYPE html>
<!-- 
Template Name: Scrooge - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Support: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Metime-Admin I Login</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Toggles CSS -->
		<link href="assets/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
		<link href="assets/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="assets/scrooge/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		
		<!-- HK Wrapper -->
		<div class="hk-wrapper">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-35 w-lg-55 w-sm-75 w-100">
									<a class="font-24 font-weight-500 auth-brand text-center d-block mb-20" href="#">
									Metime
									</a>
									<form method="POST" action="{{ route('login') }}">
                                        @csrf
										<h1 class="display-5 text-center mb-10">Admin Page</h1>
										<p class="text-center mb-30">Sign in to your account</p> 
										<div class="form-group">
											<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
										</div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
										<div class="form-group">
											<div class="input-group">
												<input id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password">
												<div class="input-group-append">
													<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
												</div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
											</div>
										</div>
                                        <input type="hidden" id="auth_type" name="auth_type" value="admin">
										<button class="btn btn-danger btn-block" type="submit">Login</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /HK Wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="assets/vendors/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
		<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="assets/scrooge/dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="assets/scrooge/dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- FeatherIcons JavaScript -->
		<script src="assets/scrooge/dist/js/feather.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="assets/scrooge/dist/js/init.js"></script>
	</body>
</html>