<?php
include 'config.php';
session_start();

$id=$_GET['id'];
 $query="SELECT * FROM doctor WHERE Id='".$id."'";

$result= filterTable($query);




function filterTable($query)
{
   include 'config.php';
    $filter_result = mysqli_query($conn,$query);
    
    return $filter_result;
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Doctors</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
		<link rel="stylesheet" href="css/flexslider.css" media="screen" />
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
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">All Doctors</a></li>
				
				<li class="active">Doctors</li>
			</ol>
			<div class="product-desc">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<div class='col-md-7 product-view'>";
					echo "<h2>".$row['Name']."</h2>";
					echo "<div class='flexslider'>";
					echo	"<ul class=''>";
					echo		"<li data-thumb=".$row['image'].">";
					echo			"<img src=".$row['image']." />";
					echo		"</li>";
					echo	"</ul>";
					echo "</div>";
					
					echo "<div class='product-details'>";
					echo	"<h2>Chamber: ".$row['chember']."</h2>";
					echo	"<h4>Specialist In:<strong>".$row['Specialities']."</strong></h4>";
					echo	"<p><strong>Qualification </strong>: ".$row['Degree']."</p>";
					echo	"<p><strong>Background</strong> : ".$row['background']."</p>";
					
					echo   "</div>";
				echo "</div>";
				echo "<div class='col-md-5 product-details-grid'>";
				echo	"<div class='item-price'>";
				echo		"<div class='product-price'>";
				echo			"<p class='p-price'>Fees</p>";
				echo			"<h3 class='rate'> ".$row['Fees']."BDT</h3>";
				echo			"<div class='clearfix'></div>";
				echo		"</div>";
				echo		"<div class='condition'>";
				echo			"<p class='p-price'>Time</p>";
				echo			"<h4>".$row['time']."</h4>";
				echo			"<div class='clearfix''></div>";
				echo		"</div>";
                        
				echo		"<div class='condition'>";
				echo			"<p class='p-price'>Days</p>";
				echo			"<h4>".$row['day']."</h4>";
				echo			"<div class='clearfix'></div>";
				echo		"</div>";
				echo		"<div class='itemtype'>";
							
				echo			"<a class='account' href='appoinment.php?id=".$id."'>Appoinment</a>
							<div class='clearfix'></div>
						</div>
					</div>
					<div class='interested text-center'>
						<h4>Any inquery?</h4>
						<p><i class='glyphicon glyphicon-earphone'></i>".$row['Phone']."</p>
					</div>
				</div>
			<div class='clearfix'></div>
			</div>";
                }
				
                ?>
		</div>
	</div>
	<!--//single-page-->
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