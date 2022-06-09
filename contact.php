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
				<h2>Our Contact</h2>
					
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.45620559092!2d85.32047061467385!3d27.703197382793675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a64b5f13e1%3A0x28b2d0eacda46b98!2sPutalisadak%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1617556130905!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

        <?php 
include "includes/footer.php";
?>