<!DOCTYPE html>
<?php 
session_start();
include ('conn.php');
?>
<html>
<head>
	<title>Website Bán Điện Thoại</title>
	<link rel="stylesheet" type="text/css" href="includes/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/main.css">
	<link rel="stylesheet" type="text/css" href="includes/css/slick.css">
	<link rel="stylesheet" type="text/css" href="includes/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-detail-product.css">
	<link rel="stylesheet" type="text/css" href="css/gio-hang-detail.css">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
</head>
<body>
	
	<div id="mod-header-detail" class="module">
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
				<?php if(empty($_SESSION['name_user'])) { ?>
					<div class="none-sigin">
						<div class="list-button">
							<a href="#" class="loginDN">ĐĂNG NHẬP</a>
							<a href="#" class="btn btn-primary register registerDK">ĐĂNG KÝ</a>
						</div>
					</div>
				<?php 
					} 
				?>
				<?php if(!empty($_SESSION['name_user'])) { ?>
					<div class="done-sigin">
						<div class="info">
							<div class="avatar">
								<img src="images/avatar.jpg" class="img-fluid">
							</div>
							<div class="text">
								<p class="user"><?php echo $_SESSION['name_user'] ?></p>
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
			                    <a href="macros/sign-out.php">Thoát</a>
			                  </li>
			                </ul>
              			</div>
					</div>
				<?php 
					} 
					else {

					}
				?>
					<div class="clearfix"></div>

				</div>
				<div class="card">
            		<div class="img-card">
		 				<a href=""><img src="images/card.svg" class="" alt=""></a>
		            </div>
		            <div class="text">
		            <?php
						$ok=1;
						if(isset($_SESSION['cart']))
						{
							foreach($_SESSION['cart'] as $k=>$v)
							{	
								if(isset($k))
								{
								$ok=2;
								}
							}
						}

						if ($ok != 2)
						 { ?> 
		              		<p><span>0</span> sản phẩm</p>
			              <?php } else {
								$items = $_SESSION['cart'];?>
								<p><span><?php echo count($items) ?></span> sản phẩm</p>
								<?php 
							}
						?>
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
				        	<?php 
				        		$sql = 'SELECT * FROM category';
				        		$query = mysql_query($sql);
				        		while ($category = mysql_fetch_array($query)) { ?>
				        	
					            <li><a href="<?php echo $category['link_category'] ?>"> <i class="fa fa-angle-right"></i> <?php echo $category['name_category'] ?></a></li>
					        <?php		
				        		}
				        	 ?>
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
		<div class="wrap">
			<div class="avatarLG">
	     		 <img src="images/avatar.jpg">
			</div>
			<i></i>

			<form method="POST">
				<input type="text" placeholder="username" name="id_user" required>
				<input type="password" placeholder="password" name="pass_user" required>
				<button type="submit" name="submitSig">Sign in</button>
			</form>
			<?php 
				if(!isset($_POST['submitSig'])) {
					
				}
				else {
					$id_user = $_POST['id_user'];
					$pass_user = $_POST['pass_user'];
					$sql = "SELECT * FROM `user` WHERE `email_user`='$id_user' AND `pass_user`=$pass_user";
					$query = mysql_query($sql);
					$row = mysql_fetch_array($query);
					$total = mysql_numrows($query);
					if($total > 0){
						$_SESSION['name_user'] = $row['name_user'];
						$_SESSION['phone_user'] = $row['phone_user'];

					}
					else {
						echo  '<p style="color: red; font-size: 16px;"> Tài khoản hoặc mật khẩu của bạn bị sai.</p>';
					}
				}
			?>
			<img src="images/bidy-close.png" class="close-login">
		</div> 
		<div class="registerL">
			<div class="avatarLG">
	     		 <img src="images/avatar.jpg">
			</div>
			<i></i>
			<form method="POST" enctype="multipart/form-data">
				<input type="text" placeholder="username" name="user_gis" required>
				<input type="text" placeholder="email" name="mail_gis" required>
				<input type="password" placeholder="password" name="pass_gis" required>
				<input type="password" placeholder="re-password" name="pass_gisre" required>
				<input type="number" placeholder="phone" name="phone_gis" required>
				<input type="text" placeholder="Địa chỉ" name='address_gis' required />
				<input type="file" name="uploadFilee" id="uploadFilee" />
				<button type="submit" name="submitRegis">Register</button>
			</form>
			<?php 
				if(!isset($_POST['submitRegis'])) {
					// die();
				}
				else {
					$user_gis = $_POST['user_gis'];
					$mail_gis = $_POST['mail_gis'];
					$pass_gis = $_POST['pass_gis'];
					$pass_gisre = $_POST['pass_gisre'];
					$phone_gis = $_POST['phone_gis'];
					$address_gis = $_POST['address_gis'];

					if($_FILES['uploadFilee']['name'] != NULL){ // Đã chọn file
				    	//Kiểm tra định dạng tệp tin
					    	if($_FILES['uploadFilee']['type'] == "image/jpeg" || $_FILES['uploadFilee']['type'] == "image/png" || $_FILES['uploadFilee']['type'] == "image/gif"){
					        //Tiếp tục kiểm tra dung lượng
							        $maxFileSize = 10 * 1000 * 1000; //MB
							        if($_FILES['uploadFilee']['size'] > ($maxFileSize * 1000 * 1000)){
							            echo 'Tập tin không được vượt quá: '.$maxFileSize.' MB';
					        		} 	else {
							            //Hợp lệ tiếp tục xử lý Upload
							            $path = 'images/'; //Lưu trữ tập tin vào thư mục: images
							            $tmp_name = $_FILES['uploadFilee']['tmp_name'];
							            $hinh = $_FILES['uploadFilee']['name'];
							            $type = $_FILES['uploadFilee']['type']; 
							            $size = $_FILES['uploadFilee']['size']; 
							            //Upload file
							            move_uploaded_file($tmp_name,$path.$hinh);
					            
					        		}
						    	}
						    	else 
						    	{
						        	echo 'Tập tin phải là hình ảnh';
						    	}
						
					} else 
					{
						echo 'Vui lòng chọn tập tin';
					}	 

					if($user_gis && $mail_gis && $pass_gis && $pass_gisre && $phone_gis && $address_gis && $pass_gis == $pass_gisre){
						$sql = "SELECT * FROM user WHERE email_user = '$mail_gis'";
						$query = mysql_query($sql);
						if(mysql_numrows($query) > 0){
							echo 'Email tồn tại r nhé';
						}
						else {
							$addmember = mysql_query("INSERT INTO `user` (`name_user`, `email_user`, `pass_user`, `phone_user`, `address_user`, `avatar`) VALUES ('$user_gis', '$mail_gis', '$pass_gis', '$phone_gis', '$address_gis', '$hinh')");
						}
					}
					else {
						echo 'Nhập đầy đủ thông tin';
					}
				}
			?>
			<img src="images/bidy-close.png" class="close-login">
		</div>