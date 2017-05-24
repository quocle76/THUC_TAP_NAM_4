<!DOCTYPE html>
<html>
<head>
	<title>Website Bán Điện Thoại</title>
	<link rel="stylesheet" type="text/css" href="includes/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
</head>
<body>
	<div id="mod-header" class="module">
		<div class="container">
			<div class="content">
				<div class="logo">
					<img src="images/logo.jpg" class="img-fluid">
				</div>
				<div class="search">
					<form>
						<div class="form-group ">
					      <div class="msg-input ">
					        <input type="user" class="form-control" placeholder="Tìm kiếm sản phẩm">
					      </div>
					      <span class="message-error"></span>
					    </div>
					    <button class="btn btn-search btn-primary" type="submit">TÌM KIẾM</button>
					</form>
				</div>
				<div class="sign-in-out">
					<div class="none-sigin">
						<div class="list-button">
							<a href="" class="login">ĐĂNG NHẬP</a>
							<a href="" class="btn btn-primary register">ĐĂNG KÝ</a>
						</div>
					</div>
					<div class="done-sigin">
						<div class="info">
							<div class="avatar">
								<img src="images/avatar.jpg" class="img-fluid">
							</div>
							<div class="text">
								<p class="user">Chào Admin</p>
								<p>Tài khoản và đơn hàng</p>
								<b class="arrow-user"></b>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="sub-infor">
			                <ul>
			                  <li>
			                    <a href="">Đơn hàng của tôi</a>
			                  </li>
			                  <li>
			                    <a href="">Sổ tay nội trợ</a>
			                  </li>
			                  <li>
			                    <a href="profile.html">Thông tin tài khoản</a>
			                  </li>
			                  <li>
			                    <a href="">Thoát</a>
			                  </li>
			                </ul>
              			</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="card">
            		<div class="img-card">
		 				<a href=""><img src="images/card.svg" class="" alt=""></a>
		            </div>
		            <div class="text">
		              <p><span>0</span> sản phẩm</p>
		              <p><span>0</span> đ</p>
		            </div>
		            <div class="clearfix"></div>
		            <div class="sl-mb hidden">
		              <p>23</p>
		            </div>
		            <div class="clearfix"></div>
		        </div>
				<div class="clearfix"></div>
			</div>
			<div class="head-menu">
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				      </button>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="active category "><a href="#"> <i class="fa fa-align-justify"></i>  DANH MỤC SẢN PHẨM</a>
				        	<ul class="sub-category">
					            <li><a href="#"> <i class="fa fa-angle-right"></i> iPhone(Apple)</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> Samsung</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> OPPO</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> Sony</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> LG</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> Asus</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> Huawei</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> Lenovo</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> Xiaomi</a></li>
					            <li><a href="#"><i class="fa fa-angle-right"></i> Motorola</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Điện Thoại</a>
				        </li>
				        <li><a href="#">Giới Thiệu </a></li>
				        <li><a href="#">Bảo Hành</a></li>
				        <li><a href="#">Liên Hệ</a></li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
			<?php include('macros/slider-home.html'); ?>
			<div class="new-paper">
				<figure>
			        <h2><a href="/tin-tuc">Tin công nghệ</a></h2>
			        <b></b>
			            <a href="/tin-tuc" class="readmore">Đọc thêm</a>
			    </figure>
				<ul>
					<li><a href="">Nokia 3310 đời 2017: Không đơn thuần chỉ là một "cục gạch"! 
					</a><img src="images/nokia.jpg"></li>
					<li><a href="">Apple tung chiến dịch quảng cáo lôi kéo người dùng Android và Windows Phone </a><img src="images/window.jpg"></li>
					<li><a href="">Honor 6A ra mắt: RAM 3GB Snapdragon 435, Quick Charge 3.0, Android 7.1 giá từ</a><img src="images/window.jpg"></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<?php include('macros/cam-ket.php'); ?>
		</div>
		<?php include('macros/product-khuyen-mai.php'); ?>
	</div>
	<script type="text/javascript" src="includes/scripts/jquery.min.js" ></script>
	<script type="text/javascript" src="includes/scripts/bootstrap.min.js" ></script>
	<script type="text/javascript" src="scripts/script.js" ></script>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
</body>
</html>