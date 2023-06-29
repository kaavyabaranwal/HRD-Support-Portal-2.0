<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/png" />
	<title>CWC : : Login </title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/material.css" rel="stylesheet" />
	<link href="css/glyphicons.css" rel="stylesheet" />
	<link href="css/owl.carousel.min.css" rel="stylesheet" />
	<link href="css/owl.theme.default.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
</head>

<body class="login-pg">
	<header>
		<!-- Logo Section Header Start -->
		<div class="logo-sec-wraper">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-7 col-lg-6 logo-sec wow fadeInLeft">
						<a class="logo-align" href="#">
							<img src="/images/logo.png" alt="emblem">
							<div class="brand-text">
								<h4>Central Water Commission
									<span> Biodata & Training Management System</span>
									<span class="gov-txt">GOVERNMENT OF INDIA</span>
								</h4>
							</div>
						</a>
					</div>
					<div class="col-12 col-sm-12 col-md-5 col-lg-6 loginbtn-sec wow fadeInRight">
						<div class="btn-sec">
							<a href="#" class="custombtn drk-btn">GO TO CWC WEBSITE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Logo Section Header End -->
	</header>
	<!-- Login Area Start  -->
	<div class="login-area">
		<div class="container">
			<div class="row login-innerbg">
				<div class="col-12 col-sm-12 col-md-5 col-lg-4 pr-0 mob-ver-pr">
					<div class="login-form-sec">
						<h2>Login</h2>
						<div class="yellow-underline"></div>
						<form name="firstlogin" action="{{ url('/login') }}" method="POST" class="loginuser">
                            @csrf
							<div class="form-group">
								<span class="mdi mdi-account icon-in"></span>
								<input type="text" name="username" id="" class="form-control icon-inside" placeholder="User ID">

							</div>
							<div class="form-group">
								<span class="mdi mdi-lock icon-in"></span>
								<input type="text" name="password" id="" class="form-control icon-inside"
									placeholder="Password">

							</div>
							<div class="row">
								<div class="col-12 col-sm-12 col-md-7 col-lg-5">
									<div class="captchaimage">
										<div class="form-group">
											<label>Captcha</label>
											<input type="text" value="" placeholder="HrT5709KL" id="" name=""
												class="form-control">
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-5 col-lg-2">
									<div class="captchareload">
										<a href="javascript:void(0);"><span class="mdi mdi-reload"></span></a>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-5 pl-0 mob-ver-pl">
									<div class="form-group captcha-input">
										<!-- <label></label> -->
										<input type="text" value="" placeholder="Put Text Here" id="" name=""
											class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="Login" class="btn btn-primary" onclick="firstlogin.action='{{ url('/login') }}';  return true;">
								<input type="submit" name="submit" value="Register" onclick="firstlogin.action='{{ url('/register') }}';  return true;" class="btn btn-primary">
								
							</div>
						</form>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-8 pl-0 mob-ver-pl">
					<div class="login-ryt-sec">
						<div class="ryt-sec-head">
							<h3>Bio-Data & Training <span> Management System</span></h3>
							<div class="black-underline"></div>
						</div>

						<div class="ryt-sec-content">
							<p>
								A Training Management System (TMS) is a software application that helps
								organizations manage their employee training programs.
							</p>
							<p> It is designed to streamline the process of planning, delivering, and evaluating
								training activities.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Login Area End  -->
	<footer>
		<!-- Footer Bottom Section Start -->
		<div class="footer-bottom-sec">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-7 col-lg-7 copyright-sec">
						<div class="footer-copy-sec">
							<p>Copyright © 2023 - All Rights Reserved- Central Water Commission, Ministry of Jal Shakti,
								Department of Water Resources, River Development and Ganga Rejuvenation, GOI</p>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-5 col-lg-5 copyright-sec copyright-align">
						<div class="text-left">
							<p>Last updated: 10-03-2023 11:24 </p>
							<p> Site Visitors: 104016</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom Section End -->
	</footer>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap-4.2.1.js"></script>
	<script src="js/jquery.easy-ticker.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>