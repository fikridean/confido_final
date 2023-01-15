@extends('layouts.main')

@section('front-end')
				<x-front-navbar></x-front-navbar>

				<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
								<div class="overlay"></div>
								<div class="container">
												<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
																<div class="col-md-7 ftco-animate">
																				<h1 class="mb-4">Selamat Datang di Confido Tour And Travel</h1>
																				<p class="caps">Aplikasi berbasis website untuk jasa pemesanan tiket pesawat</p>
																				<a href="/orders/create" class="btn btn-primary">Pesan Sekarang!</a>
																</div>
												</div>
								</div>
				</div>

				<section class="ftco-section">
								<div class="container">
												<div class="row justify-content-center pb-4">
																<div class="col-md-12 heading-section text-center ftco-animate">
																				<span class="subheading">Destination</span>
																				<h2 class="mb-4">Top Destination</h2>
																</div>
												</div>
												<div class="row">
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/destination-1.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Keraton Yogyakarta</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Jl. Rotowijayan Blok No. 1,
																																Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
																								</div>
																				</div>
																</div>
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/destination-2.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Tangkuban Perahu</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Cikahuripan, Kec. Lembang, Kabupaten
																																Bandung Barat, Jawa Barat</p>

																								</div>
																				</div>
																</div>
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/destination-3.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Monumen Nasional</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Gambir, Kecamatan Gambir, Kota
																																Jakarta Pusat, Daerah Khusus Ibukota Jakarta</p>

																								</div>
																				</div>
																</div>

																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/destination-4.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Lawang Sewu</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Jl. Pemuda, Sekayu, Kec. Semarang
																																Tengah, Kota Semarang, Jawa Tengah</p>

																								</div>
																				</div>
																</div>
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/destination-5.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Tanah Lot</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Beraban, Kec. Kediri, Kabupaten
																																Tabanan, Bali</p>

																								</div>
																				</div>
																</div>
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/destination-6.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Museum Angkut</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Jl. Terusan Sultan Agung No.2,
																																Ngaglik, Kec. Batu, Kota Batu, Jawa Timur</p>

																								</div>
																				</div>
																</div>
												</div>
								</div>
				</section>

				<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
								<div class="overlay"></div>
								<div class="container">
												<div class="row justify-content-center pb-4">
																<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
																				<span class="subheading">Testimonial</span>
																				<h2 class="mb-4">Tourist Feedback</h2>
																</div>
												</div>
												<div class="row ftco-animate">
																<div class="col-md-12">
																				<div class="carousel-testimony owl-carousel">
																								<div class="item">
																												<div class="testimony-wrap py-4">
																																<div class="text">
																																				<p class="star">
																																								<span class="fa fa-star checked"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																				</p>
																																				<p class="mb-4">Aplikasi bagus. Pesan tiket untuk traveling saya dan keluarga jadi
																																								gampang. Terima kasih Confido 🥰
																																				</p>
																																				<div class="d-flex align-items-center">
																																								<div class="user-img" style="background-image: url(images/testimoni_1.jpg)"></div>
																																								<div class="pl-3">
																																												<p class="name">Muhammad Zaidan</p>
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="item">
																												<div class="testimony-wrap py-4">
																																<div class="text">
																																				<p class="star">
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																				</p>
																																				<p class="mb-4">Keren nih aplikasinya untuk orang2 yang to the point kayak saya. Gk
																																								perlu ribet ngeliatin hal2 gk penting.</p>
																																				<div class="d-flex align-items-center">
																																								<div class="user-img" style="background-image: url(images/testimoni_2.jpg)"></div>
																																								<div class="pl-3">
																																												<p class="name">Rizki Nugraha</p>
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="item">
																												<div class="testimony-wrap py-4">
																																<div class="text">
																																				<p class="star">
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																				</p>
																																				<p class="mb-4">Aplikasinya cepat dan mudah digunakan. Tidak sulit untuk dimengerti.
																																								Saya rekomendasikan para pencari tiket pesawat untuk menggunakan aplikasi Confido
																																								ini.</p>
																																				<div class="d-flex align-items-center">
																																								<div class="user-img" style="background-image: url(images/testimoni_3.jpg)"></div>
																																								<div class="pl-3">
																																												<p class="name">Burhan Sudrajat</p>
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="item">
																												<div class="testimony-wrap py-4">
																																<div class="text">
																																				<p class="star">
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																				</p>
																																				<p class="mb-4">My friend recommended me this app because I was traveling in
																																								Indonesia. It's a good app indeed. But one thing I have to say about it is the lack
																																								of language accomodation. I am a foreigner and needing to sometimes look at google
																																								translate or ask my friend out for help in order to understand what was written is
																																								quite tedious. But fortunately, the app being linear and easy to use makes learning
																																								and remembering how to use it very easy. Still, I hope it add the option to choose
																																								English language in the future. Thank you Confido 👍
																																				</p>
																																				<div class="d-flex align-items-center">
																																								<div class="user-img" style="background-image: url(images/testimoni_5.jpg)"></div>
																																								<div class="pl-3">
																																												<p class="name">Dusan Bogdanovic</p>
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="item">
																												<div class="testimony-wrap py-4">
																																<div class="text">
																																				<p class="star">
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																								<span class="fa fa-star"></span>
																																				</p>
																																				<p class="mb-4">Aplikasinya bagus banget. Gampang digunakan dan tampilannya simpel.
																																								Customer servicenya juga bagus.</p>
																																				<div class="d-flex align-items-center">
																																								<div class="user-img" style="background-image: url(images/testimoni_4.jpg)"></div>
																																								<div class="pl-3">
																																												<p class="name">Fitri Masruroh</p>
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</section>

				<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
								<div class="container">
												<div class="row mb-5">
																<div class="col-md pt-5">
																				<div class="ftco-footer-widget pt-md-5 mb-4">
																								<h2 class="ftco-heading-2">About</h2>
																								<p>Confido berasal dari bahasa Latin, Confido yang berarti kepercayaan. Ini menandakan website kami
																												terpercaya dan bisa diandalkan. Sesuai dengan kebutuhan pengguna kami.</p>
																								<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
																												<li class="ftco-animate"><a href="https://twitter.com/ConfidoTM" target="_blank"><span
																																								class="fa fa-twitter"></span></a></li>
																												<li class="ftco-animate"><a href="https://www.instagram.com/confidotm/?hl=id"
																																				target="_blank"><span class="fa fa-facebook"></span></a></li>
																												<li class="ftco-animate"><a href="#" target="_blank"><span
																																								class="fa fa-instagram"></span></a></li>
																								</ul>
																				</div>
																</div>
																<div class="col-md pt-5 border-left">
																				<div class="ftco-footer-widget pt-md-5 mb-4">
																								<h2 class="ftco-heading-2">Maskapai</h2>
																								<ul class="list-unstyled">
																												<li><a class="py-2 d-block">Garuda Indonesia</a></li>
																												<li><a class="py-2 d-block">Citilink</a></li>
																												<li><a class="py-2 d-block">Batik Air</a></li>
																												<li><a class="py-2 d-block">Lion Air</a></li>
																												<li><a class="py-2 d-block">Sriwijaya Air</a></li>
																												<li><a class="py-2 d-block">Air Asia</a></li>
																								</ul>
																				</div>
																</div>
																<div class="col-md pt-5 border-left">
																				<div class="ftco-footer-widget pt-md-5 mb-4">
																								<h2 class="ftco-heading-2">Have a Questions?</h2>
																								<div class="block-23 mb-3">
																												<ul>
																																<li><span class="icon fa fa-map-marker"></span><span class="text">Jl. Cabe V 91, Pd.
																																								Cabe Ilir, Kec. Pamulang, Kota Tangerang Selatan, Banten 15418</span></li>
																																<li><a href="https://wa.me/6281384002161?text=Ingin%20Melaporkan%20Masalah"><span
																																												class="icon fa fa-whatsapp"></span><span class="text">081384002161 Admin
																																												1</span></a></li>
																																<li><a href="https://wa.me/6288219983235?text=Ingin%20Melaporkan%20Masalah"><span
																																												class="icon fa fa-whatsapp"></span><span class="text">088219983235 Admin
																																												2</span></a></li>
																																<li><a href="#"><span class="icon fa fa-paper-plane"></span><span
																																												class="text">confido.fikridean.my.id</span></a></li>
																												</ul>
																								</div>
																				</div>
																</div>
												</div>
												<div class="row">
																<div class="col-md-12 text-center">

																				<p>
																								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
																								Confido &copy;
																								<script>
																												document.write(new Date().getFullYear());
																								</script>
																								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
																				</p>
																</div>
												</div>
								</div>
				</footer>



				<!-- loader -->
				<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
												<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
																stroke="#eeeeee" />
												<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
																stroke-miterlimit="10" stroke="#F96D00" />
								</svg></div>
@endsection
