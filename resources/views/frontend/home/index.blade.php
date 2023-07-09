<x-client-layouts title="Home">
	<div>
		<!-- =============================================Theme Main Banner============================================== -->
		<div id="theme-main-banner" class="banner-one">
			<div data-src="{{ asset('/frontend/images/hero/hero3.jpg') }}">
				<div class="camera_caption">
					<div class="container">
						{{-- <p class="wow fadeInUp animated text-light">The government they survive artical of fortune</p> --}}
						<h1 class="wow fadeInUp animated text-light" data-wow-delay="0.2s">KAMI MENINGKATKAN EFISIENSI PENGIRIMAN ANDA</h1>
						<a href="/contact" class="theme-button-one wow fadeInUp animated"
							data-wow-delay="0.39s">CONTACT US</a>
					</div> <!-- /.container -->
				</div> <!-- /.camera_caption -->
			</div>
			<div data-src="{{ asset('/frontend/images/hero/hero4.jpg') }}">
				<div class="camera_caption">
					<div class="container">
						{{-- <p class="wow fadeInUp animated text-light">The government they survive artical of fortune</p> --}}
						<h1 class="wow fadeInUp animated text-light" data-wow-delay="0.2s">KAMI MENINGKATKAN EFISIENSI PENGIRIMAN ANDA
						</h1>
						<a href="/contact" class="theme-button-one wow fadeInUp animated"
							data-wow-delay="0.39s">CONTACT US</a>
					</div> <!-- /.container -->
				</div> <!-- /.camera_caption -->
			</div>
			<div data-src="{{ asset('/frontend/images/hero/hero1.jpg') }}">
				<div class="camera_caption">
					<div class="container">
						{{-- <p class="wow fadeInUp animated text-light">The government they survive artical of fortune</p> --}}
						<h1 class="wow fadeInUp animated text-light" data-wow-delay="0.2s">KAMI MENINGKATKAN EFISIENSI PENGIRIMAN ANDA
						</h1>
						<a href="/contact" class="theme-button-one wow fadeInUp animated"
							data-wow-delay="0.39s">CONTACT US</a>
					</div> <!-- /.container -->
				</div> <!-- /.camera_caption -->
			</div>
		</div>
		<!-- /#theme-main-banner -->


		<!-- 
			=============================================
				Top Feature
			============================================== 
			-->
		{{-- <div class="top-feature section-spacing">
			<div class="top-features-slide">
				<div class="item">
					<div class="main-content" style="background:#fafafa;">
						<img src="{{ asset('/frontend/images/icon/1.png') }}" alt="">
						<h4><a href="#">Consumer Insights</a></h4>
						<p>mengembangkan strategi pemasaran dan produk yang lebih efektif dan relevan bagi konsumen, meningkatkan loyalitas pelanggan, dan memenangkan persaingan di pasar.</p>
					</div> <!-- /.main-content -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="main-content" style="background:#f6f6f6;">
						<img src="{{ asset('/frontend/images/icon/2.png') }}" alt="">
						<h4><a href="#">Emerging Ideas</a></h4>
						<p>The east side to a deluxe apartment in move on up to the east side</p>
					</div> <!-- /.main-content -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="main-content" style="background:#efefef;">
						<img src="{{ asset('/frontend/images/icon/3.png') }}" alt="">
						<h4><a href="#">Thought Leadership</a></h4>
						<p>The east side to a deluxe apartment in move on up to the east side</p>
					</div> <!-- /.main-content -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="main-content" style="background:#e9e9e9;">
						<img src="{{ asset('/frontend/images/icon/4.png') }}" alt="">
						<h4><a href="#">Marketing Goals</a></h4>
						<p>The east side to a deluxe apartment in move on up to the east side</p>
					</div> <!-- /.main-content -->
				</div> <!-- /.item -->
			</div> <!-- /.top-features-slide -->
		</div>  --}}
		<!-- /.top-feature -->


		<!-- 
			=============================================
				About Company
			============================================== 
			-->
		<div class="about-compnay section-spacing mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12"><img src="{{ asset('/frontend/images/hero/hero8.jpg') }}" width="550" height="520" alt="" style="object-fit: cover; object-position: center;"></div>
					<div class="col-lg-6 col-12">
						<div class="text">
							<div class="theme-title-one">
								<h2>Tentang perusahaan</h2>
								<p>Perusahaan kami adalah sebuah perusahaan yang bergerak di bidang cargo atau pengiriman barang. 
									Kami menawarkan berbagai layanan pengiriman barang dengan berbagai jenis dan ukuran mulai dari pengiriman barang dalam negeri 
									hingga pengiriman internasional.
								</p>
								<p>Dengan pengalaman yang telah kami miliki selama bertahun-tahun di bidang pengiriman barang, kami siap memberikan layanan terbaik bagi pelanggan dengan harga yang kompetitif. Jadi, jika Anda membutuhkan 
									jasa pengiriman barang yang handal dan terpercaya, jangan ragu untuk menghubungi kami.
								</p>
							</div> <!-- /.theme-title-one -->
							<ul class="mission-goal clearfix">
								<li>
									<i class="icon flaticon-star"></i>
									<h4>Visi</h4>
								</li>
								<li>
									<i class="icon flaticon-medal"></i>
									<h4>Misi</h4>
								</li>
								<li>
									<i class="icon flaticon-target"></i>
									<h4>Goals</h4>
								</li>
							</ul> <!-- /.mission-goal -->
						</div> <!-- /.text -->
					</div> <!-- /.col- -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.about-compnay -->


		<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
		<div class="feature-banner section-spacing">
			<div class="opacity">
				<div class="container">
					<h2>Kami menyediakan layanan berkualitas tinggi & solusi inovatif untuk pertumbuhan yang dapat diandalkan</h2>
				</div> <!-- /.container -->
			</div> <!-- /.opacity -->
		</div> <!-- /.feature-banner -->


		<!--
			=====================================================
				Latest News
			=====================================================
			-->
		<div class="our-blog latest-news section-spacing">
			<div class="container">
				<div class="theme-title-one">
					<h2>Berita Terbaru</h2>
					<p></p>
				</div> <!-- /.theme-title-one -->
				<div class="wrapper">
					<div class="clearfix">
						<div class="latest-news-slider">
							@foreach ($posts as $post)
								<div class="item">
									<div class="single-blog">
										<div class="image-box">
											<img src="{{ url('storage/post/'. $post->image) }}" height="260" width="370" alt="" style="object-fit: cover; object-position: center;">
											<div class="overlay"><a href="/newst-detail/{{ $post->slug }}}" class="date">{{ $post->created_at->diffForHumans() }}</a></div>
										</div> <!-- /.image-box -->
										<div class="post-meta">
											<h5 class="title"><a href="/newst-detail/{{ $post->slug }}}">{{ Str::limit($post->title,60) }}</a></h5>
											<a href="/newst-detail/{{ $post->slug }}}" class="read-more">READ MORE</a>
										</div> <!-- /.post-meta -->
									</div> <!-- /.single-blog -->
								</div> <!-- /.col- -->
							@endforeach
						</div> <!-- /.latest-news-slider -->
					</div> <!-- /.row -->
				</div> <!-- /.wrapper -->
			</div> <!-- /.container -->
		</div> <!-- /.our-blog -->



<!--
			=====================================================
				Why We Best
			=====================================================
			-->
			<div class="why-we-best">
				<div class="overlay">
					<div class="container">
						<div class="theme-title-one">
							<h2>KAMI SELALU MEMBERIKAN YANG TERBAIK</h2>
							{{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
						</div> <!-- /.theme-title-one -->

						<div class="wrapper row no-gutters">
							<div class="col-lg-6 col-12 order-lg-last"><div class="img-box"></div></div>
							<div class="col-lg-6 col-12 order-lg-first">
								<ul class="best-list-item">
									<li>
										<i class="icon flaticon-puzzle"></i>
										<h5><a href="#">Best Strategy</a></h5>
										<p>Temukan strategi terbaik untuk sukses Anda bersama Best Strategy - mitra terpercaya Anda.</p>
									</li>
									<li>
										<i class="icon flaticon-presentation"></i>
										<h5><a href="#">High-Quality Services</a></h5>
										<p>Rasakan keunggulan dengan layanan berkualitas tinggi kami - memberikan solusi yang melebihi harapan.</p>
									</li>
									<li>
										<i class="icon flaticon-people"></i>
										<h5><a href="#">Friendly Support</a></h5>
										<p>Temukan dukungan yang ramah dan terpercaya dengan layanan Friendly Support kami!</p>
									</li>
								</ul>
							</div> <!-- /.col- -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.why-we-best -->



		<!--
			=====================================================
				Our Team
			=====================================================
			-->
		<div class="our-team section-spacing">
			<div class="container">
				<div class="theme-title-one">
					<h2>STRUKTUR TEAM</h2>
					<p>Sebuah kisah tentang perjalanan yang menentukan yang dimulai dari pelabuhan tropis di atas kapal kecil ini hingga hari ini masih ada
					</p>
				</div> <!-- /.theme-title-one -->
				<div class="wrapper">
					<div class="row">
						@foreach ($strukturs as $item)
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="team-member">
								<div class="image-box">
									<img src="{{ url('storage/struktur/'. $item->image) }}" height="286" width="270" alt="" style="object-fit: cover; object-position: center;">
									<div class="overlay">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
												</li>
											</ul>
											{{-- <p>The government they survive as soldiers of fortune.</p> --}}
										</div> <!-- /.hover-content -->
									</div> <!-- /.overlay -->
								</div> <!-- /.image-box -->
								<div class="text">
									<h6>{{ $item->name }}</h6>
									<span>{{ $item->jabatan }}</span>
								</div> <!-- /.text -->
							</div> <!-- /.team-member -->
						</div> <!-- /.col- -->
						@endforeach
					</div> <!-- /.row -->
				</div> <!-- /.wrapper -->
			</div> <!-- /.container -->
		</div> <!-- /.our-team -->


		<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
		<div class="theme-counter section-spacing">
			<div class="container">
				<div class="bg">
					<h6>Beberapa fakta menyenangkan tentang pelayanan kami</h6>
					{{-- <h2>Beberapa fakta menyenangkan tentang pelayanan kami</h2> --}}

					<div class="cunter-wrapper">
						<div class="row">
							<div class="col-md-3 col-6">
								<div class="single-counter-box">
									<div class="number"><span class="timer" data-from="0" data-to="30" data-speed="1200"
											data-refresh-interval="5">0</span>+</div>
									<p>Tahun Keunggulan</p>
								</div> <!-- /.single-counter-box -->
							</div> <!-- /.col- -->
							<div class="col-md-3 col-6">
								<div class="single-counter-box">
									<div class="number"><span class="timer" data-from="0" data-to="100"
											data-speed="1200" data-refresh-interval="5">0</span>%</div>
									<p>Kepuasan Klien</p>
								</div> <!-- /.single-counter-box -->
							</div> <!-- /.col- -->
							<div class="col-md-3 col-6">
								<div class="single-counter-box">
									<div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200"
											data-refresh-interval="5">0</span>k</div>
									<p>Kasus Selesai</p>
								</div> <!-- /.single-counter-box -->
							</div> <!-- /.col- -->
							<div class="col-md-3 col-6">
								<div class="single-counter-box">
									<div class="number"><span class="timer" data-from="0" data-to="24" data-speed="1200"
											data-refresh-interval="5">0</span></div>
									<p>Konsultan</p>
								</div> <!-- /.single-counter-box -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.cunter-wrapper -->
					{{-- <a href="#" class="theme-button-one">VIEW CASE STUDIES</a> --}}
				</div> <!-- /.bg -->
			</div> <!-- /.container -->
		</div> <!-- /.theme-counter -->


		

		<!--
			=====================================================
				Faq Section
			=====================================================
			-->
		<div class="faq-section">
			<div class="overlay">
				<div class="container">
					<div class="theme-title-one">
						<h2>5 hal yang perlu Anda perhatikan saat melakukan pengiriman kontainer</h2>
						<p>Anda dapat mengikuti panduan ini sebelum mengirimkan barang dengan kami.</p>
					</div> <!-- /.theme-title-one -->

					<div class="wrapper row no-gutters">
						<div class="col-xl-6 col-lg-7 order-last">
							<div class="faq-content">
								<div class="accordion-one">
									<div class="panel-group theme-accordion" id="accordion">
										<div class="panel">
											<div class="panel-heading">
												<h6 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion"
														href="#collapse1">
														1. Pilih layanan pengiriman yang Anda perlukan</a>
												</h6>
											</div>
											<div id="collapse1" class="panel-collapse collapse">
												<div class="panel-body">
													<p>
														Pilih Layanan pengiriman yang paling tepat untuk kebutuhan Anda.
														SPIL menyediakan dua jenis layanan yaitu:
														<br>
														* Shipping – apabila kebutuhan pengiriman Anda adalah pengiriman dari port asal ke port tujuan.
														<br>
														* Logistic – apabila Anda membutuhkan layanan pick up atau dooring atau keduanya.
													</p>
												</div>
											</div>
										</div> <!-- /panel 1 -->
										<div class="panel">
											<div class="panel-heading ">
												<h6 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion"
														href="#collapse2">
														2. Rencanakan pengiriman dan pastikan barang dapat dikirim </a>
												</h6>
											</div>
											<div id="collapse2" class="panel-collapse collapse show">
												<div class="panel-body">
													<p>Rencanakan pengiriman berdasarkan komoditi yang akan dikirimkan dengan menggunakan container.</p>
												</div>
											</div>
										</div> <!-- /panel 2 -->
										<div class="panel">
											<div class="panel-heading">
												<h6 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion"
														href="#collapse3">
														3. Pastikan memiliki kontrak harga atau cek harga instan via mySPIL</a>
												</h6>
											</div>
											<div id="collapse3" class="panel-collapse collapse">
												<div class="panel-body">
													<p>
														Pastikan Anda telah mendapatkan harga yang telah disepakati dengan sales kami atau Anda dapat meminta harga melalui aplikasi mySPIL.
													</p>
												</div>
											</div>
										</div> <!-- /panel 3 -->
										<div class="panel">
											<div class="panel-heading">
												<h6 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion"
														href="#collapse4">
														4. Lakukan booking dan pembayaran untuk layanan yang dipilih</a>
												</h6>
											</div>
											<div id="collapse4" class="panel-collapse collapse">
												<div class="panel-body">
													<p>
														Untuk proses selanjutnya, ketika Anda sudah memastikan jadwal dan tipe container yang akan digunakan, Anda dapat melakukan booking via aplikasi mySPIL.
													</p>
												</div>
											</div>
										</div> <!-- /panel 4 -->
										<div class="panel">
											<div class="panel-heading">
												<h6 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion"
														href="#collapse5">
														5. Barang dapat diambil di pelabuhan tujuan atau diantar</a>
												</h6>
											</div>
											<div id="collapse5" class="panel-collapse collapse">
												<div class="panel-body">
													<p>Ketika muatan sudah sampai di pelabuhan tujuan, Penerima (consignee) dapat menebus DO terlebih dahulu sebelum dapat mengambil muatan.

														Untuk layanan logistic, apabila pada saat booking, dipilih layanan door to door, maka team SPIL akan mengatur pengiriman muatan sampai ke pintu penerima.
													</p>
												</div>
											</div>
										</div> <!-- /panel 5 -->
									</div> <!-- end #accordion -->
								</div> <!-- End of .accordion-one -->
							</div> <!-- /.faq-content -->
						</div> <!-- /.col- -->
						<div class="col-xl-6 col-lg-5 order-first">
							<div class="img-box">
								{{-- <a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amshowinfo=0" class="play"><i class="fa fa-play" aria-hidden="true"></i></a> --}}
							</div>
						</div>
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.overlay -->
		</div> <!-- /.faq-section -->



		<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
		<div class="partner-section bg-color">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-12">
						<h6>PARTNERS <br>KAMI</h6>
					</div>
					<div class="col-md-9 col-sm-8 col-12">
						<div class="partner-slider">
							@foreach ( $partnership as $item)
							<div class="item"><img src="{{ url('storage/partnership/' . $item->logo) }}" width="105" height="65" alt="" style="object-fit: cover; object-position: center;"></div>
							@endforeach
							<div class="item"><img src="{{ asset('/frontend/images/logo/p-2.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('/frontend/images/logo/p-3.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('/frontend/images/logo/p-4.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('/frontend/images/logo/p-5.png') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.partner-section -->
	</div>
</x-client-layouts>