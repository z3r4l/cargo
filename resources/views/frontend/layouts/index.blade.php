<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>{{ $title }}</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('/frontend/images/logo/erc.jpg') }}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
		{{-- Datatables --}}
		<link href="{{ asset('/backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			

			<!-- 
			=============================================
				Theme Header One
			============================================== 
			-->
			<x-frontend.navbar/>
			<!-- /.header-one -->

			
			{{ $slot }}


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<x-frontend.footer/>
			<!-- /.theme-footer -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ asset('frontend/vendor/jquery.2.2.3.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ asset('frontend/vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- Camera Slider -->
		<script src="{{ asset('frontend/vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}"></script>
	    <script src="{{ asset('frontend/vendor/Camera-master/scripts/jquery.easing.1.3.js') }}"></script> 
	    <script src="{{ asset('/frontend/vendor/Camera-master/scripts/camera.min.js') }}"></script>
	    <!-- menu  -->
		<script src="{{ asset('/frontend/vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('/frontend/vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('/frontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script src="{{ asset('/frontend/vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('/frontend/vendor/jquery.countTo.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('/frontend/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
		{{-- Datatbales --}}
		 <!-- Vendor JS Files -->
		 <script src="{{ asset('/backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
		 <script src="{{ asset('/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		 <script src="{{ asset('/backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
		 <script src="{{ asset('/backend/assets/vendor/echarts/echarts.min.js') }}"></script>
		 <script src="{{ asset('/backend/assets/vendor/quill/quill.min.js') }}"></script>
		 <script src="{{ asset('/backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
		 <script src="{{ asset('/backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
		 <script src="{{ asset('/backend/assets/vendor/php-email-form/validate.js') }}"></script>
	   
		<!-- Validation -->
		<script type="text/javascript" src="{{ asset('/frontend/vendor/contact-form/validate.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/frontend/vendor/contact-form/jquery.form.js') }}"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>
		<script src="{{ asset('/frontend/vendor/sanzzy-map/dist/snazzy-info-window.min.js') }}"></script>
		<!-- Theme js -->
		<script src="{{ asset('/frontend/js/theme.js') }}"></script>
		<script src="{{ asset('/backend/assets/js/main.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>