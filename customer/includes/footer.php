<div id="footer">

	<div class="container">

		<div class="row">

			<div class="col-sm-6 col-md-3">

				<h4>Pages</h4>

				<ul>

					<li><a href="../cart.php">Shopping Cart</a></li>
					<li><a href="../contact.php">Contact Us</a></li>
					<li><a href="../shop.php">Shop</a></li>
					<li><a href="my_account.php">My Account</a></li>
					
				</ul>

				<hr>

				<h4>User Section</h4>

				<ul>
					
					<?php 

                           if(!isset($_SESSION['customer_email'])){

                            echo "<a href='../checkout.php'>Login</a>";

                           } else{

                            echo"<a href='my_account.php?my_orders'>My Account</a>";

                           }

                    ?>

					<li>

						<?php 

                           if(!isset($_SESSION['customer_email'])){

                            echo "<a href='../checkout.php'>Login</a>";

                           } else{

                            echo"<a href='my_account.php?edit_account'>Edit Account</a>";

                           }

                    ?>

					</li>

				</ul>

				<hr class="hidden-md hidden-lg hidden-sm">
				
			</div>

			<div class="com-sm-6 col-md-3">

				<h4>Top Product Categories</h4>

				<ul>
					
					<?php

					$get_p_cats = "select * from product_categories";

					$run_p_cats = mysqli_query($con,$get_p_cats);

					while($row_p_cats = mysqli_fetch_array($run_p_cats)){

						$p_cat_id = $row_p_cats['p_cat_id'];

						$p_cat_title = $row_p_cats['p_cat_title'];

						echo "

						<li>

						<a href='../shop.php?p_cat=$p_cat_id'>

						$p_cat_title

						</a>

						</li>

						";
					}

					?>

				</ul>

				<hr class="hidden-md hidden-lg">
				
			</div>

			<div class="col-sm-6 col-md-3">

				<h4>Find Us</h4>

				<p>
					<a><strong>Ruwanthi Plant Nursery</strong></a>
					<a><br/>Maho,Kurunegala</a>
					<a><br/>+94715019049</a>
					<a><br/>rtplants@gmail.com</a>

				</p>

				<a href="../contact.php">Check Our Contact Page</a>

				<hr class="hidden-md hidden-lg">
				
			</div>

			<div class="col-sm-6 col-md-3">

				<h4>Keep In Touch</h4>

				<p class="social">
					<a href="../#" class="fa fa-facebook"></a>
					<a href="../#" class="fa fa-twitter"></a>
					<a href="../#" class="fa fa-instagram"></a>
					<a href="../#" class="fa fa-google-plus"></a>
					<a href="../#" class="fa fa-envelope"></a>
					
				</p>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div id="copyright">

	<div class="container">

		<div class="col-md-6">

			<p class="pull-left">&copy; 2020 Ruwanthi Plant Nursery All Rights Reserved</p>
			
		</div>
		
	</div>
	
</div>