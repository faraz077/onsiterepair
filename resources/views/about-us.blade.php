@extends('layouts.app')
@section('content')
<!-- hero section started -->
<section class="hero-section  buy-device-banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="p-5 text-center licensed">We are licensed and accredited by Government of Dubai</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 d-flex align-items-center">
				<div class="hero-content-section repair-done-fast">
					<h1>
					<span>Who </span> <br> WE are!
					</h1>
					<p><span>OnSiteRepairs</span> offer a wide variety of devices including cell phones and computers for sale. We carry a large inventory or pre-owned phones, iPhones, iPads, laptops. Our products, like our services, are trusted, high quality, and cost efficient.</p>
					
				</div>
			</div>
			<div class="col-lg-6">
				<div class="hero-img-section">
					<img src="{{asset('public/img/about-banner.png')}}" alt="" class="img-fluid buy-device-img">
					<img src="{{asset('public/img/buy-device-shadow.png')}}" alt="" class="img-fluid buy-device-shadow">
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- hero section ended  -->
<section class="three-step-section buy-device-offer our-mission">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 d-flex align-items-center">
				<div class="left">
					<img class="img-fluid three-step-img" src="{{asset('public/img/our-mission.png')}}" alt="">
					<img class="img-fluid three-step-shadow" src="{{asset('public/img/our-mission-shadow.png')}}" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="right">
					<div class="line"></div>
					<h1>Our  Mission</h1>
					<div class="item">
						
						<p>We are proud to say that customers trust us and our outstanding repairing services because we have been serving them like the official Apple and Samsung repair center in Brooklyn, Philadelphia and Richmond. Our technicians are trained, certified, and have plenty of experience repairing various tech devices.</p>
						<p>
						We take pride in what we do. And what we do best is restore your device back to its original condition. With us, you are guaranteed a professional, original quality repair. We strive for 100% customer satisfaction.</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonial Section -->
<section class="testimonial-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 testimonial-main">
				<div class="testimonial-heading">
					<div class="line">
					</div>
					<br>
					<h1>What our customer say</h1>
				</div>
			</div>
			<div class="col-lg-7"></div>
		</div>
	</div>
</section>
<section class="regular slider">
	<div>
		<div class="first item">
			<ul class="start d-flex">
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.615 1.63187C20.1274 0.399934 21.8726 0.399933 22.385 1.63187L26.6818 11.9627C27.0418 12.8282 27.8558 13.4197 28.7903 13.4946L39.9433 14.3887C41.2732 14.4953 41.8125 16.1551 40.7992 17.0231L32.3019 24.302C31.5899 24.9119 31.279 25.8688 31.4965 26.7807L34.0926 37.6641C34.4021 38.9619 32.9903 39.9877 31.8516 39.2922L22.3031 33.4601C21.5031 32.9714 20.4969 32.9714 19.6969 33.4601L10.1484 39.2922C9.00974 39.9877 7.59786 38.9619 7.90744 37.6641L10.5035 26.7807C10.721 25.8688 10.4101 24.9119 9.69814 24.302L1.20078 17.0231C0.187472 16.1551 0.72676 14.4953 2.05674 14.3887L13.2097 13.4946C14.1442 13.4197 14.9582 12.8282 15.3182 11.9627L19.615 1.63187Z" stroke="#FEC93D"/>
				</svg></li>
			</ul>
			<h3>“They work fast”</h3>
			<p class="testimonial">OnSiteRepair team work really fast & efficient. The guy sent by them, fixed my phone in less than 30 mins</p>
			<div class="user-icon d-flex align-items-center">
				<div class="img"><img src="{{asset('public/img/user-2.png')}}" alt="" class="img-fluid"></div>
				<div class="desc">
					<h4>Nickolas J.</h4>
					<p>iPhone 14 ProMax</p>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="two item">
			<ul class="start d-flex">
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
			</ul>
			<h3>“OnSiteRepairs is the best!”</h3>
			<p class="testimonial">OnSiteRepair sent the guy in no time. I highly recommend them.</p>
			<div class="user-icon d-flex align-items-center">
				<div class="img"><img src="{{asset('public/img/user-3.png')}}" alt="" class="img-fluid"></div>
				<div class="desc">
					<h4>Maria Drew</h4>
					<p>Samsung S23 Ultra</p>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="three item">
			<ul class="start d-flex">
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
			</ul>
			<h3>“Nailed it!”</h3>
			<p class="testimonial">OnSiteRepair team, are doing the really awesome work by bringing this innovative idea that really saves my time.</p>
			<div class="user-icon d-flex align-items-center">
				<div class="img"><img src="{{asset('public/img/user-1.png')}}" alt="" class="img-fluid"></div>
				<div class="desc">
					<h4>Ali Waseem</h4>
					<p>Google Pixel 7 Pro</p>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="first item">
			<ul class="start d-flex">
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.615 1.63187C20.1274 0.399934 21.8726 0.399933 22.385 1.63187L26.6818 11.9627C27.0418 12.8282 27.8558 13.4197 28.7903 13.4946L39.9433 14.3887C41.2732 14.4953 41.8125 16.1551 40.7992 17.0231L32.3019 24.302C31.5899 24.9119 31.279 25.8688 31.4965 26.7807L34.0926 37.6641C34.4021 38.9619 32.9903 39.9877 31.8516 39.2922L22.3031 33.4601C21.5031 32.9714 20.4969 32.9714 19.6969 33.4601L10.1484 39.2922C9.00974 39.9877 7.59786 38.9619 7.90744 37.6641L10.5035 26.7807C10.721 25.8688 10.4101 24.9119 9.69814 24.302L1.20078 17.0231C0.187472 16.1551 0.72676 14.4953 2.05674 14.3887L13.2097 13.4946C14.1442 13.4197 14.9582 12.8282 15.3182 11.9627L19.615 1.63187Z" stroke="#FEC93D"/>
				</svg></li>
			</ul>
			<h3>“They work fast”</h3>
			<p class="testimonial">OnSiteRepair team work really fast & efficient. The guy sent by them, fixed my phone in less than 30 mins</p>
			<div class="user-icon d-flex align-items-center">
				<div class="img"><img src="{{asset('public/img/user-2.png')}}" alt="" class="img-fluid"></div>
				<div class="desc">
					<h4>Nickolas J.</h4>
					<p>iPhone 14 ProMax</p>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="two item">
			<ul class="start d-flex">
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.615 1.63187C20.1274 0.399934 21.8726 0.399933 22.385 1.63187L26.6818 11.9627C27.0418 12.8282 27.8558 13.4197 28.7903 13.4946L39.9433 14.3887C41.2732 14.4953 41.8125 16.1551 40.7992 17.0231L32.3019 24.302C31.5899 24.9119 31.279 25.8688 31.4965 26.7807L34.0926 37.6641C34.4021 38.9619 32.9903 39.9877 31.8516 39.2922L22.3031 33.4601C21.5031 32.9714 20.4969 32.9714 19.6969 33.4601L10.1484 39.2922C9.00974 39.9877 7.59786 38.9619 7.90744 37.6641L10.5035 26.7807C10.721 25.8688 10.4101 24.9119 9.69814 24.302L1.20078 17.0231C0.187472 16.1551 0.72676 14.4953 2.05674 14.3887L13.2097 13.4946C14.1442 13.4197 14.9582 12.8282 15.3182 11.9627L19.615 1.63187Z" stroke="#FEC93D"/>
				</svg></li>
			</ul>
			<h3>“OnSiteRepairs is the best!”</h3>
			<p class="testimonial">OnSiteRepair sent the guy in no time. I highly recommend them.</p>
			<div class="user-icon d-flex align-items-center">
				<div class="img"><img src="{{asset('public/img/user-3.png')}}" alt="" class="img-fluid"></div>
				<div class="desc">
					<h4>Maria Drew</h4>
					<p>Samsung S23 Ultra</p>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="three item">
			<ul class="start d-flex">
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.1534 1.43986C19.8365 -0.202728 22.1635 -0.202728 22.8466 1.43986L27.1435 11.7706C27.4315 12.4631 28.0827 12.9362 28.8303 12.9962L39.9832 13.8903C41.7565 14.0325 42.4756 16.2455 41.1245 17.4028L32.6271 24.6817C32.0576 25.1696 31.8088 25.9352 31.9828 26.6647L34.5789 37.5481C34.9917 39.2785 33.1092 40.6462 31.591 39.7189L22.0425 33.8868C21.4025 33.4958 20.5975 33.4958 19.9575 33.8868L10.409 39.7189C8.89082 40.6462 7.00831 39.2785 7.42109 37.5481L10.0172 26.6647C10.1912 25.9352 9.94244 25.1696 9.37287 24.6817L0.875498 17.4028C-0.475575 16.2455 0.243477 14.0325 2.01679 13.8903L13.1697 12.9962C13.9173 12.9362 14.5685 12.4631 14.8565 11.7706L19.1534 1.43986Z" fill="#FEC93D"/>
				</svg></li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 42 41" fill="none">
					<path d="M19.615 1.63187C20.1274 0.399934 21.8726 0.399933 22.385 1.63187L26.6818 11.9627C27.0418 12.8282 27.8558 13.4197 28.7903 13.4946L39.9433 14.3887C41.2732 14.4953 41.8125 16.1551 40.7992 17.0231L32.3019 24.302C31.5899 24.9119 31.279 25.8688 31.4965 26.7807L34.0926 37.6641C34.4021 38.9619 32.9903 39.9877 31.8516 39.2922L22.3031 33.4601C21.5031 32.9714 20.4969 32.9714 19.6969 33.4601L10.1484 39.2922C9.00974 39.9877 7.59786 38.9619 7.90744 37.6641L10.5035 26.7807C10.721 25.8688 10.4101 24.9119 9.69814 24.302L1.20078 17.0231C0.187472 16.1551 0.72676 14.4953 2.05674 14.3887L13.2097 13.4946C14.1442 13.4197 14.9582 12.8282 15.3182 11.9627L19.615 1.63187Z" stroke="#FEC93D"/>
				</svg></li>
			</ul>
			<h3>“Nailed it!”</h3>
			<p class="testimonial">OnSiteRepair team, are doing the really awesome work by bringing this innovative idea that really saves my time.</p>
			<div class="user-icon d-flex align-items-center">
				<div class="img"><img src="{{asset('public/img/user-1.png')}}" alt="" class="img-fluid"></div>
				<div class="desc">
					<h4>Ali Waseem</h4>
					<p>Google Pixel 7 Pro</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection