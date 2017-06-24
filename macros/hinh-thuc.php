  <?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?php
include ('conn.php');
?>

<?php
	$ok=1;
	if(isset($_SESSION['cart']))
	{
		foreach($_SESSION['cart'] as $k => $v)
		{
			if(isset($k))
			{
				$ok=2;
			}
		}
	}
	if($ok == 2)
	{
		foreach($_SESSION['cart'] as $key=>$value)
		{
			$item[]=$key;
		}
		$str=implode(",",$item);
		$sql="SELECT * FROM product WHERE id in ($str)";
		$query=mysql_query($sql);
		?>
		<div class="container gio-hang-detail">
			<div class="content-gio-hang-detail">
				<div class="action-gio-hang">
					<a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Mua thêm sản phẩm khác</a>
					<p>Giỏ hàng của bạn</p>
					<div class="clearfix"></div>
				</div>
				<div class="wrap_cart">
					<div class="row">
					 <?php
					while($row=mysql_fetch_array($query))
					{
				?>
						<div class="item-gio-hang">
							<div class="col-md-2 image-product-gio-hang">
								<img src="images/product/pr1.jpg">
								<a href="macros/unset_cart.php?productid=<?php echo $row['id'] ?>" class="delete"><i class="fa fa-times-circle" aria-hidden="true"></i> Xóa</a>
							</div>
							<div class="col-md-7 name-color ">
								<h1><?php echo $row['name'] ?></h1>
								<p>Màu: <span><?php echo $row['color'] ?></span></p>
							</div>
							<div class="col-md-3 querty">
								<p class="price-gioi-hang"><?php echo number_format($row['price']-$row['price']*$row['promotion']/100,3).'₫'; ?></p>
								<div class="choosenumber">
			                        <a href="macros/abate.php?productid=<?php echo $row['id'] ?>"><img src="images/tru.png" class="abate"></a>
			                        <div class="number"><?php if($_SESSION['cart'][$row['id']] != 0 ) {
			                        		echo $_SESSION['cart'][$row['id']];
			                        	}else {	header('location: macros/unset_cart.php?productid= echo $row[id]');
			                        		}?></div>
			                        <a href="macros/augment.php?productid=<?php echo $row['id'] ?>"><img src="images/cong.png" class="augment" ></a>
			                        <div class="clearfix"></div>
			                    </div>
			                    <div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>

						<?php

								}
							}
						?>
						<div class="tongPrice">
							<p class="textTongtien">Tổng tiền: </p>
							 <?php
								foreach($_SESSION['cart'] as $key=>$value)
								{
									$item[]=$key;
								}
								$str=implode(",",$item);
								$sql="SELECT * FROM product WHERE id in ($str)";
								$query=mysql_query($sql);
								$total = 0;
								while($data=mysql_fetch_array($query)){
								 $total += $_SESSION['cart'][$data['id']]*($data['price']-$data['price']*$data['promotion']/100);
							?>
							<?php } ?>
							<p class="priceGia"><?php echo number_format($total,3) ?></p>

							<div class="clearfix"></div>
							<p class="codeGiamgia"><a href=""><span>Sử dụng mã giảm giá</span></a></p>
							<div class="clearfix"></div>
						</div>
						<div class="thongTinGiaohang">
							<form method="POST">
								<input type="radio" name="gender" value="1" id="male">
								<label for="female">Anh</label>
								<input type="radio" name="gender" value="0" id="female">
								<label for="male">Chị</label> <br />
								<input type="text"  name="name" value="<?php if(isset($_SESSION['name_user'])) {
									echo $_SESSION['name_user']; }else {} ?>" placeholder="Họ và tên" />
								<input type="text" name="sdt" value="<?php if(isset($_SESSION['phone_user'])) {
									echo $_SESSION['phone_user']; }else {} ?>" placeholder="Số điện thoại" />
								<div class="clearfix"></div>
								<input type="text" name="yeu-cau" placeholder="Yêu cầu khác(không bắt buộc)" />
								<p class="phuc-vu">Để được phục vụ nhanh hơn, <span>hãy chọn thêm:</span></p>
								<input type="radio" name="address" value="address" id="adddress">
								<label for="adddress">Địa chỉ giao hàng</label>
								<input type="radio" name="address" value="sieu-thi" id="sieu-thi">
								<label for="sieu-thi">Nhận hàng tại siêu thị</label> <br />
								<input type="text" placeholder="Số nhà, tên đường, phường / xã" name="phuong-xa" />
								<select name="tinh-thanh" >
									<option select="select">Chọn Tỉnh Thành/ Phố</option>
										<?php $sql = "SELECT * FROM provinces ";
										$query = mysql_query($sql);
										while ($row = mysql_fetch_array($query)) { ?>
										<option value="<?php echo $row['title']?>"><?php echo $row['title'] ?></option>
										<?php } ?>
								</select>
								<div class="clearfix"></div>
								<div class="dat-hang-detail">
									<?php
										if(empty($_SESSION['name_user'])){
												?>
												<a href="#" class="loginDN">ĐĂNG NHẬP ĐỂ TIẾP TỤC</a>
										<?php } else {

											?>
											<strong>Chọn hình thức thanh toán</strong>
											<input type="submit" name="submitTT"  class="submitTT" value="TIẾP TỤC" /> 
											<?php
										}
									?>
								</div>
								
							</form>

						</div>
						<?php
								if(!isset($_POST['submitTT']))
								{

								}
								else {

										$name = $_POST['name'];
										$phone = $_POST['sdt'];
										$tinh = $_POST['tinh-thanh'];
										$phong = $_POST['phuong-xa'];
										$yeucau = $_POST['yeu-cau'];
										$total = $total;
										$gender = $_POST['gender'];
										$addmember = mysql_query("INSERT INTO `bill` (`name_bill`, `phone_bill`, `address1_bill`, `address2_bill`,`total_prices`,`request`,`gender`) VALUES ('$name', '$phone', '$tinh', '$phong','$total','$yeucau','$gender')");
								}
							?>
					</div>
				</div>
			</div>
			<div class="phuongthucThanhtoan">
				<p class=ngan-luong>Thanh Toán Bằng Ngân Lượng</p>
				<?php $sql = "SELECT * FROM bill ";
							$query = mysql_query($sql);
							$dataSHD = mysql_fetch_array($query);
				 ?>
				<form  class="form-thanh-toan" method="post" action="https://www.nganluong.vn/advance_payment.php">
					<input type=hidden name=receiver value="quoc95ntu@gmail.com" />
					<input type=hidden name=product value="<?php echo $dataSHD['id'] ?>" />
					<input type=hidden name=price value="<?php echo $total ?>" />
					<input type=hidden name=return_url value="http://complete.com/thank.php" />
					<input type=hidden name=comments value="dhsjhfdjhfjk" />
					<input type=image src="https://www.nganluong.vn/data/images/merchant/button/btn-buynow-121.png" />
				</form>
				<img src="images/close-TT.jpg" class="close_TT">
			</div>
		</div>
