<?php 
session_start();
if(!isset($_SESSION['id'])) {
	header("Location: ./opps");
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Paradise Model School | Contact us</title>
	<meta charset="UTF-8">
	<meta name="description" content="Paradise Model School website">
	<meta name="keywords" content="Paradise Model School, School">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<link rel="icon" href="img/favicon2.ico" type="image/ico" />
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="./index.html" class="site-logo">
				<img src="img/profile.png" alt="">
			</a>
			<div class="menu-switch" id="menu-canvas-close">
				<i class="icon_close"></i>
			</div>
		</div>
		<ul class="main-menu">
			<li><a href="index.html" class="active">Home</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="https://student.paradisemodelschool.com.ng">School Portal</a></li>
			<li><a href="about.html">About us</a></li>
			<li><a href="contact.html">Contact us</a></li>
		</ul>
		<div class="menu-footer">
			<div class="footer-social">
			<a target="_blank" href="https://fb.me/paradiseiyesi">Facebook</a>
			<a target="_blank" href="https://www.youtube.com/channel/UCUm7-M8dDUxIoQf9jfCU21w/">Paradise TV</a>
			<a target="_blank" href="https://Instagram.com/paradise_model_school">Instagram</a>
			<a href="./entrance">Entrance</a>
			</div>
			<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; Paradise Model School <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by: <a target="_blank" href="https://www.google.com/search?q=doteightinc&rlz=1C1CHBF_enNG876NG876&oq=doteightinc&aqs=chrome.0.69i59.2676j0j7&sourceid=chrome&ie=UTF-8">DotEightInc</a></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->
	
	<!-- Header section -->
	<header class="header-section">
		<a href="./index.html" class="site-logo">
			<img src="img/favicon2.ico" alt="">
		</a>
		<div class="menu-switch" id="menu-canvas-show">
			<i class="icon_menu"></i>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="contact-warp set-bg" data-setbg="img/ab.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="contact-info">
							<h4>Let`s Connect</h4>
							<div class="ci-item"><i class="icon_phone"></i>+234 816 6966 4313</div>
							<div class="ci-item"><i class="icon_mail"></i>Info@paradisemodelschool.com.ng</div>
						</div>
						<div class="contact-info">
							<h4>Address</h4>
							<div class="ci-item"><i class="icon_pin"></i>Iyana Iyesi, Ota,<br/> Ogun State. Nigeria.</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="contact-form">
							<br/><br/><br/>
							<label for="y-name">Your Message has been sent successfully <br/> We promise to get in touch with you as fast as we can!</label>
							
						<div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="footer-social">
			<a target="_blank" href="https://fb.me/paradiseiyesi">Facebook</a>
			<a target="_blank" href="https://www.youtube.com/channel/UCUm7-M8dDUxIoQf9jfCU21w/">Paradise TV</a>
			<a target="_blank" href="https://Instagram.com/paradise_model_school">Instagram</a>
			<a href="./entrance">Entrance</a>
		</div>
		<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; Paradise Model School <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by: <a target="_blank" href="https://www.google.com/search?q=doteightinc&rlz=1C1CHBF_enNG876NG876&oq=doteightinc&aqs=chrome.0.69i59.2676j0j7&sourceid=chrome&ie=UTF-8">DotEightInc</a></p></div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>
	<script>
  var div = document.createElement('div');
  div.className = 'fb-customerchat';
  div.setAttribute('page_id', '286732158409768');
  div.setAttribute('ref', '');
  document.body.appendChild(div);
  window.fbMessengerPlugins = window.fbMessengerPlugins || {
    init: function () {
      FB.init({
        appId            : '1678638095724206',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v3.3'
      });
    }, callable: []
  };
  window.fbAsyncInit = window.fbAsyncInit || function () {
    window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
    window.fbMessengerPlugins.init();
  };
  setTimeout(function () {
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) { return; }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  }, 0);
</script>
	</body>
</html>
<?php
unset($_SESSION['id']);
?>	