<?php include "./include/header.php"; ?>
	<!-- End Header -->
	<section id="content">
		<div class="container">
			<div class="content-page">
				
				<!-- ENd Banner -->
				<div class="content-cart-checkout woocommerce">
					<h2 class="title30 font-bold text-uppercase">Cart</h2>
					<form method="post">
						<div class="table-responsive">
							<table class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td class="product-remove">
											<a class="remove" href="#"><i class="fa fa-times"></i></a>
										</td>
										<td class="product-thumbnail">
											<a href="#"><img  src="images/product/fruit_01.jpg" alt=""/></a>					
										</td>
										<td class="product-name" data-title="Product">
											<a href="#">Theme Fusion item name</a>					
										</td>
										<td class="product-price" data-title="Price">
											<span class="amount">₹68.00</span>					
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="detail-qty info-qty border radius6 text-center">
												<a href="#" class="qty-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<span class="qty-val">2</span>
												<a href="#" class="qty-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
											</div>		
										</td>
										<td class="product-subtotal" data-title="Total">
											<span class="amount">₹68.00</span>					
										</td>
									</tr>
									<tr class="cart_item">
										<td class="product-remove">
											<a class="remove" href="#"><i class="fa fa-times"></i></a>					
										</td>
										<td class="product-thumbnail">
											<a href="#"><img src="images/product/fruit_02.jpg" alt=""/></a>					
										</td>
										<td class="product-name" data-title="Product">
											<a href="#">Theme Fusion item name</a>					
										</td>
										<td class="product-price" data-title="Price">
											<span class="amount">₹19.00</span>					
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="detail-qty info-qty border radius6 text-center">
												<a href="#" class="qty-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<span class="qty-val">2</span>
												<a href="#" class="qty-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
											</div>			
										</td>
										<td class="product-subtotal" data-title="Total">
											<span class="amount">₹38.00</span>					
										</td>
									</tr>
									<tr>
										<td class="actions" colspan="6">
											<div class="coupon">
												<label for="coupon_code">Coupon:</label> 
												<input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> 
												<input type="submit" value="Apply Coupon" name="apply_coupon" class="button bg-color">
											</div>
											<input type="submit" value="Update Cart" name="update_cart" class="button bg-color">			
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
					<div class="cart-collaterals">
						<div class="cart_totals ">
							<h2>Cart Totals</h2>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><strong class="amount">₹106.00</strong></td>
										</tr>
										<tr class="shipping">
											<th>Shipping</th>
											<td>
												<ul class="list-none" id="shipping_method">
													<li>
														<input type="radio" class="shipping_method" checked="checked" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_free_shipping">Free Shipping</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_delivery">Local Delivery (Free)</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td><strong><span class="amount">₹106.00</span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="wc-proceed-to-checkout">
								<a class="checkout-button button alt wc-forward bg-color" href="#">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- End Content Pages -->
	</section>
	<!-- End Content -->

<?php include "./include/footer.php"; ?>
</body>

<!-- Mirrored from demo.7uptheme.com/html/fruitshop/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 02:29:28 GMT -->
</html>