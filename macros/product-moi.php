<div class="container floor__title1">
	<div class="column-1 column">
		<div class="floor__text1">
			<div class="floor__text__val">TẦNG</div>
		</div>
		<div class="floor__number">2</div>
	</div>
	<div class="column-4 column"></div>
	<div class="floor__name">
		Sản Phẩm Mới
		<i class="fa fa-angle-double-down"></i>
	</div>
	<div class="column-1 column"></div>
	<div class="clearfix"></div>
	<div class="list-item-km">
			<?php 
				$sql= "SELECT * FROM product WHERE type = 0";
				$query = mysql_query($sql);
				while($row = mysql_fetch_array($query)){
			?>
			<div class="col-md-3">
			<div class="item">
				<img src="<?php echo 'images/'.$row['images'] ; ?>">
				<div class="des">
					<h3><?php echo $row['name'] ?></h3>
					<p><span class="primary-km-price"><?php echo number_format($row['price']-$row['price']*$row['promotion']/100,3).'₫'; ?></span><?php if($row['promotion']) 
						{
							?> 
						<span class="fore-km-price"><?php echo number_format($row['price'],3).'₫' ?></span>
						<?php 
							}
						?></p>
					<div class="clearfix"></div>
				</div>
				<div class="des-full">
					<h3><?php echo $row['name']; ?></h3>
					<p><?php echo $row['price']?> ₫</p>
					<p>HDH: <?php echo $row['hdh'] ?></p>
					<p>CPU: <?php echo $row['cpu'] ?></p>
					<p>ROM: <?php echo $row['rom'] ?>Gb, Ram: <?php echo $row['ram'] ?>Gb</p>
					<p>Camera: <?php echo $row['camera'] ?> MP, Selfile: <?php echo $row['selfile'] ?>MP</p>
					<p>PIN: <?php echo $row['pin'] ?>mAh, SIM: <?php echo $row['sim'] ?> SIM</p>
				</div>
				<?php if($row['promotion']) { ?>
					<span class="iconlct vuacohang">&nbsp;Giảm - <?php echo $row['promotion']?>%&nbsp;</span>
				<?php 
				 }
				?>
				<a href="detail-product.php?id=<?php echo $row['id'] ?>" class="link-km"></a>
				<a  class="addcart" href="macros/addcart.php?item=<?php echo $row['id'] ?>"><img src="images/addcart.png"></a>
			</div>
		</div>
			<?php 
				}
			?>
	</div>
</div>