<?php 
session_start();
include "config.php";

?>
<!DOCTYPE html>
<html>
<head>
<title>Doctors</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span>Doc</span>tors</a>
			</div>
			<div class="header-right">
                			<div class="agile-login">
				<ul>
                                    <?php if (isset($_SESSION['usr_id'])) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> 
                                    <strong><?php
                                        $usrname = $_SESSION['usr_name'];
                                        echo $usrname;
                                        ?></strong>
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </a>
                                <ul style="background-color:white;" class="dropdown-menu">
                                    <li>
                                        <div class="navbar-login">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <p class="text-center">
                                                        <span class="glyphicon glyphicon-user icon-size"></span>
                                                    </p>
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text-left"><strong><?php echo $usrname; ?></strong></p>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="navbar-login navbar-login-session">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>
                                                        <a href="logout.php" class="btn btn-danger btn-block">Logout</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                                        <!--<li><a class="navbar-text" href="user_profile.php">Signed in as <?php //echo $_session['name'];       ?></a></li>
                                            <li><a href="logout.php">Log Out</a></li>-->
                        <?php } else { ?>
                            
                            <li><a class="account" href="login.php">Login</a></li>
                        <?php } ?>
                                    
                                    
					
					
				</ul>
			</div>
			
	<!-- Large modal -->
			
		</div>
		</div>
	</div>
    
	  
	
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Allergists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Allergists</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Anesthesiologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg"> Anesthesiologists</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Cardiologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Cardiologists</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Dermatologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Dermatologists</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Endocrinologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Endocrinologists</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Medicine Specialists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Medicine Specialists</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Family Physicians">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Family Physicians</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Gastroenterologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Gastroenterologists</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Hematologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Hematologists</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Internists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Internists</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Nephrologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Nephrologists</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Neurologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Neurologists</h4>
								</div>
							</div>
						</a>
					</div>
                    
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Gynecologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Gynecologists</h4>
								</div>
							</div>
						</a>
					</div>
                    
					<div class="col-md-2 focus-grid">
						<a href="category.php?category=Oncologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Oncologists</h4>
								</div>
							</div>
						</a>
					</div>
                    <div class="col-md-2 focus-grid">
						<a href="category.php?category=Psychiatrists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Psychiatrists</h4>
								</div>
							</div>
						</a>
					</div>
                    <div class="col-md-2 focus-grid">
						<a href="category.php?category=Plastic Surgeons">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Plastic Surgeons</h4>
								</div>
							</div>
						</a>
					</div>
                    <div class="col-md-2 focus-grid">
						<a href="category.php?category=Physiatrists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Physiatrists</h4>
								</div>
							</div>
						</a>
					</div>
                    <div class="col-md-2 focus-grid">
						<a href="category.php?category=Pathologists">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-user-md"></i></div>
									<h4 class="clrchg">Pathologists</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Trending Doctors</h2>
							<ul id="flexiselDemo3">
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Allergists.jpg"/>
											<!-- <span class="price">&#36; 450</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Farid</h4>
											<h5>Allergists</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Gynecologists.jpg"/>
											<!-- <span class="price">&#36; 399</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Mahamuda</h4>
											<h5>Gynecologists</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Cardiologists.jpg"/>
											<!-- <span class="price">&#36; 199</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Hasan</h4>
											<h5>Cardiologists</h5>
											<span>8 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Dermatologists.jpg"/>
											<!-- <span class="price">&#36; 159</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Mahamud</h4>
											<h5>Dermatologists</h5>
											<span>19 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Medicine Specialists.jpg"/>
											<!-- <span class="price">&#36; 1599</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Salek</h4>
											<h5>Medicine Specialists</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Neurologists.jpg"/>
											<!-- <span class="price">&#36; 1099</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Hamid</h4>
											<h5>Neurologists</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Allergists.jpg"/>
											<!-- <span class="price">&#36; 109</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Ameer</h4>
											<h5>Oncologists</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/Cardiologists.jpg"/>
											<!-- <span class="price">&#36; 189</span> -->
										</a> 
										<div class="ad-info">
											<h4>Dr.Kabir</h4>
											<h5>Internists</h5>
											<span>3 hour ago</span>
										</div>
									</div>
								</li>
								
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
		</div>
		<!--footer section start-->		
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="foo-grids">
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Help</h4>
							<ul>
								<li><a href="#">How it Works</a></li>						
								<li><a href="#">Sitemap</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Feedback</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Shortcodes</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="#">Locations Map</a></li>	
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Popular searches</a></li>	
								<li><a href="#">Privacy Policy</a></li>	
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<span class="hq">Our headquarters</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>Dhanmondi,Dhaka</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+88017000000</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">mail@example.com</a></li>
									<div class="clearfix"></div>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.php"><span>Doc</span>tors</a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><span>Twitter</span></a></li>
						
						<li><a class="googleplus" href="#"><span>Google+</span></a></li>
						
					</ul>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>