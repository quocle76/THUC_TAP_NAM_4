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
					<a href=""><i class="fa fa-arrow-left" aria-hidden="true"></i> Mua thêm sản phẩm khác</a>
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
								 $total += $_SESSION['cart'][$data['id']]*$data['price'];
							?> 
							<p class="priceGia"><?php echo number_format($total) ?></p>
							<?php } ?>
							<div class="clearfix"></div>
							<p class="codeGiamgia"><a href=""><span>Sử dụng mã giảm giá</span></a></p>
							<div class="clearfix"></div>
						</div>
						<div class="thongTinGiaohang">
							<form>
								<input type="radio" name="gender" value="female" id="female">
								<label for="female">Anh</label>
								<input type="radio" name="gender" value="male" id="male">
								<label for="male">Chị</label> <br />
								<input type="text"  name="name" placeholder="Họ và tên" />
								<input type="text" name="sdt" placeholder="Số điện thoại" />
								<div class="clearfix"></div>
								<input type="text" name="yeu-cau" placeholder="Yêu cầu khác(không bắt buộc)" />
								<p class="phuc-vu">Để được phục vụ nhanh hơn, <span>hãy chọn thêm:</span></p>
								<input type="radio" name="address" value="address" id="adddress">
								<label for="adddress">Địa chỉ giao hàng</label>
								<input type="radio" name="address" value="sieu-thi" id="sieu-thi">
								<label for="sieu-thi">Nhận hàng tại siêu thị</label> <br />
								<select>
									<option>1</option>
									<option>1</option>
								</select>
								<input type="text" placeholder="Số nhà, tên đường, phường / xã" name="phuong-xa" />
								<div class="clearfix"></div>
								<div class="dat-hang-detail">
									<a href="">THANH TOÁN ONLINE<p>Bằng thẻ ATM, Visa, Master</p></a>
									<a href="">THANH TOÁN KHI NHẬN HÀNG<p>Xem hàng trước, không mua không sao</p></a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="phuongthucThanhtoan">
				
			</div>
		</div>
