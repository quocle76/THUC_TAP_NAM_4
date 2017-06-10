	<?php 
		$id = $_GET['id'];
		$sql= "SELECT * FROM product WHERE $id = id";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
	?>
	<div class="container">
		<h1 class="title-detail"><?php echo $row['name'] ?></h1>
		<div class="col-md-4">
			<?php include('slider-product.php'); ?>
		</div>
		<div class="col-md-5">
			<div class="content-detail">
				<h2 class="price-detail"><?php echo number_format($row['price']-$row['price']*$row['promotion']/100,3).'₫'; ?></h2>
				<div class="khuyen-mai-detail">
					<h5>2 KHUYẾN MÃI ÁP DỤNG ĐẾN 31/05</h5>
					<p>Trả góp thẻ HSBC <a href="">Xem chi tiết</a></p> 
					<p>Cơ hội trúng xe SH 150i khi mua iPhone Nha Trang, Đà Nẵng <a href="">Xem chi tiết</a></p>
				</div>
			</div>
			<div class="dat-hang-detail">
				<a href="macros/addcart.php?item=<?php echo $row['id'] ?>">MUA NGAY <p>Xem hàng không thích mua thì không mua</p></a>
				<a href="">MUA TRẢ GÓP <p>Xét duyệt qua điện thoại</p></a>
			</div>
			<p class="sdt-dat-mua">Gọi đặt mua:<a href=""> 01693072342</a>. <a href="">01647646758 </a>(7:30-22:00)</p>
			<div class="phu-kien">
				<ul class="policy">
					<li>Trong hộp có: <a href="">Sạc, Tai nghe, Sách hướng dẫn, Jack chuyển tai nghe 3.5mm, Cáp, Cây lấy sim</a></li>
					<li>Bảo hành chính hãng: thân máy 12 tháng, sạc 12 tháng, tai nghe 12 tháng</li>
					<li>Gia hàng tận nơi miễn phí trong <strong>30 phút</strong></li>
					<li><strong>1 đổi 1 trong 1 tháng </strong>với sản phẩm lỗi</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3">
			<div class="danh-sach-detail">
				<h5>Danh sách siêu thị</h5>
				<p>Số 2 Nguyễn Đình Chiểu, Nha Trang, Khánh Hòa <span>Có hàng, đặt giữ tại đây</span></p>
				<p>Số 30/10 Nguyễn Ảnh Thủ, Ấp Đông , xã Thới Tam Thôn, H. Hóc Môn , TP.HCM <span>Có hàng, đặt giữ tại đây</span></p>
			</div>
		</div>
		
	</div>
	<div class="container">
		<h1 class="title-detail"><?php echo $row['name'] ?></h1>
		<div class="col-md-8">
			<?php include ('slider-detail-product.php') ?>
			<div class="des">
				<p class="title-des">iPhone 7 Plus Red 128GB là phiên bản iPhone 7 Plus mới được Apple giới thiệu với màu sắc mới là màu Red nhằm kỉ niệm 10 năm hợp tác giữa Apple và (RED) – một tổ chức gây quỹ hỗ trợ phòng chống AIDS.</p>
				<?php echo $row['describe'] ?>
			</div>
		</div>
		<div class="col-md-4">
			<h4 class="thong-so-title-detail">Thông số kĩ thuật</h4>
			<div class="thong-so-detail">
				<ul>
					<li>Màn hình: <span><a href=""><?php echo $row['screen']; ?></span></li>
					<li>Hệ điều hành:<span><a href=""><?php echo $row['hdh'] ?></a></span></li>
					<li>Camera sau:<span>Camera <?php echo $row['camera'] ?> MP</span></li>
					<li>Camera trước:<span><?php echo $row['selfile'] ?> MP</span></li>
					<li>CPU:<span><?php echo $row['cpu'] ?></span></li>
					<li>RAM:<span><?php echo $row['ram'] ?> GB</span></li>
					<li>Bộ nhớ trong:<span><?php echo $row['memory'] ?></span></li>
					<li>Thẻ nhớ:<span>Không</span></li>
					<li>Thẻ SIM:<span><?php echo $row['sim'] ?> Nano SIM, hỗ trợ 4G</span></li>
					<li>Dung lượng pin:<span><?php echo $row['pin'] ?> mAh</span></li>
				</ul>
			</div>
		</div>
	</div>
