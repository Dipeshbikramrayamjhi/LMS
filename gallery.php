<?php
include "./backend/config/config.php";
include "./backend/config/db.php";
$products = $obj->select('tbl_product LIMIT 12');
include "includes/header.php";
?>

<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<h2>Our Gallery</h2>
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
					</div>
					<?php } ?>
					<!-- /shop -->

				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

        <?php 
include "includes/footer.php";
?>