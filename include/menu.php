<?php
	$sql_category = mysqli_query($mysqli, 'SELECT * FROM tbl_category ORDER BY category_id DESC');
	?>
<div class="navbar-inner ">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light ">
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<?php
						$sql_category_danhmuc = mysqli_query($mysqli, 'SELECT * FROM tbl_category ORDER BY category_id DESC');
						while ($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)) {
							
						?>

							<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link " href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id']; ?>; " role="button" aria-haspopup="true" aria-expanded="false">
								<?php   
								echo $row_category_danhmuc['category_name'];

						?>
								</a>
							</li>
						<?php
						}

						?>

						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product.html">Tin Tức</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="product.html">Sản phẩm mới</a>


								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="checkout.html">Kiểm tra hàng</a>
								<a class="dropdown-item" href="payment.html">Thanh toán</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">liên hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
