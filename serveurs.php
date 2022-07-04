<?php



include 'db.php'; 
 
   $requete = $bdd ->query("SELECT * FROM annuaire"); 

   $list = $bdd->query('SELECT COUNT(*) AS allsrv FROM annuaire');
   
   $response = $list->fetch();

   $srvinfo2 = $bdd ->query("SELECT * FROM annuaire ORDER BY note DESC");
   $srvinfo2 = $bdd ->query("SELECT * FROM annuaire ORDER BY vote DESC");
   $srvinfo = $bdd ->query("SELECT * FROM annuaire ORDER BY note"); 
   if(isset($_POST['q']) AND !empty($_POST['q'])) {
   $q = htmlspecialchars($_POST['q']);
   $srvinfo = $bdd->query('SELECT * FROM annuaire WHERE srvname LIKE "%'.$q.'%"');
   $srvinfo2 = $bdd->query('SELECT * FROM annuaire WHERE srvname LIKE "%'.$q.'%"');
   

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
    <meta name="author" content="Ansonika">
    <title>FIVEMTOP.FR | Serveurs</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
<?php 
include 'nav/navsrv.php';
?>
	<!-- /header -->
	 
   

	<main>
		<div id="results">
		   <div class="container">
			   <div class="row justify-content-between">
				   <div class="col-lg-3 col-md-4 col-10">
					   <h1><strong><?php echo $response['allsrv']; ?></strong> Serveurs</h1>
				   </div>
				   <div class="col-xl-5 col-md-6 col-2">
					   <a href="#0" class="search_mob btn_search_mobile"></a> <!-- /open search panel -->
						<div class="row no-gutters custom-search-input-2 inner">
							<div class="col-lg-7">
								<div class="form-group">
									<form method="POST" action="">
									<input type="search" name="q" class="form-control" type="text" placeholder="Rechercher un serveur">
                             
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-4">
								<select class="wide">
									<option>Global</option>	
					
								</select>
							</div>
							<div class="col-xl-1 col-lg-1">
								<input type="submit" value="Rechercher">
								</form>
							</div>
						</div>
				   </div>
			   </div>
			   <!-- /row -->
				<div class="search_mob_wp">
					<div class="custom-search-input-2">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Search reviews...">
							<i class="icon_search"></i>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Where">
							<i class="icon_pin_alt"></i>
						</div>
						<select class="wide">
							<option>All Categories</option>	
							<option>Shops</option>
							<option>Hotels</option>
							<option>Restaurants</option>
							<option>Bars</option>
							<option>Events</option>
							<option>Fitness</option>
						</select>
						<input type="submit" value="Search">
					</div>
				</div>
				<!-- /search_mobile -->
		   </div>
		   <!-- /container -->
	   </div>
	   <!-- /results -->
		
		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
					   	<a href="list"><label for="">Global</label></a>
							<input type="radio" id="high" name="listing_filter" value="high" data-filter=".high">
							<label for="high">Nouveau</label>
							<input type="radio" id="low" name="listing_filter" value="low" data-filter=".low">
							<label for="low">Aléatoires</label>
						</div>
					</li>
					<li><a class="btn_filt" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Moins de filtres" data-text-original="Plus de filtres">Afficher les Filtres</a></li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="collapse" id="filters">
			<div class="container margin_30_5">
				<div class="row">
					<div class="col-md-4">
						<h6>Natation</h6>
						<ul>
							<li>
								<label class="container_check">Superb 9+ <small>67</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Very Good 8+ <small>89</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Good 7+ <small>45</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Pleasant 6+ <small>78</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h6>Tags</h6>
						<ul>
							<li>
								<label class="container_check">Soluta mei <small>12</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Enim suscipit  <small>11</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Duis veri <small>23</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Dicunt nam <small>56</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="add_bottom_30">
						<h6>Distance</h6>
							<div class="distance"> Radius around selected destination <span></span> km</div>
							<input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /Filters -->

<?php if (1 == 1) {

}
		?>
		<div class="container margin_60_35">
			<?php

while ($srvlist2 = $srvinfo2->fetch()) {
	?>
			<div class="isotope-wrapper">
				
				<div class="company_listing isotope-item high">
					<div class="row">
						<div class="col-md-9">
							<div class="company_info">
								<figure><a href="reviews-page.html"><img src="<?php echo $srvlist2['srvimg'] ?>" alt=""></a></figure>
								<h3><?php echo $srvlist2['srvname'] ?></h3>
								<p>Tale tollit vocent quo ut. Eu vix menandri persequeris accommodare, nam ei virtute dissentiet. Nec prima indoctum ei, vis eu justo dictas tamquam...</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="text-center float-lg-right">
							<span class="rating"><strong>Based on <?php echo $srvlist2['vote'] ?> reviews</strong><?php
if (isset($srvlist2['note'])) {

if ($srvlist2['note'] == 1) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i>";
}
if ($srvlist2['note'] == 2) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i>";
}
if ($srvlist2['note'] == 3) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star empty'></i><i class='icon_star empty'></i>";
}
if ($srvlist2['note'] == 4) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star empty'></i>";
}
if ($srvlist2['note'] == 5) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i>";
}
}
else{
echo "<span class='rating'><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i>";

}

 ?></span>
							<a href="serveur?srv=<?php echo $srvlist2['srvid'] ?>" class="btn_1 small">En savoir plus</a>
							</div>
						</div>
					</div>
				</div>
	
			</div>
					<?php

}
	?>
			<!-- /isotope-wrapper -->
			
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_15">Afficher plus</a></p>
			
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
<?php 
include 'footer.php';
?>
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

	<!-- Masonry Filtering -->
	<script src="js/isotope.min.js"></script>
	<script>
	$(window).on('load',function(){
	  var $container = $('.isotope-wrapper');
	  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
	});

	$('.filters_listing').on( 'click', 'input', 'change', function(){
	  var selector = $(this).attr('data-filter');
	  $('.isotope-wrapper').isotope({ filter: selector });
	});
	</script>
  
</body>
</html>