<?php include 'header.php';?>
<main>
	<section class="breadcrumbs">
		<div class="container">
			<div class="info-bread text-left">
				<h2>Checkout</h2>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="index.php">Trang chủ</a></li>
					<li class="list-inline-item"><a href="product.php">Shop</a></li>
					<li class="list-inline-item"><span>Comapre</span></li>
				</ul>
			</div>
		</div>
	</section>
	<section id="checkout">
		<div class="container">
			<div class="title nuni">
				<h2 class="nuni">Billing Details</h2>
			</div>
			<div class="content-checkout">
				<div class="row">
					<div class="col-md-6">
						<div class="form-checkout">
							<div class="item">
								<label>Họ và tên người nhận*</label>
								<input type="text">
							</div>
							<div class="item">
								<label>Số điện thoại*</label>
								<input type="text">
							</div>
							<div class="item">
								<label>Địa chỉ nhận hàng*</label>
								<input type="text">
							</div>
							<div class="item">
								<label>Email</label>
								<input type="text">
							</div>
							<div class="item">
								<label>Ghi chú đơn hàng</label>
								<textarea name="" id="" cols="30" rows="10"></textarea>
							</div>
							<div class="item">
								<input type="checkbox" id="check-mem">
								<label for="check-mem" class="check-mem">Ship to a different address?</label>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-box-order">
							<div class="title text-center">Your Order</div>
							<div class="list-order">
								<div class="item-order">
									<div class="prd-left">
										<div class="order-prd">
											<div class="avarta"><a href="product-detail.php"><img src="images/order.jpg" class="img-fluid" alt=""></a></div>
											<div class="info">
												<h4><a href="product-detail.php">French Tile Bedspread</a></h4>
											</div>
										</div>
									</div>
									<div class="price">$445</div>
								</div>
								<div class="item-order">
									<div class="prd-left">
										<div class="order-prd">
											<div class="avarta"><a href="product-detail.php"><img src="images/order.jpg" class="img-fluid" alt=""></a></div>
											<div class="info">
												<h4><a href="product-detail.php">French Tile Bedspread</a></h4>
											</div>
										</div>
									</div>
									<div class="price">$445</div>
								</div>
								<div class="item-order">
									<div class="prd-left">
										<div class="order-prd">
											<div class="avarta"><a href="product-detail.php"><img src="images/order.jpg" class="img-fluid" alt=""></a></div>
											<div class="info">
												<h4><a href="product-detail.php">French Tile Bedspread</a></h4>
											</div>
										</div>
									</div>
									<div class="price">$445</div>
								</div>
							</div>
							<ul>
								<li>
									<p>Subtotal</p>
									<p>$3100</p>
								</li>
								<li>
									<p>Shipping and Handing</p>
									<p>Free Shipping</p>
								</li>
								<li>
									<p>Total</p>
									<p class="total">$3100</p>
								</li>
							</ul>
						</div>
						<div class="method-order">
							<ul class="list-inline">
								<li class="list-inline-item">
									<input type="radio" id="order-1" name="order" checked>
									<label for="order-1">Chuyển khoản</label>
								</li>
								<li class="list-inline-item">
									<input type="radio" id="order-2" name="order">
									<label for="order-2">Thanh toán khi nhận hàng</label>
								</li>
							</ul>
							<div class="box-info-bank">
								<p>STK: <strong>13245678932121</strong></p>
								<p>Tên chủ TK: Công ty TNHH Vietnam Lighting</p>
								<p>Ngân hàng BIDV chi nhánh Hoàn Kiếm</p>
							</div>
						</div>
						<div class="addto-cart text-right"><a href="" style="height: 50px;">PLACE ORDER</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>     
      