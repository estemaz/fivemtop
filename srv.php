 <?php
include 'db.php';


$srvpage = 1;
$srvTotalesReq = $bdd->query('SELECT srvid FROM annuaire');
$videosTotales = $srvTotalesReq->rowCount();
$pagesTotales = ceil($videosTotales/$srvpage);
if(isset($_GET['srv']) AND !empty($_GET['srv']) AND $_GET['srv'] > 0 AND $_GET['srv'] <= $pagesTotales) {
   $_GET['srv'] = intval($_GET['srv']);
   $pageCourante = $_GET['srv'];
} else {
   $pageCourante = 1;
}
$depart = ($pageCourante-1);
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
include 'nav/navsrv2.php';
	?>
	<!-- /header -->
	   <?php
      $serveyr = $bdd->query('SELECT * FROM annuaire ORDER BY srvid LIMIT '.$depart.','.$srvpage);
      while($info = $serveyr->fetch()) {
      ?>
	<main>
		<div class="reviews_summary">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<figure>
								<img src="<?php echo $info['srvimg'] ?>" alt="">
							</figure>
							<small>Serveur</small>
							<h1><?php echo $info['srvname'] ?></h1>
<?php
if (isset($info['note'])) {

if ($info['note'] == 1) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><em>1.0/5.00 - based on ".$info['vote']." reviews</em></span>";
}
if ($info['note'] == 2) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><em>2.0/5.00 - based on ".$info['vote']." reviews</em></span>";
}
if ($info['note'] == 3) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><em>3.0/5.00 - based on ".$info['vote']." reviews</em></span>";
}
if ($info['note'] == 4) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star empty'></i><em>4.0/5.00 - based on ".$info['vote']."reviews</em></span>";
}
if ($info['note'] == 5) {
	echo "<span class='rating'><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><i class='icon_star'></i><em>5.0/5.00 - based on ".$info['vote']." reviews</em></span>";
}
}
else{
echo "<span class='rating'><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><i class='icon_star empty'></i><em>0.0/5.00 - based on ".$info['vote']." reviews</em></span>";

}

 ?>


					  		
						</div>
				
						<div class="col-lg-4 review_detail">
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>5 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>4 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>3 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>2 stars</strong></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-9 col-9">
									<div class="progress last">
										<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-3 col-3 text-right"><strong>1 stars</strong></div>
							</div>
							<!-- /row -->
						</div>
					</div>
				</div>
				<!-- /container -->
			</div>
		</div>
		<!-- /reviews_summary -->
		
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
					<div class="review_card">

					</div>
					<!-- /review_card -->
					<div class="pagination__wrapper add_bottom_15">
						<ul class="pagination">
							<li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
							<li><a href="#0" class="active">1</a></li>
							<li><a href="#0">2</a></li>
							<li><a href="#0">3</a></li>
							<li><a href="#0">4</a></li>
							<li><a href="#0" class="next" title="next page">&#10095;</a></li>
						</ul>
					</div>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				<div class="col-lg-4">
					<div class="box_general company_info">
						<h3><?php echo $info['srvname'] ?></h3>
						<p><?php echo $info['longdesc'] ?></p>
						<p><strong>Connect</strong><br><a href="fivem://connect/<?php echo $info['srvip'] ?>" class="btn_top company">Auto Connect</a></p>

						<p><strong>Site Intenet</strong><br><a href="<?php echo $info['srvsite'] ?>"><?php echo $info['srvsite'] ?></a></p>
						<p><strong>Discord</strong><br><a href="<?php echo $info['srvdiscord'] ?>"><?php echo $info['srvdiscord'] ?></a></p>
						<?php 
						 if(isset($_SESSION['user'])){

    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
if ($_SESSION['pseudo'] == $info['owner']) {
echo "<p><strong>VOTRE ACCES</strong><br><a href='' class='btn_top company'>Modifié votre page</a></p>";
}
}

						?>
					
						
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
<?php 
include 'footer.php';

?>
	<!--/footer-->
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
	 <?php
      }
      ?>
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

</body>
</html>