<?php
include 'config.php';
session_start();

$category = $_GET['category'];

echo $category;

    


if(isset($_POST['search']))
{
    $name=$_POST['name'];
    $query="SELECT * FROM doctor WHERE Name LIKE '%".$name."%'";

$result= filterTable($query);
    
}
else if(isset($_POST['csearch']))
{
    $cat=$_POST['categorySelect'];
    $query="SELECT * FROM doctor WHERE Specialities LIKE '%".$cat."%'";

$result= filterTable($query);
}
else if(isset($_POST['hsearch']))
{
    $hsrch = $_POST['hospitalSelect'];
    $query="SELECT * FROM doctor WHERE chember LIKE '%".$hsrch."%'";

$result= filterTable($query);
}

else{
    $query="SELECT * FROM doctor WHERE Specialities='".$category."'";
   

$result= filterTable($query);
}



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
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
    <script src="js/tabs.js"></script>
	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
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
	<!-- Mobiles -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				<div class="browse-category ads-list">
                    <form method="post">
					<label>Browse Categories</label>
					<select class="selectpicker show-tick"  name="categorySelect">
					  <option data-tokens="Allergists" value="Allergists">Allergists</option>
					  <option data-tokens="Anesthesiologists" value="Anesthesiologists">Anesthesiologists</option>
					  <option data-tokens="Cardiologists" value="Cardiologists">Cardiologists</option>
					  <option data-tokens="Endocrinologists" value="Endocrinologists">Endocrinologists</option>
					  <option data-tokens="Dermatologists" value="Dermatologists">Dermatologists</option>
					  <option data-tokens="Medicine Specialists" value="Medicine Specialists">Medicine Specialists</option>
					  <option data-tokens="Family Physicians" value="Family Physicians">Family Physicians</option>
					  <option data-tokens="Gastroenterologists" value="Gastroenterologists">Gastroenterologists</option>
					  <option data-tokens="Hematologists" value="Hematologists">Hematologists</option>
					  <option data-tokens="Internists" value="Internists">Internists</option>
					  <option data-tokens="Nephrologists" value="Nephrologists">Nephrologists</option>
					  <option data-tokens="Neurologists" value="Neurologists">Neurologists</option>
                        
					  <option data-tokens="Gynecologists" value="Gynecologists">Gynecologists</option>
                        
					  <option data-tokens="Oncologists" value="Oncologists">Oncologists</option>
                        
					  <option data-tokens="Psychiatrists" value="Psychiatrists">Psychiatrists</option>
                        
					  <option data-tokens="Plastic Surgeons" value="Plastic Surgeons">Plastic Surgeons</option>
                        
					  <option data-tokens="Physiatrists" value="Physiatrists">Physiatrists</option>
                        
					  <option data-tokens="Pathologists" value="Pathologists">Pathologists</option>
					</select>
                        <input type="submit" value="Search" name="csearch" />
                        </form>
				</div>
                <div class="browse-category ads-list">
					<label>Browse Hospitals</label>
                    <form method="post">
					<select class="selectpicker show-tick" data-live-search="true" name="hospitalSelect">
					  <option data-tokens="Shahid Suhrawardy Hospital" value="Shahid Suhrawardy Hospital">Shahid Suhrawardy Hospital</option>
					  <option data-tokens="Ad-Din Hospital" value="Ad-Din Hospital">Ad-Din Hospital</option>
					  <option data-tokens="Ahmed Medical Centre Ltd." value="Ahmed Medical Centre Ltd.">Ahmed Medical Centre Ltd.</option>
					  <option data-tokens="Aichi Hospital" value="Aichi Hospital">Aichi Hospital</option>
					  <option data-tokens="Al Anaiet Adhunik Hospital" value="Al Anaiet Adhunik Hospital">Al Anaiet Adhunik Hospital</option>
					  <option data-tokens="Al- Helal Speacialist Hospital" value="Al- Helal Speacialist Hospital">Al- Helal Speacialist Hospital</option>
					  <option data-tokens="Appolo Hospital" value="Appolo Hospital">Appolo Hospital</option>
					  <option data-tokens="Community Hospital" value="Community Hospital">Community Hospital</option>
					  <option data-tokens="Square Hospital Ltd" value="Square Hospital Ltd">Square Hospital Ltd</option>
					  <option data-tokens="Ibn-Sina Medical College & Hospital" value="Ibn-Sina Medical College & Hospital">Ibn-Sina Medical College & Hospital</option>
					  <option data-tokens="United Hospital Limited" value="United Hospital Limited">United Hospital Limited</option>
					  <option data-tokens="Labaid Cardiac and Specialized Hospital" value="Labaid Cardiac and Specialized Hospital">Labaid Cardiac and Specialized Hospital</option>
                        
					  <option data-tokens="Ibrahim Cardiac Hospital & Research Centre" value="Ibrahim Cardiac Hospital & Research Centre">Ibrahim Cardiac Hospital & Research Centre</option>
                        
					  <option value="Bangladesh Institute of Research and Rehabilitation For Diabetes, Endocrine and Metabolic Disorders (BIRDEM)">Bangladesh Institute of Research and Rehabilitation For Diabetes, Endocrine and Metabolic Disorders (BIRDEM)</option>
                        
					  <option value="Islami Bank Hospital">Islami Bank Hospital</option>
                        
					  <option value="Isphahani Islamia Eye Institute and Hospital (IIEI&H)">Isphahani Islamia Eye Institute and Hospital (IIEI&H)</option>
                        
					  <option value="Popular Specialized Hospital Ltd">Popular Specialized Hospital Ltd</option>
                        
					  <option value="Green Life Medical College & Hospital">Green Life Medical College & Hospital</option>
                        <option value="Holy family Red Crescent Medical College Hospital">Holy family Red Crescent Medical College Hospital</option>
					</select>
                    <input type="submit" value="Search" name="hsearch" />
                        </form>
				</div>
				<div class="search-product ads-list">
					<label>Search for a specific doctors</label>
					<div class="search">
                        <form method="post">
						<div id="custom-search-input">
						<div class="input-group">
                            
							<input type="text" name="name" class="form-control input-lg" placeholder="Search Docotrs..." />  
                            <input type="submit" value="Search" name="search" />
<!--
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
-->
						</div>
					</div>
                            </form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="index.php">Home</a></li>
			  
			  <li class="active">Categories</li>
			</ol>
			<div class="ads-grid">
				
				<div class="ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Doctors</span>
						  </a>
						</li>
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="clearfix"></div>
							<div class="list">
                                <?php 
                                if(empty($result))
                                {
                                    echo "<h2>No result found</h2>";
                                }
                                else
                                {
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['Id'];
                                        $name= $row['Name'];
                                        $specialist = $row['Specialities'];
                                        $chember = $row['chember'];
                                        $day = $row['day'];
                                        $time = $row['time'];
                                        
                                    echo"  <a href='single.php?id=".$id."'>";
                                    echo "<li>";
									echo "<img src='".$row['image']."' title='' alt='' />";
									echo "<section class='list-left'>";
									echo "<h5 class='title'>".$name."</h5>";
									echo "<span class='adprice'>".$specialist."</span>";
									echo "<p class='catpath'>".$chember."</p>";
									echo "</section>";
									echo "<section class='list-right'>";
									echo "<span class='date'>".$day."</span>";
									echo "<span class='cityname'>".$time."</span>";
									echo "</section>";
									echo "<div class='clearfix'></div>";
									echo "</li>";
								    echo "</a>";
                                    }
                                }
                                
                 
								
                                ?>
							</div>
						</div>
							</div>
						</div>
						
						
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Mobiles -->
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