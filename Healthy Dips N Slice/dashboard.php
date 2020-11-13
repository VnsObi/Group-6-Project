<?php
  session_start();
  include 'config.php';
  include 'lib/header.php';
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to Healthy Dips N Slice</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">

<script>document.getElementsByTagName("html")[0].className += " js";</script>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class=>
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>(+234)7064910016</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>vnsobi@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
                                    <div class="login_button"><a href="user/login.php">Customer Login</a></div>
                                    <div class="login_button"><a href="user/login.php">Admin Login</a></div>
                                    <div class="login_button"><a href="user/login.php">Blog</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
        </div>
        
        <main class="cd-main container margin-top-xxl">
    <div class="Programs">
    <h2>Available Dish:</h2><br/>
    
		<div class="container">
			<div class="row">

				<!-- Programs Main Content -->
				<div class="col-lg-8">
					<div class="Programs_search_container">
					</div>
					<div class="Programs_container">
						<div class="row Programs_row">
							
							<!-- program -->
							<div class="col-lg-6 program_col">
								<div class="program">
									<div class="program_image"><img src="images/breakfast1.jpeg" alt=""></div>
									<div class="program_body">
                                    
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="800">Add To Cart</a>
										
									</div>
								</div>
							</div>

							<!-- program -->
							<div class="col-lg-6 program_col">
								<div class="program">
									<div class="program_image"><img src="images/breakfast2.jpeg" alt=""></div>
									<div class="program_body">
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="800">Add To Cart</a>
										
										
									</div>
								</div>
							</div>

							<div class="col-lg-6 program_col">
								<div class="program">
									<div class="program_image"><img src="images/breakfast3.jpeg" alt=""></div>
									<div class="program_body">
									<a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="1000">Add To Cart</a>
										
										
									</div>
								</div>
                            </div>
                            
                            <div class="col-lg-6 program_col">
								<div class="program">
									<div class="program_image"><img src="images/breakfast4.jpeg" alt=""></div>
									<div class="program_body">
									<a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="1500">Add To Cart</a>
										
										
									</div>
								</div>
                            </div>
                            
                            <div class="col-lg-6 program_col">
								<div class="program">
									<div class="program_image"><img src="images/breakfast5.jpeg" alt=""></div>
									<div class="program_body">
									<a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="1000">Add To Cart</a>
										
										
									</div>
								</div>
                            </div>
                            
                            <div class="col-lg-6 program_col">
								<div class="program">
									<div class="program_image"><img src="images/course_2.png" alt=""></div>
									<div class="program_body">
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="2000">Add To Cart</a>
										
										
									</div>
								</div>
                            </div>
                            
                            <div class="col-lg-6 program_col">
								<div class="program">
									<div class="program_image"><img src="images/course_1.png" alt=""></div>
									<div class="program_body">
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="300">Add To Cart</a>
										
										
									</div>
								</div>
                            </div>
                            <div class="col-lg-4 program_col">
								<div class="program">
									<div class="program_image"><img src="images/course_3.png" alt=""></div>
									<div class="program_body">
									<a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="1500">Add To Cart</a>
										
										
									</div>
								</div>
							</div>
                    
						</div>
						
					</div>
				</div>

				
			</div>
		</div>
    </div>
    </main>

    <div class="cd-cart cd-cart--empty js-cd-cart">
    <a href="#0" class="cd-cart__trigger text-replace">
      Cart
      <ul class="cd-cart__count"> <!-- cart items count -->
        <li>0</li>
        <li>0</li>
      </ul> <!-- .cd-cart__count -->
    </a>
    <div class="cd-cart cd-cart--empty js-cd-cart">
    <a href="#0" class="cd-cart__trigger text-replace">
      Cart
      <ul class="cd-cart__count"> <!-- cart items count -->
        <li>0</li>
        <li>0</li>
      </ul> <!-- .cd-cart__count -->
    </a>

    <div class="cd-cart__content">
      <div class="cd-cart__layout">
        <header class="cd-cart__header">
          <h2>Cart</h2>
          <span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
        </header>
        
        <div class="cd-cart__body">
          <ul>
            <!-- products added to the cart will be inserted here using JavaScript -->
          </ul>
        </div>

        <footer class="cd-cart__footer">
          <a href="user/login.php" class="cd-cart__checkout">
            <em>Checkout - ₦<span>0</span>
              <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
              </svg>
            </em>
          </a>
        </footer>

    	
</div>
</header>
<script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/main.js"></script> <br>
<?php include 'lib/footer.php'; ?>
</body>
</html>