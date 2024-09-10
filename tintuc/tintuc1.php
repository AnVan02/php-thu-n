<!DOCTYPE html>
<html lang="en">
<title>Viết Sơn</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap4/bootstrap.min.css">
<link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/responsive.css">
<?php if(isset($_SESSION["message"])):?>
	<script>
		function message() {
		window.alert("<?php echo $_SESSION["message"];?>");
		}
	</script>
<?php endif;?>
<head>

<body class="h-100" style="background-image: ">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../assets/upload/logo/ai.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/upload/logo/on4.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/upload/logo/on2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/upload/logo/on3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<?php if(isset($_SESSION["message"])) {echo 'onload="message()"';unset($_SESSION["message"]);}?>


<div class="super_container container h-100">
	<!-- Header -->
	<header class="header trans_300">
		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container col-2 col-lg-3 float-left">
							<a href="index.php"><span></span></a>
							<img src="../assets/images/logo VS_new.png" alt="Logo" style="max-width: 90%; height: auto;">
						</div>
						<div class="col-lg-9 col-10 float-right">
							<nav class="navbar row "> 
								<from method="post" class="col-lg-8 col-1 float-left" action="" onchange="search()">
									<div class="navbar-search input-group  input-group-lg">
										<input type="text" class="form-control" id="searchbox" placeholder="Nhập tên sản phẩm cần tìm..." name="search">
										<div class="input-group-append" >
											<a id="btnsearch">
											<input type="submit" value="Tìm kiếm" class="btn btn-outline-primary btn-lg"></a>
										</div>
									</div>
								<!-- header -->
				<div class="row p-2">
						<div class="nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                                    <ul class="header_nav">
							    <li><a href="../index.php">Trang chủ</a></li>
								<li><a href="../aboutus.php">Giới thiệu</a></li>
								<li><a href="../news.php">Tin tức</a></li>
								<li><a href="../product.php">Sản phẩm</a></li>
								<li><a href="../check.php">Bảo Hành</a></li"> 

							</ul>
			
							<style>
			/* Đảm bảo thẻ cha của menu là một flex container */
.navbar {
    display: flex; /* Sử dụng Flexbox */
    justify-content: space-between; /* Khoảng cách đều giữa các mục */
    align-items: center; /* Căn giữa các mục theo chiều dọc */
    white-space: nowrap; /* Tránh ngắt dòng cho các mục */
    overflow: hidden; /* Ẩn phần tử thừa */
}

.navbar ul {
    display: flex; /* Hiển thị các mục trong cùng một dòng */
    list-style-type: none; /* Loại bỏ dấu chấm đầu mục */
    padding: 0; /* Xóa khoảng trắng */
    margin: 0; /* Xóa khoảng trắng */
}

.navbar ul li {
    margin: 0 15px; /* Khoảng cách giữa các mục */
}

.navbar ul li a {
    text-decoration: none; /* Xóa gạch chân */
    color: #000; /* Màu chữ */
    display: block; /* Đảm bảo toàn bộ vùng có thể nhấp */
}

/* Đảm bảo menu không bị ngắt dòng */
.navbar ul li a:hover {
    color: #007bff; /* Màu khi di chuột qua */
}

/* Để menu co giãn và ẩn các mục khi không đủ chỗ */
@media (max-width: 768px) {
    .navbar {
        flex-wrap: wrap; /* Cho phép ngắt dòng khi không đủ chỗ */
    }
}


	</style>
	
						</div>
					</div>
						

				</from>
				
		
		<script>
			function search(){
			var x=document.getElementById("searchbox").value;
			x='index.php?controller=products&action=btnsearch&search='+x;
			document.getElementById("btnsearch").setAttribute("href", x); 
		}
	</script>
				
								<div class="hamburger_container col-6 float-right">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						Tài khoản
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
					<?php if(isset($_SESSION['customer_id'])):?>
							<li>
								<a href="index.php?controller=customers&action=update&id=<?php echo $_SESSION['customer_id'];?>">
									<span><p class="font-italic main_color m-0" >
										<?php if(!empty($_SESSION['customer_name'])) echo $_SESSION['customer_name']; else echo $_SESSION['customer_phone'];?></p> 
									</span>
								</a>
							</li>
							<li>
								<a href="index.php?controller=orders">
									<span>Lịch sử giao dịch</span>
								</a>
							</li>
							<li>
								<a href="index.php?controller=login&action=logout">
									<i class="fa fa-sign-out"></i> <span>  Đăng xuất</span>
								</a>
							</li>
						<?php else:?>
							<li><a href="index.php?controller=login&action=login"><i class="fa fa-sign-in" aria-hidden="true"></i>  Đăng nhập</a></li>
							<li><a href="index.php?controller=customers&action=register"><i class="fa fa-user-plus" aria-hidden="true"></i>  Đăng kí</a></li>
							
						<?php endif;?>
					</ul>
				</li>
			
				<li class="menu_item"><a href="index.php">Trang chủ</a></li>
				<li class="menu_item"><a href="product.php">Sản phẩm
					<?php if(!empty($_SESSION["countcart"])):?>
						<div class="hamburger_menu_checkout float-right">
							<span id="checkout_items" class="checkout_items">
								<?php echo $_SESSION["countcart"];?>
							</span>
						</div>
					<?php endif;?></a>
				</li>
			
				<li class="menu_item"><a href="news.php">Tin tức</a></li>
				<li class="menu_item"><a href="aboutus.php">Giới thiệu</a></li>
				<li class="menu_item">
					<div class="input-group">
					  <input type="search" class="form-control rounded" placeholder="Nhập sản phầm cần tìm..." aria-label="Search" aria-describedby="search-addon" />
					  <button type="button" class="btn btn-outline-primary">Tìm</button>
						

					</div>
				</li>
			</ul>
		</div>
		
	</div>
	<!-- tin tức-->
	<header>
        <h2>Lexar Ra Mắt Loạt Sản Phẩm Mới Tại IFA 2024</h2>
        <p>Lexar ra mắt loạt sản phẩm mới tại IFA 2024: Có cả ổ cứng hub cực xịn sắp ra mắt ở Việt Nam dành cho các content creator</p>
		<img src="../assets/upload/news/7.webp" alt="Thẻ Nhớ CFexpress 4.0">
    </header>

    <main>
	<h4>Loạt giải pháp lưu trữ được Lexar giới thiệu tại IFA 2024.</h4>

	<p>Tại IFA 2024, Lexar đã giới thiệu một loạt sản phẩm mới tập trung vào các giải pháp lưu trữ dữ liệu tiên tiến. Nổi bật trong số đó là Lexar Professional Go Portable SSD with Hub, ổ SSD di động dung lượng 1-2TB, hỗ trợ quay video ProRes 4K 60fps trực tiếp trên iPhone 15 Pro trở lên. Ổ này có tốc độ đọc lên đến 1050MB/giây và tốc độ ghi 1000MB/giây, mang lại hiệu suất cao cho các nhu cầu lưu trữ và chỉnh sửa video.</p>

	<p>Lexar ra mắt loạt sản phẩm mới tại IFA 2024: Có cả ổ cứng hub cực xịn sắp ra mắt ở Việt Nam dành cho các content creator</p>
	<img src="../assets/upload/news/9.webp" alt="Thẻ Nhớ CFexpress 4.0">

	<p>Ngoài ra, Lexar cũng ra mắt dòng thẻ nhớ CFexpress 4.0, bao gồm các phiên bản DIAMOND, GOLD và SILVER, với khả năng quay video RAW 8K. Đặc biệt, thẻ Lexar Professional DIAMOND CFexpress 4.0 Type B đã đạt tốc độ đọc lên đến 3700MB/giây và ghi 3400MB/giây, giành giải thưởng TIPA World Award 2024. Dòng thẻ nhớ Lexar ARMOR với vỏ thép không gỉ 316, chống nước và bụi theo chuẩn IP68, phù hợp cho việc quay phim ngoài trời, cũng là điểm nhấn tại sự kiện này.</p>

	<p>Lexar ra mắt loạt sản phẩm mới tại IFA 2024: Có cả ổ cứng hub cực xịn sắp ra mắt ở Việt Nam dành cho các content creator</p>


	<p>Lexar ra mắt loạt sản phẩm mới tại IFA 2024: Có cả ổ cứng hub cực xịn sắp ra mắt ở Việt Nam dành cho các content creator</p>
	<img src="../assets/upload/news/10.webp" alt="Thẻ Nhớ CFexpress 4.0">

	<p>Tại Việt Nam, Lexar trong tháng 9 này sẽ giới thiệu ổ cứng Lexar Professional Go Portable SSD with Hub. Sản phẩm này đã và đang được đề cử tại hạng mục "Thiết bị công nghệ sáng tạo dành cho công việc" tại giải thưởng thường niên Better Choice Awards do Trung tâm Đổi mới sáng tạo Quốc gia phối hợp tổ chức cùng Công ty cổ phần VCCorp. Better Choice Awards dưới sự chỉ đạo của Bộ Kế hoạch và Đầu tư nhằm tri ân và tôn vinh những đột phá đổi mới sáng tạo về sản phẩm, dịch vụ, thành tựu mang đến lợi ích thiết thực cho người tiêu dùng.</p>

	<p>Tại Việt Nam, Lexar được biết tới như là thương hiệu cung cấp các giải pháp lưu trữ bao gồm thẻ nhớ, SSD, RAM... phục vụ nhu cầu người dùng cá nhân và doanh nghiệp. Các sản phẩm của Lexar đều được đánh giá cao về độ bền và hiệu suất, là lựa chọn phổ biến trong cộng đồng sáng tạo và người dùng chuyên nghiệp tại Việt Nam.</p>
		
    </main>


	<div class="benefit mt-2">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content mr-1">
							<h6>Bảo hành 1 năm</h6>
							<p>Sản phẩm chính hãng với bảo hành tối thiểu 1 năm</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content mr-1">
							<h6>Thanh toán dễ dàng</h6>
							<p>Có nhiều cách thanh toán</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>30 ngày đổi trả hàng</h6>
							<p>Có thể đổi trả hàng bị lỗi trong 30 ngày</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Thời gian làm việc</h6>
							<p>8h sáng - 17h30 chiều</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

   
    
    <!-- /.content -->
	 
    <div class="bottom-0">
	<!-- Newsletter -->

		<div class="newsletter mt-5 container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Nhận tin tức</h4>
						<p>Theo dõi để nhận ưu đãi mới nhất của chúng tôi</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Nhập email của bạn" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<footer class="footer" id="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-lg-4 col-md-12 footer-widget footer-about">
                    <div class="footer-logo">
                        <img src="../assets/images/logo VS_new.png" alt="Footer Logo">
                    </div>
                    <h4 class="title">CÔNG TY CỔ PHẦN TIN HỌC VIẾT SƠN</h4>
                    <p class="desc">CÔNG TY CỔ PHẦN TIN HỌC VIẾT SƠN luôn cung cấp sản phẩm chính hãng, thông tin rõ ràng, và chính sách ưu đãi lớn cho khách hàng có thẻ thành viên.</p>
                </div>
                <!-- Contact Info -->
                <div class="col-lg-4 col-md-12 footer-widget">
                    <h3 class="widget-title">Thông tin chi nhánh</h3>
                    <ul class="list-info">
                        <li>(028) 39293770 - (028) 39293765</li>
                        <li><a href="mailto:support@vietsontdc.com">support@vietsontdc.com</a></li>
                        <li><b>CHI NHÁNH HÀ NỘI:</b> Tầng 4, Tòa nhà Viet Tower, số 01 phố Thái Hà, P. Trung Liệt, Q. Đống Đa, TP Hà Nội</li>
                        <li><b>TRỤ SỞ CHÍNH & TTBH HCM:</b> 150 Ter, đường Bùi Thị Xuân, phường Phạm Ngũ Lão, Quận 1, TP. Hồ Chí Minh</li>
                    </ul>
                </div>
                <!-- Policies -->
                <div class="col-lg-4 col-md-12 footer-widget">
                    <h3 class="widget-title">Chính sách mua hàng</h3>
                    <ul class="list-info">
                        <li><a href="?mod=page&page_id=2">Quy định - chính sách</a></li>
                        <li><a href="#">Chính sách bảo hành - đổi trả</a></li>
                        <li><a href="#">Chính sách đại lý</a></li>
                        <li></li>
                        <li><a href="#">Chính sách thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div id="foot-bot">
        <div class="container">
            <p>&copy; <span id="current-year"><script>document.write(new Date().getFullYear());</script></span> Bản quyền thuộc về <a href="https://www.vietsontdc.com/" ref="nofollow">CÔNG TY CỔ PHẦN TIN HỌC VIẾT SƠN</a></p>
        </div>
    </div>
</footer>

<style>
		/* General Footer Styling */
.footer {
    background-color: #ffff;
    padding: 40px 0;
}

.footer-main {
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
}

.footer-logo img {
    max-width: 100%;
    height: auto;
}

.title {
    font-size: 22px;
    color: #333;
    margin-top: 15px;
    margin-bottom: 15px;
}

.desc {
    font-size: 14px;
    color: #666;
}

.widget-title {
    font-size: 18px;
    color: #333;
    margin-bottom: 15px;
    font-weight: bold;
}

.list-info {
    list-style: none;
    padding: 0;
    margin: 0;
}

.list-info li {
    margin-bottom: 10px;
    font-size: 14px;
    color: #555;
}

.list-info a {
    color: #d9534f; /* Bootstrap's red color */
    text-decoration: none;
}

.list-info a:hover {
    text-decoration: underline;
}

/* Footer Bottom Styling */
#foot-bot {
    background-color: #FF0000;
    color: #FFFFFF;
    padding: 15px 0;
}

#foot-bot p {
    text-align: center;
    margin: 0;
    font-size: 14px;
}

#foot-bot a {
    color: #FFFFFF;
    text-decoration: none;
}

#foot-bot a:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-widget {
        text-align: center;
        margin-bottom: 20px;
    }
}

</style>
   
    

</div>
</div>

			</div>
		</footer>
	</div>
</div>

		<div class=" float-right " style=" z-index:2;position: fixed;right:5px;bottom: 50px;" data-toggle="modal" data-target="#dialog1">
			<img style="width: 150px;" src="../assets/upload/user/rosa.gif">
			
		</div>
<div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="p-3 float-right"><i class="fa fa-times float-right" data-dismiss="modal" aria-hidden="true"></i></div>
            <div class="modal-header p-0">
				<div class="container text-center h-100">
					<h4 class="text-white-50 mb-5">Liên hệ với chúng tôi</h4>
				</div>
			</div>
            <div class="modal-body pt-0">
				<form id="review_form" method="post" class="mt-3"
				action="index.php?controller=feedbacks&action=createFeedbacks"> 
				<div>
					<h5>Thông tin cá nhân</h5>
					<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" 
					value="">
					<input id="review_email" class="form_input input_email" type="email" name="email"  placeholder="Email*" required="required" 
					value="">
					<a href="https://zalo.me/0909613837" target="_blank">Liên hệ qua Zalo</a>

				</div>
				<div>
					<h5>Góp ý của bạn:</h5>
					
					<textarea  id="content" class="input_review" name="content"  placeholder="Nội dung" rows="4" required data-error="Please, leave us a review."></textarea>
					
				</div>
				<div class="text-left text-sm-right">
					<button type="submit" class="red_button review_submit_btn trans_300" >Gửi đi </button>
					
				</div>
				</form>
            </div>
        
        </div>
    </div>
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/products_carts.js"></script>