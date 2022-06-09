<?php
include "./backend/config/config.php";
include "./backend/config/db.php";

$products = $obj->select('tbl_product');
$p = $obj->select('tbl_product LIMIT 15');
$fslider = $obj->select('tbl_product LIMIT 3');
$fslider1 = $obj->select('tbl_product LIMIT 3,3');



include "includes/header.php";


?>



		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>

						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php while($slider = mysqli_fetch_assoc($p)){ ?>
										<div class="product">
											<div class="product-img">
												<img src="./backend/design/<?=$slider['design'];?>" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?=$slider['p_title'];?></a></h3>
												<h4 class="product-price"><?=$slider['dis_price'];?><del class="product-old-price"><?=$slider['price'];?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<?php } ?>
										<!-- /product -->


										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<h2>Our available products</h2>
					<!-- shop -->
					<?php while($product = mysqli_fetch_assoc($products)){ ?>
						<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./backend/design/<?=$product['design'];?>" class="img-fluid" alt="Shop image">
							</div>
							<!-- <div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div> -->
						</div>
						<p class="text-center" style="font-size:18px"><strong >Rs.<?=$product['price'];?></strong></p>
					</div>
					<?php } ?>
					<!-- /shop -->

				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>Users</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>

						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->


<?php 
include "includes/footer.php";
?>