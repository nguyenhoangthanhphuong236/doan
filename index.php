<?php include_once './libs/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="Css/trangchu.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="Image/logo.png" />
	<link rel="stylesheet" href="./public/css/main.css">
	<title>Trang chủ</title>
</head>

<body onload="autoloading()">
	<!-- Section header -->
	<?php include_once './inc/header.php'; ?>

	<script src="JS/load.js"></script>
	<div class="anh-nen" style="margin-top: 15px ;">
		<img src="./public/images/nen1.jpg" height="300px" width="100%" id="anh-nen-a" >
		<div class="tieu-de-anh-nen=nen">

		</div>
	</div>
	
	<div class="clear"></div>

	<div class="phan2" id="phan-menu">
		<div class="bao-bang">
			<div class="bang-n">
				<div class="row">
					<div class="col-md-3">
						<div class="row1">
							<div class="btn-group-vertical">
								<button type="button" class="btn btn-danger">Video</button>
								<video src="videos/aoquan.mp4" width="351" controls=""></video>
							</div>	
						</div>
						<div class="row1">
							<div class="btn-group-vertical taobang">
								<button type="button" class="btn btn-danger">Một số tin tức</button><br>
								<table class="table table-hover text-center">
									<tr>
										<td>Áo croptop nữ một số kiểu đang có sale 30%.</td>
									</tr>
									<tr>
										<td>Tham quan shop với những kiểu dáng đẹp.</td>
									</tr>
									<tr>
										<td>Hãy cùng bạn bè đến nhận ngay những Voucher nào!</td>
									</tr>
									<tr>
										<td>Có rất nhiều mẫu quần áo mới về của shop mời các bạn ghé xem.</td>
									</tr>
									<tr>
										<td>Tư vấn, hỗ trợ khách hàng khi mua hoặc đổi trả sản phẩm.</td>
									</tr>
									<tr>
										<td>Tư vấn về chính sách và quy định đổi trả hàng.</td>
									</tr>
									<tr>
										<td>Với những khuyến mãi vào các ngày đặc biệt cực lớn.</td>
									</tr>
								</table>
							</div>
						</div>
					</div>	
					
					<div class="col-md-9">
						<div class="ten-bang">
						<h1 style="border-bottom: 3px rgb(212, 109, 12) solid;" class="sp"><marquee behavior="alternate">SẢN PHẨM HOT NHẤT TUẦN</marquee></h1>
						</div>
						<div class="san-pham">
							<!-- Vung du lieu -->
							<?php
								$products = getAllProducts();
								foreach($products as $row) { ?>
								<div class="column">
									<div class="item-column">
										<img class="image" src="<?php echo $row['image']; ?>" / width="85%" height="150px">
										<div class="ten-item-column">
											<a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
										</div>
										<p class="gia"><?php echo number_format($row['price'],3,"."," "); ?>đ</p>
										<a class="btn btn-default" href="order.php?id=<?php echo $row['id']; ?>">Đặt hàng</a>
									</div>
								</div>		
							<?php	} ?>
							
						</div>
					</div>
				</div><!--end row-->
			</div><!--end bang-n-->

			<div class="clear"></div>

			<div class="container-fluid" style="margin-top: 10px">
				<div class="row">
					<div class="ten-bang" style="margin-top: 30px">
						<h1 style="border-bottom: 3px rgb(212, 109, 12) solid;">ƯU ĐÃI ĐẶT BIỆT</h1>
					</div>
					<div class="col-md-12 chinhanh" style="margin-top: 10px">
						<div class="uu-dai">
							<img src="./public/images/uudai.jpg" height="450px" width="100%" id="uudai-a">
							<div class="uu-dai-anh=uudai">

							</div>	
						</div>
					</div>
				</div>
			</div><!--end container-fluid-->

			<div class="ten-bang" style="margin-top: 30px">
				<h1 class="text-uppercase" style="border-bottom: 3px rgb(212, 109, 12) solid;">Một số sản phẩm ưu tiên</h1>
			</div>
			<div class="san-pham">
				<!--vùng dữ liệu-->
				<?php
								$products = getAllProducts1();
								foreach($products as $row) { ?>
								<div class="column">
									<div class="item-column">
										<img class="image" src="<?php echo $row['image']; ?>" / width="85%" height="150px">
										<div class="ten-item-column">
											<a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
										</div>
										<p class="gia"><?php echo number_format($row['price'],3,"."," "); ?>đ</p>
										<a class="btn btn-default" href="order.php?id=<?php echo $row['id']; ?>">Đặt hàng</a>
									</div>
								</div>		
							<?php	} ?>
				
			</div>

		</div>

	</div>



	<!-- tin tức - khuyến mãi -->
	<div class="clear"></div>
	<div class="ten-bang" id="km" style="margin-top: 20px;">
		<h1 style="border-bottom: 3px rgb(212, 109, 12) solid;">TIN TỨC - KHUYẾN MÃI</h1>
	</div>
	<div class="tin-tuc">

		<div class="column-tintuc">
			<div class="item-column-tintuc">
				<img class="image" src="https://media.shoptretho.com.vn/upload/image/news/20190408/600-x-415.png" />
				<div class="ten-item-column">
					<a href="#">MỪNG SINH NHẬT SHOP HN22 – SĂN ĐỒ THẢ GA</div></a>
				<p>“MỪNG SINH NHẬT SHOP HN22 – SĂN ĐỒ THẢ GA” Mừng sinh nhật của thương hiệu…</p>


			</div>
		</div>

		<div class="column-tintuc">
			<div class="item-column-tintuc">
				<img class="image" src="https://image.thanhnien.vn/1024/uploaded/quochung.qc/2021_01_18/luxmeshop/2_dnvf.jpg" />
				<div class="ten-item-column">
					<a href="#">HN22  – SALE 20% KHI MUA TẠI SHOP VÀ 10% KHI MUA ONLINE…</div></a>
				<p>Tưng bừng chào đón cửa hàng thời trang nữ HN22 gia nhập chương trình thứ tư vui vẻ của…</p>

			</div>
		</div>

		<div class="column-tintuc">
			<div class="item-column-tintuc">
				<img class="image" src="https://salt.tikicdn.com/cache/w444/ts/product/ce/01/bd/201fb6aa5f47073025356d8c835725a5.jpg" />
				<div class="ten-item-column">
					<a href="#">RA MẮT SẢN PHẨM SHOP HN22 2021 MỚI NHẤT!</div></a>
				<p>Chiếc đầm ullzang – một chiếc đầm dễ thương, cá tính dành riêng cho phái nữ. Chất liệu vải…</p>

			</div>
		</div>

		<div class="column-tintuc">
			<div class="item-column-tintuc">
				<img class="image" src="https://doboinusunny.com/wp-content/uploads/2018/05/8761150915_348721872.jpg" />
				<div class="ten-item-column">
					<a href="#"> RA MẮT SET ĐỒ NGỦ CỦA SHOP HN22 VÀO NĂM 2021!</div></a>
				<p>HN22 áp dụng giao hàng miễn phí, tiết kiệm thêm 20% trên tổng hóa đơn chỉ cần làm theo…</p>

			</div>
		</div>
	</div>

	<div class="container">	
		<div class="row text-center" style="margin-top: 20px;">
			<div class="col-md-3" style="margin-top: 20px;">
				<img class="chinhsua" src="https://png.pngtree.com/element_our/png_detail/20181228/delivery-truck-vector-icon-png_296956.jpg" width="100%" height="100px"  >
				<p class="chinhchu">Free ship 64 tỉnh</p>
				<p>Áp dụng cho hóa đơn trên 500k.</p>
			</div>
			<div class="col-md-3" style="margin-top: 20px;">
				<img class="chinhsua" src="https://glovi.vn/wp-content/uploads/2018/04/chuong-goi-khong-day-icon-1521165655.png" width="100%" height="100px">
				<p class="chinhchu">Đổi trả hàng miễn phí</p>
				<p>Trong vòng 1 tháng.</p>
			</div>
			<div class="col-md-3" style="margin-top: 20px;">
				<img class="chinhsua" src="http://bizweb.dktcdn.net/100/216/592/themes/707614/assets/icon-service-recieve-money.png?1621158435073" width="100%" height="100px">
				<p class="chinhchu">Thanh toán tại nhà</p>
				<p>Kiểm tra hàng trước khi thanh toán.</p>
			</div> 
			<div class="col-md-3" style="margin-top: 20px;">
				<img class="chinhsua" src="https://thumbs.dreamstime.com/b/authentic-stamp-red-authentic-stamp-sign-icon-illustration-authentic-stamp-red-authentic-stamp-icon-161667497.jpg" width="100%" height="100px" >
				<p class="chinhchu">Chất lượng Authentic</p>
				<p>Xài hàng hiệu không cần tiền triệu.</p>
			</div>
		</div><!--end row-->
	</div><!--end container-->


	
	<!-- footer -->

	<?php include_once './inc/footer.php' ?>
</body>
<script src="./public/js/Cart.js"></script>

<script type="text/javascript">
	var vimg = document.getElementById("anh-nen-a");
	var t;
	var i = 1;
	function autoloading(){
		t = setInterval(function autoloading(){
			i++;
			if(i>3){
				i=1;
			}
			vimg.src="./public/images/" + "nen" + i + ".jpg";
		},2000)
	}
</script>

<script type="text/javascript">
	var vimg = document.getElementById("uudai-a");
	var t;
	var i = 1;
	function autoloading(){
		t = setInterval(function autoloading(){
			i++;
			if(i>3){
				i=1;
			}
			vimg.src="./public/images/" + "uudai" + i + ".jpg";
		},2000)
	}
</script>


<script src="JS/login_registration.js"></script>

</html>
