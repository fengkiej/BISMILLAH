@extends('layouts.master')

@section('head')
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Custom-Stylesheet-Links -->
		<!-- Gallery-Popup-CSS --> 	<link rel="stylesheet" href="css/chocolat.css" 		type="text/css" media="all">
		<!-- Index-Page-CSS --> 	<link rel="stylesheet" href="css/styleHome.css" 	type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->

	<!-- Web-Fonts -->
		<!-- Body-Font --> <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' type='text/css'>
	<!-- //Web-Fonts -->

@section('title', 'Home')

@section('content')

	<!-- Header -->
	<div class="header" id="home">
	<div style="position: absolute; z-index:3;"><img style="margin-left:35%;margin-top:10%;width:30%;" src="images/QRIM.png"></div>
		<div class="slider-info">
			<div style="z-index: 3;margin-top: 10px" class="logo">
				<a href="#">Q-RIM</a>
			</div>
		</div>

		<div class="slider">
			<!-- Slider1 -->

			<div class="slider-1">
				<ul class="rslides" id="slider1">
					<li>
						<img src="images/bapakbapak.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/ibuibu.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/gerendong.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/ukm.jpg" alt="Hitech Info">
					</li>
					<li>
						<img src="images/ukm2.jpg" alt="Hitech Info">
					</li>
				</ul>
			</div>
			<!-- //Slider1 -->
		</div>
		<div class="clearfix"></div>

	</div>
	<!-- //Header -->



	<!-- About -->
	<div class="about" id="about">
		<div class="container">

			<h1>TENTANG KAMI</h1>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

			<div class="col-md-6 col-sm-6 about-details">
				<div class="about-image">
					<img src="images/laptop.png" alt="Hitech Info">
				</div>
				<div class="about-info">
					<p>Kami sekumpulan Mahasiswa yang punya banyak mimpi untuk membuat menjadi lebih baik. Tim kami terdiri dari 3 orang Mahasasiwa asa Yogyakarta. Cek alasan kami membuat projek ini di tombol dibawah data kemampuan kami</p>
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- Skills -->
			<div class="col-md-6 col-sm-6 skills">

				<div id="about-us" class="parallax">
					<h2>KEAHLIAN</h2>
				<div class="heading-underline">
					<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
				</div>
					<div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<p class="lead">LUCK</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="90">90%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
							<p class="lead">SKILL</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="10">10%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
							<p class="lead">POWER OF WILL</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="70">70%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<p class="lead">PLEASURE</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="50">50%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<p class="lead">REASON TO REMEMBER THE NAME</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="100">100%</div>
							</div>
						</div>
					</div>

					<!-- Tooltip -->
					<button class="btn btn-primary" data-toggle="modal" data-target="#myModal" >JELAJAHI<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>

					<div class="tooltip-content">

						<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Q-RIM INFO</h4>
									</div>
									<div class="modal-body">
										<img src="images/ukm3.jpg" alt="Q-rim Info">
										<p>Ide kami terinspirasi oleh pesatnya perkembangan media sosial di negeri ini akan tetapi para penggiat usaha masih belum memanfaatkan potensi terbesar dari perkembangan zaman ini. Setelah melakukan komunikasi dengan beberapa penggiat UKM maka kami menyimpulkan solusi terbaik untuk memecahkan masalah ini.</p>
									</div>
								</div>
							</div>
						</div>

						<script>
							$('#myModal').modal('');
						</script>

					</div>
					<!-- //Tooltip -->

				</div>

			</div>
			<!-- //Skills -->
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //About -->



	<!-- Services -->
	<div class="services" id="services">
		<div class="container">

			<h3>LAYANAN</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

			<div class="service-grids">
				<div class="col-md-4 col-sm-4 service-grid service-grid-1">
					<img src="images/service-1.png" alt="Hitech Info">
					<h4>ORGANISASI</h4>
					<p>Dapat Menghubungkan dengan mudah dengan para penggiat UKM yang menggunakan aplikasi kami. Tak lupa juga aspek sosial kami terapkan pada fitur chat yang ada</p>
				</div>
				<div class="col-md-4 col-sm-4 service-grid service-grid-2">
					<img src="images/service-2.png" alt="Hitech Info">
					<h4>CANGGIH</h4>
					<p>Tidak perlu lagi repot - repot untuk kesana kemari datang ke ATM. Hanya dengan satu tombol anda bisa mengirimkan dana kepada para UKM dan pemberi jasa</p>
				</div>
				<div class="col-md-4 col-sm-4 service-grid service-grid-3">
					<img src="images/service-3.png" alt="Hitech Info">
					<h4>JUARA</h4>
					<p>Dengan berbagai fitur yang disediakan, kemudahan dalam penggunaan, dan yang terakhir ringannya proses di dalam web kami membuat aplikasi kami berpotensi menjadi Juara</p>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Services -->

	<!-- Projects -->
	<div class="projects" id="projects">

		<h3>PROJEK TERBARU KAMI</h3>
		<div class="heading-underline">
			<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
		</div>

		<div class="gallery-items">
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-1">
				<a class="example-image-link" href="images/gallery-1.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-1.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-2">
				<a class="example-image-link" href="images/gallery-2.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-2.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-3">
				<a class="example-image-link" href="images/gallery-3.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-3.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-4">
				<a class="example-image-link" href="images/gallery-4.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-4.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-5">
				<a class="example-image-link" href="images/gallery-5.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-5.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-6">
				<a class="example-image-link" href="images/gallery-6.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-6.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-7">
				<a class="example-image-link" href="images/gallery-7.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-7.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-8">
				<a class="example-image-link" href="images/gallery-8.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-8.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-9">
				<a class="example-image-link" href="images/gallery-9.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-9.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-10">
				<a class="example-image-link" href="images/gallery-10.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-10.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-11">
				<a class="example-image-link" href="images/gallery-11.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-11.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-2 col-sm-2 gallery-item gallery-item-12">
				<a class="example-image-link" href="images/gallery-12.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/gallery-12.jpg" alt="Hitech Info">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>
	<!-- //Projects -->

	<!-- Team -->
	<div class="team" id="team">
		<div class="container">

			<h3>DIBALIK KESUKSESAN KAMI</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>
			<p class="team-p">Alasan dibalik terwujudnya projek QRIM dari kami, terdapat juga pekerja keras dengan tekad yang kuat dan motivasi yang tinggi untuk menciptakan Aplikasi yang diharapkan nantinya dapat bermanfaat bagi pengguna umum khususnya para penggiata UKM.</p>

			<div class="team-grids">			
				<div class="ch-grid">
					<div class="col-md-3 col-sm-3 team-grid team-grid1">
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h4>FENGKIE JUNIS</h4>
										<p>CEO</p>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid2">
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h4>CANDRA GCTK</h4>
										<p>LORD</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid3">
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h4>M RAIHAN W</h4>
										<p>AVATAR</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 team-grid team-grid4">
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
										<h4>M NIRWANDHA</h4>
										<p>EX-ANGGOTA</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- //Team -->

	<!-- Testimonial -->
	<div class="testimonial" id="testimonial">
		<div class="container">

			<h3>TESTIMONIALS</h3>
			<div class="heading-underline">
				<div class="h-u1"></div><div class="h-u2"></div><div class="h-u3"></div><div class="clearfix"></div>
			</div>

			<!-- Slider2 -->
			<div class="slider2">
				<ul class="rslides" id="slider2">
					<li>
						<p>Tidak perlu dipungkiri lagi bahwa kita hidup di zaman dimana teknologi sangatlah akrab dengan kehidupan kita. Hampir seluruh aspek kehidupan masyarakat tidak lepas dari dunia IT. Mulai dari bisnis, pendidikan, kesehatan,dll. IT dan Qrim selalu memiliki peran yang kuat didalamnya.</p>
						<h4>Irfan M -CEO OmahTI</h4>
					</li>
					<li>
						<p>Perjuanganku lebih mudah karena mengusir penjajah, tetapi perjuanganmu lebih sulit karena melawan bangsamu sendiri</p>
						<h4>Ir. Soekarno -Presiden Indonesia</h4>
					</li>
					<li>
						<p>sebuah mesin mampu setara dengan hasil kerja ribuan manusia. Tapi mesin belum mampu sesempurnah manusia, bahkan belum mampu menyerupai kesempurnaan mahluk hidup sederhana.</p>
						<h4>Anonnymous</h4>
					</li>
					<li>
						<p>Saya sangat meyakini bahwa setiap hal yang meningkatkan komunikasi memiliki efek yang amat besar dalam hal bagaimana orang dapat belajar satu sama lainnya, dan bagaimana mereka dapat mencapai kebebasan yang mereka inginkan</p>
						<h4>Bill Gates -Microsoft Founder</h4>
					</li>
				</ul>
			</div>
			<!-- //Slider2 -->
			
		</div>
	</div>
	<!-- //Testimonial -->



	<!-- Hitech Infosletter -->
	<div class="newsletter" id="newsletter">
		<div class="container">
			<div class="new-grids">
				<div class="col-md-6 col-sm-6 subscribe">
					<p>Subscribe to our Newsletter</p>
				</div>
				<div class="col-md-6 col-sm-6 email-form">
					<form action="#" method="post">
						<input class="email" type="email" name="Email" placeholder="Email Address" required="">
						<input type="submit" class="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Hitech Infosletter -->



	<!-- Follow -->
	<div class="follow">
		<div class="container">

			<!-- Slider3 -->
			<div class="slider3">
				<ul class="rslides" id="slider3">
					<li>
						<img src="images/follow-1.png" alt="Qrim Info">
						<p>Tetap ikuti kontak media sosial kami yang lain.</p>
						<a href="#">Follow Us : @colu_hack</a>
					</li>
					<li>
						<img src="images/follow-2.png" alt="Qrim Info">
						<p>Tetap ikuti kontak media sosial kami yang lain.</p>
						<a href="#">Follow Us : @colu_hack</a>
					</li>
					<li>
						<img src="images/follow-3.png" alt="Qrim Info">
						<p>Tetap ikuti kontak media sosial kami yang lain.</p>
						<a href="#">Follow Us : @colu_hack</a>
					</li>
					<li>
						<img src="images/follow-4.png" alt="Qrim Info">
						<p>Tetap ikuti kontak media sosial kami yang lain.</p>
						<a href="#">Follow Us : @colu_hack</a>
					</li>
					<li>
						<img src="images/follow-5.png" alt="Qrim Info">
						<p>Tetap ikuti kontak media sosial kami yang lain.</p>
						<a href="#">Follow Us : @colu_hack</a>
					</li>
				</ul>
			</div>
			<!-- //Slider3 -->
			
		</div>
	</div>
	<!-- //Follow -->



	<!-- Social -->
	<div class="social">

		<p>Follow Us On</p>

		<!-- Social-Icons -->
		<ul class="social-icons">
			<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
			<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
			<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
			<li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
			<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
		</ul>
		<!-- //Social-Icons -->

	</div>
	<!-- //Social -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>



	<!-- Custom-JavaScript-File-Links -->

		<!-- Slider-JavaScript -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				$(function () {
					$("#slider1, #slider2, #slider3").responsiveSlides({
						auto: true,
						nav: true,
						speed: 1500,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>
		<!-- //Slider-JavaScript -->

		<!-- Sliding-Menu-JavaScript -->
			<script src="js/ytmenu.js"></script>
		<!-- //Sliding-Menu-JavaScript -->

		<!-- Skills-Bar-Animation-JavaScript -->
			<script type="text/javascript" src="js/jquery.inview.min.js"></script>
			<script type="text/javascript" src="js/wow.min.js"></script>
			<script type="text/javascript" src="js/mousescroll.js"></script>
			<script type="text/javascript" src="js/main.js"></script>
		<!-- //Skills-Animation-JavaScript -->

		<!-- Pricing-Popup-Box-JavaScript -->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!-- //Pricing-Popup-Box-JavaScript -->

		<!-- Projects-Popup-Box-JavaScript -->
			<script src="js/modernizr.custom.97074.js"></script>
			<script src="js/jquery.chocolat.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.gallery-item a').Chocolat();
				});
			</script>
		<!-- //Projects-Popup-Box-JavaScript -->

		<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 100,
						easingType: 'linear'
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->

@endsection
