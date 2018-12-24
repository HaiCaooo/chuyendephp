<?php
include 'class/database.php';
include 'class/nauan.php';
include 'class/pager.php';

$page = new pager();
$dk = new nauan();
$tongtin = $dk->total();
$sotintrentrang = 6;
$tongtrang = $page->tim_tong_so_trang($tongtin,$sotintrentrang);
$vitri = $page->tim_vi_tri_bat_dau($sotintrentrang);
$kq2 = $dk->listproduct($vitri,$sotintrentrang);
$dk->disconnect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Food Chef a Hotel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Chef Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
		
<link rel="stylesheet" href="css/lightbox.css">
		
<!-- //custom-theme files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Webslesson Demo - Ajax Live Data Search using Jquery PHP MySql</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<!--<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">-->
<!-- //googlefonts -->

</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Chào mừng đến với</h3>
									<h3>trung tâm Á Âu</h3>
									<p>Nấu thật ngon</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Đọc thêm</a>
			</div>
								</div>	
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Chào mừng đến với</h3>
									<h3>trung tâm Á Âu</h3>
									<p>Nấu thật ngon</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Đọc thêm</a>
			</div>
								</div>	
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Chào mừng đến với</h3>
									<h3>trung tâm Á Âu</h3>
									<p>Nấu thật ngon</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Đọc thêm</a>
										</div>
								</div>
								
							</div>
						</div>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<div class="rotate">
					<a href="#about" class="scroll">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</a>
				</div>
			</div>
 
</div>	
<!-- //banner --> 
<!-- header -->
<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">FoodChef</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img style="width: 50px" src="images/unnamed.jpg">
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll scroll" href="#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#home">Trang chủ</a></li>
							<li><a class="page-scroll scroll" href="#about">Giới thiệu</a></li>
							<li><a class="page-scroll scroll" href="#services">Dịch vụ</a></li>
							<li><a class="page-scroll scroll" href="#team">Giảng viên</a></li>
							<li><a class="page-scroll scroll" href="#food">Ẩm thực</a></li>
							<li><a class="page-scroll scroll" href="#contact">Liên hệ</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
</div>	
<!-- //header -->

<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="heading">
			<h2 data-aos="zoom-in">Giới thiệu</h2>
		</div>
		<h4>GIỚI THIỆU VỀ HƯỚNG NGHIỆP Á ÂU</h4>
		<p>Với sự phát triển và hội nhập mạnh mẽ về kinh tế xã hội, số lượng Nhà hàng - Khách sạn trong nước và sự gia nhập của các thương hiệu Nhà hàng - Khách sạn đến từ nước ngoài không ngừng gia tăng. Chính vì thế, nhu cầu tuyển dụng nhân lực cho lĩnh vực này cũng không ngừng tăng lên. Mặc dù, số lượng nhân viên trong ngành được đào tạo hàng năm khá nhiều nhưng rơi vào tình trạng thừa lượng thiếu chất, yếu về kỹ năng lẫn kiến thức. Tay nghề chưa đáp ứng được nhu cầu tuyển dụng của nhiều Nhà hàng - Khách sạn tiêu chuẩn 5 sao.

Hiểu được khó khăn mà khối ngành Nhà Hàng Khách Sạn đang phải đối mặt và cùng những trăn trở về tương lai của thế hệ những người đi trước, Hướng Nghiệp Á Âu đã xác định sứ mạng quan trọng của mình là hướng nghiệp và đào tạo, tối đa hóa giá trị phát triển năng lực cho học viên, góp phần vào sự phát triển nguồn nhân lực chất lượng cao cho ngành Du Lịch - Dịch Vụ Ăn Uống - Nhà Hàng Khách Sạn và Lữ Hành.</p>
		<div class="about-grids">			
				<img class="hinhanh" src="images/a-au-1.jpg">
						
				<img class="hinhanh" src="images/thanh-thao-ky-nang-nghe-bep.jpg" alt="" />
						
				<img  class="hinhanh" src="images/phoi-canh-quay-tu-van-huong-nghiep-a-au-quan-10.jpg">
									
				<img class="hinhanh" src="images/img20180412115340886.jpg" alt="" />
								
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->

<!-- services -->
<div class="services" id="services">
		<div class="container">
		<div class="heading">
			<h3 data-aos="zoom-in" >Các dịch vụ</h3>
		</div>
			<div class="w3-agileits-services-grids">
				<div data-aos="fade-down" class="col-md-6 agile-services-left">
					<div class="agile-services-left-grid">
						<div class="services-icon">
							<div class="col-md-4 services-icon-info">
								<i class="fa fa-glass" aria-hidden="true"></i>
							</div>
							<div class="col-md-8 services-icon-text">
								<p>Bạn đam mê nghề pha chế năng động, yêu thích việc sáng tạo cocktail, mocktail, đồ uống thông dụng hay những ly cà phê Ý tiêu chuẩn? Bạn mong muốn được làm việc tại các quầy Bar đẳng cấp với mức lương hấp dẫn? Bạn muốn mở quán kinh doanh đồ uống thu lợi nhuận cao? Hãy tham khảo ngay các khóa học pha chế Bartender, Barista, Bar Trưởng, Pha Chế Đặc Biệt, Khởi Sự Kinh Doanh Cafe và chuyên đề pha chế tại Hướng Nghiệp Á Âu. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="services-icon">
							<div class="col-md-4 services-icon-info">
								<i class="fa fa-cutlery" aria-hidden="true"></i>
							</div>
							<div class="col-md-8 services-icon-text">
								<p>Đến với Hướng Nghiệp Á Âu, bạn sẽ được trải nghiệm môi trường học tập lý tưởng cùng đội ngũ Giảng viên dạy nấu ăn chuyên nghiệp, là những Bếp trưởng, Chuyên gia ẩm thực hàng đầu Việt Nam. Cơ sở vật chất hiện đại, giáo trình biên soạn theo chuẩn quốc tế giúp bạn dễ dàng nắm bắt được công việc thực tế của mình. Chỉ sau khóa học nấu ăn ngắn hạn từ 3 – 6 tháng, bạn có đủ kiến thức và kỹ năng làm việc trong các nhà hàng, khách sạn sang trọng với mức lương hấp dẫn hoặc tự tin mở quán ăn kinh doanh riêng. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="services-icon">
							<div class="col-md-4 services-icon-info">
								<i class="fa fa-spoon" aria-hidden="true"></i>
							</div>
							<div class="col-md-8 services-icon-text">
								<p>Bạn yêu thích nghề làm bánh và có mong muốn làm việc tại các tiệm bánh nổi tiếng, tại Bếp Bánh của những Nhà hàng – Khách sạn lớn hay tự mình mở tiệm bánh kinh doanh? Vậy thì ngay từ bây giờ hãy xác định mục tiêu của bạn là trở thành một chuyên gia làm bánh bằng cách trau dồi kiến thức, kỹ năng và tay nghề để thực hiện ước mơ của mình. Là đơn vị tiên phong trong lĩnh vực đào tạo ngành Bếp Bánh, Hướng Nghiệp Á Âu sẽ là môi trường lý tưởng để bạn theo học, tạo nền móng vững chắc giúp bạn nhanh chóng đạt được mục tiêu nghề nghiệp của mình. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3-agile-services-right">
					<div data-aos="zoom-in" class="col-md-6 service1">
						<img style="width: 250px; height: 250px" src="images/daubep.jpg" alt="" />
					</div>
					<div data-aos="zoom-in" class="col-md-6 serviceimg">
						<img src="images/service1.jpg" alt="" />
						<img src="images/service2.jpg" alt="" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<!-- //services -->

<!-- team -->
		<div class="team" id="team">
			<div class="container">
				<div class="heading">
					<h3 data-aos="zoom-in" >Giảng viên</h3>
				</div>
				<div class="agile_team_grids">
					<div data-aos="fade-up" class="col-md-3 agile_team_grid">
						<div class="ih-item circle effect1">
							<div class="spinner"></div>
							<div class="img"><img style="height: 310px" src="images/hieu-truong-nguyen-duc-thuc-anh.jpg" alt=" " class="img-responsive" /></div>
							<div class="info">
								<div class="info-back">
								  <h4>Hiệu trưởng</h4>							  
								</div>
							</div>
						</div>
						<h4>Cô Nguyễn Đức Thục Anh</h4>
						<p>Hiệu trưởng</p>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#" class="fa fa-facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter"> </a></li>
								<li><a href="#" class="fa fa-google"> </a></li>
							</ul>
						</div> 
					</div>
					<div data-aos="slide-up" class="col-md-3 agile_team_grid">
						<div class="ih-item circle effect1">
							<div class="spinner"></div>
							<div class="img"><img style="height: 310px" src="images/giam-doc-dao-tao-doan-minh-tam.jpg" alt=" " class="img-responsive" /></div>
							<div class="info">
								<div class="info-back">								  
								  <h4>Giám đốc đào tạo</h4>
								</div>
							</div>
						</div>
						<h4>Thầy Đoàn Minh Tâm</h4>
						<p>Giám đốc đào tạo</p>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#" class="fa fa-facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter"> </a></li>
								<li><a href="#" class="fa fa-google"> </a></li>
							</ul>
						</div> 
					</div>
					<div data-aos="slide-up" class="col-md-3 agile_team_grid t3">
						<div class="ih-item circle effect1">
							<div class="spinner"></div>
							<div class="img"><img style="height: 310px" src="images/norbert.jpg" alt=" " class="img-responsive" /></div>
							<div class="info">
								<div class="info-back">
								  <h4>Bếp Trưởng Khách Sạn Floating</h4>							  
								</div>
							</div>
						</div>
						<h4>Thầy Norbert Ehrbar</h4>
						<p>Bếp Trưởng Khách Sạn Floating</p>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#" class="fa fa-facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter"> </a></li>
								<li><a href="#" class="fa fa-google"> </a></li>
							</ul>
						</div> 
					</div>
					<div data-aos="fade-up" class="col-md-3 agile_team_grid t4">
						<div class="ih-item circle effect1">
							<div class="spinner"></div>
							<div class="img"><img style="height: 310px" src="images/quach-thien-tuong.jpg" alt=" " class="img-responsive" /></div>
							<div class="info">
								<div class="info-back">
								  <h4>BT Vietnam Airlines Caterers LTD</h4>						  
								</div>
							</div>
						</div>
						<h4>Thầy Quách Thiên Tường</h4>
						<p>BT Vietnam Airlines Caterers LTD</p>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#" class="fa fa-facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter"> </a></li>
								<li><a href="#" class="fa fa-google"> </a></li>
							</ul>
						</div> 
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
		</div>
<!--//team-->

<!-- gallery -->
	<div class="gallery" id="food">
		<div class="heading">
			<h3 data-aos="zoom-in" >Một số món ăn</h3>
		</div>
			<div class="gallery-grids">
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food1.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food1.jpg" alt="" />
								<figcaption>
									<h3>thịt bò <span>Wellington</span></h3>
									<p> Thịt bò phải là loại ngon nhất ướp với hạt tiêu và muối, sau đó áp chảo thật nhanh với dầu olive. Cho hồn hợp nấm – thịt, húng tây, muối, hạt tiêu trắng, hành, tỏi và hạt dẻ xay nhuyễn vào đảo trong 10 phút. Thêm rượu và tiếp tục đun cho tới khi hỗn hợp khô lại. Khuấy đều rồi để nguội.Tiếp đó, cán một lớp bột mỏng, rải đều hỗn hợp nấm và đặt thịt bò vào giữa, cuốn lại rồi cho vào lò nướng. <i class=""></i></p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food2.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food2.jpg" alt="" />
								<figcaption>
									<h3>Reuben <span>Sandwich</span></h3>
									<p>Cần: 1 lát bánh mạch đen, 1/4 pound thịt bò corned (thái lát mỏng), 2 lát pho mát Thụy Sĩ, 1/4 chén dấm kẹp, 2 muỗng canh thịt nguội của Nga</p>

 									<p>Cách làm: Lắp các thành phần lên bánh mì và nướng trên một miếng thịt nguội nhẹ cho đến khi nhẹ nhàng nâu và phô mai tan chảy.</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food3.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food3.jpg" alt="" />
								<figcaption>
									<h3>Cobb <span>Salad</span></h3>
									<p>Cần: 2 quả trứng, 5 lát thịt ba chỉ muối, Gà ướp ở trên, 2 bát con rau xà lách thái vuông vừa miệng, 2 quả cà chua cỡ vừa hoặc 10 quả cà chua bi, 1 quả bơ chín vừa, hơi mềm tay khi nắn, 4 nhánh hành lá phần xanh, thái nhỏ
									8 quả oliu, thái lát</p>
									<p>Sắp xếp: Bạn có thể tham khảo cách sắp xếp đĩa salad như ảnh, cũng là cách phổ biến sắp xếp salad này, hoặc theo cách bạn thích.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>	
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food4.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food4.jpg" alt="" />
								<figcaption>
									<h3>Eggs <span>Benedict</span></h3>
									<p>SỐT HOLLANDAISE: 2 quả trứng, 100g bơ lạt, 1 muỗng canh nước chanh, 1 ít muối</p>
									<p>EGG BENEDICT (2 người): Sốt Hollandaise, 200g thịt xông khói, 2 quả trứng, 15g bơ lạt, 1 muỗng canh dấm, Muối, tiêu, Hành lá hoặc hẹ</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food5.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food5.jpg" alt="" />
								<figcaption>
									<h3>Fettuccine <span>Alfredo</span></h3>
										<p>Nguyên liệu:200g fettuccine, 50g bơ, 50g nấm (có thể dùng nấm rơm), 1 tép tỏi, 235ml whipping cream, 125g phô mai parmesan, 3g lá húng quế Tây, Gia vị: muối, tiêu</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food6.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food6.jpg" alt="" />
								<figcaption>
									<h3>Salisbury <span>Steak</span></h3>
									<p>450gr thịt bò băm, 1 lòng đỏ trứng,15gr bột mỳ, 50gr bánh mỳ (xé vụn), 1 thìa con củ cải bào nhỏ (hoặc có thể thay bằng 1/2 thìa mù tạc vàng), 1/2 củ hành tây, Nước sốt: 60ml rượu vang + 480ml nước hầm xương + 30ml nước sốt cà chua + 10gr đường + 20gr bột mỳ</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food7.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food7.jpg" alt="" />
								<figcaption>
									<h3>Chicken <span>Marengo</span></h3>
									<p>Nguyên liệu: 1 con gà Ai cập; 200g khoai tây bi; 1 hộp nấm mỡ; 1 củ hành tây; 2 thìa sauce cà chua; 2 thìa nước tương; 1 thìa hạt nêm; 250ml rượu vang đỏ; 1 thìa đường; 50g bơ thơm; 5 lát bánh mì sandwich; 50g bột mì; dầu ăn để chiên.</p>								
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food8.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food8.jpg" alt="" />
								<figcaption>
									<h3>BoliedEgg <span>Mint</span></h3>
									<p>Nguyên liệu: Gà ta: 500gr, 1 bộ trứng gà non, Măng chua: 300gr , Hành, ngò gai, Ớt trái, Gia vị: Nước mắm, bột nêm, gừng, xả. Thịt gà bạn nên chọn thịt gà ta nấu sẽ ngon hơn vì thịt gà công nghiệp sẽ bở nấu không ngon. Thịt nên chọn phần đùi gà hoặc lườn là ngon nhất, mua về rửa sạch, sát với muối, chặt miếng vừa ăn, ướp với nước mắm, hạt nêm, gừng và xả để thịt ngấm 20 phút .</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food9.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food9.jpg" alt="" />
								<figcaption>
									<h3>Nachos <span>Food</span></h3>
									<p>Nguyên liệu: Phần bánh: 500g bánh tortillas (cắt nhỏ, nướng cùng chút dầu olive), Phần sốt: Sốt phô mai: 60ml sữa tươi, 30g kem phô mai, 45g phô mai bào mịn, Một chút ớt bột. Sốt hành: 1/2 củ hành tây thái nhỏ, 45ml sốt cà chua (loại làm sốt pizza), 2 quả ớt sừng xanh, Một ít olive tươi, cắt nhỏ, Một chút muối</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food10.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food10.jpg" alt="" />
								<figcaption>
									<h3>Baked <span>Snapper</span></h3>
									<p>Nguyên liệu làm bánh mỳ nướng bơ tỏi: Bánh mì: 2 cái, bạn có thể mua loại bánh mì nào cũng được, Bơ nhạt để mềm: 50g, Tỏi: ½ củ, Rau mùi tây: 1 bó nhỏ, Muối. Sau đó xếp từng miếng bánh vào khay, cho vào lò nướng khoảng 10-15 phút cho tới khi hai ặmt bánh vàng đều.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food11.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food11.jpg" alt="" />
								<figcaption>
									<h3>Caesar <span>Salad</span></h3>
									<p>Nguyên liệu: 100gr phô mai Parmesan bào, 4 cây xà lách Roman (loại vừa), 1 quả trứng, 2 thìa cà phê nước cốt chanh, 2 lát bánh mì sandwich,, 1 thìa súp giấm, 150ml dầu oliu, 1 củ tỏi: bớt lại 2 nhánh còn lại băm nhuyễn, 1 thìa cà phê xốt Worcestershire, Muối, tiêu (tùy thích).</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/food12.jpg" data-lightbox="example-set" data-title="">
								<img src="images/food12.jpg" alt="" />
								<figcaption>
									<h3>Fruit brown <span>Betty</span></h3>
									<p>Nguyên liệu bao gồm:15 -20 quả vải thiều, 4 chén nước, 1 quả chanh, đường, đá dăm. Nước ép vải có lẽ là món đơn giản nhất trong các món được chế biến từ vải rùi. Vải thiều mua về tách bỏ phần hạt, cho thịt vải vào máy xay sinh tố, xay nhuyễn. Tiếp tục cho vải xay nhuyễn, đường (với 20 quả vải thiều chúng mình cho khoảng 2 muỗng đường trắng) nước cốt chanh (bỏ phần hạt đi để nước ép vải không bị đắng), khuấy đều.</p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<table align="center" class="table table-condensed" style="width: 1000px">
					<thead>

						<tr>
							
						<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center" style="color : red">Tìm món ăn</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Nhập tên món ăn" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
        		
        
       			 </tbody>
			</table>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //gallery -->



<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="heading">
				<h3 data-aos="zoom-in" >Liên hệ</h3>
			</div>
		</div>
			<div class="w3layouts-grids">
				<div style="height:456px" data-aos="flip-left" class="col-md-6 contact-left">
					<div>
					<h3 data-aos="zoom-in" >Thông tin liên hệ</h3>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Địa chỉ</h5>
							<p>473 SƯ VẠN HẠNH, P.12, Q.10						
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Điện thoại</h5>
							<ul>
								<li>028 7300 6148</li>
								<li>1800 6148 </li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>E-Mail</h5>
							<ul>
								<li><a href="mailto:example@mail.com">info@huongnghiepaau.com<br> 
hnaau@huongnghiepaau.com</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
					
					</div>
				<div class="map" style="float: left; width: 50% ">
	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62711.85731972156!2d106.63345378722644!3d10.773649753944119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x31752edc6eb73839%3A0x34f9822b4fc37e1a!2zNDczIFPGsCBW4bqhbiBI4bqhbmgsIFBoxrDhu51uZyAxMiwgUXXhuq1uIDEwLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!3m2!1d10.7735674!2d106.6684733!4m0!5e0!3m2!1svi!2s!4v1540313188225" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
				<div class="clearfix"> </div>
				
			</div>
	</div>
<!-- //contact -->
<!-- map -->

<!-- //map -->

<!-- subscribe -->
<div class="agileits_w3layouts_banner_info">
	<div class="container">
		<div data-aos="flip-right" class="col-md-7 subscribe-left">
			<h1 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; color: #8E6935; font-size: 50px">DẪN DẮT BẠN VÀO ĐAM MÊ</h2>
		</div>
		<div><a href="web/dangky.php" style="font-size: 60px;font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; color: orange">Đăng ký khóa học</a></div>
		<div data-aos="flip-left" class="col-md-5 subscribe-right">
			<form action="#" method="post"> 
				<input type="email" name="email" placeholder="Điền email..." required="">
				<input type="submit" value="Subscribe">
			</form>
		</div>
	</div>
</div>
<!-- subscribe -->

<!-- copyright -->
<div class="copyright">
	<div class="copyrightbottom">
		<p>© 2017 Food Chef. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //copyright -->

<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Trung tâm Á Âu 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/food3.jpg" alt=" " class="img-responsive" />
						<p>Dẫn dắt đam mê của bạn, thể hiện những sự tinh túy qua những món ăn. Gắn kết mọi người với nhau</p>
							
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 


<script src="js/lightbox-plus-jquery.min.js"> </script><!-- for gallery js -->
 
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

 <!-- /Responsive slides js -->
						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 <!-- Responsive slides js -->
 
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->


<!-- Search -->
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
</body>
</html>