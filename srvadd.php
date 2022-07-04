<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
    <meta name="author" content="Ansonika">
    <title>VANNO | Premium directory consumer reviews and listings template by Ansonika. - SHARED ON THEMELOCK.COM</title>

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
require 'db.php';
require 'nav/navsrv2.php';
	?>
	
	<main class="margin_main_container">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
					<div class="box_general write_review">
						<h1>Ajouter votre serveur</h1>
						<div class="rating_submit">
							<div class="form-group">
							
							</div>
						</div>
						<form method="POST" action=""><!-- /rating_submit -->
						<div class="form-group">
							<label>Nom du serveur</label>
							<input class="form-control" name="srvname" type="text" placeholder="Exemple : France City Roleplay"required>
						</div>
						<div class="form-group">
							<label>IP et port</label>
							<input class="form-control" name="srvip" placeholder="Exemple : 127.0.0.1:5000"required>
						</div>
						<div class="form-group">
							<label>Site web du serveur</label>
							<input class="form-control" type="text" name="srvsite" placeholder="Exemple : https://fivemtop.fr/">
						</div>
						<div class="form-group">
							<label>Nombre de slots</label>
							<input class="form-control" type="number" name="srvslots" placeholder="Exemple : 64"required>
						</div>
						<div class="form-group">
							<label>Discord</label>
							<input class="form-control" type="text" name="srvdiscord" placeholder="Exemple : https://discord.gg/HGeWwpvdev"required>
						</div>
						<div class="form-group">
							<label>Courte description</label>
							<input class="form-control" name="longdesc" style="height: 180px;" placeholder="Entrez une courte description de votre serveur. Celle-ci est très importante car elle permet de vous faire démarquer sur le classement !"required></input>
						</div>
						<div class="form-group">
							<label>Lien du logo</label>
							<input class="form-control" name="srvimg" type="text" placeholder="Exemple : https://fivemtop.fr/image.png"required>
						</div>
						<div class="form-group">
							<div class="checkboxes float-left add_bottom_15 add_top_15">
								<label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<a href="confirm.html" class="btn_1">Submit review</a>
							<input type="submit" value="OK">
					</div>
				</div>
				</form>
		<?php if (!empty($_POST['srvimg']) AND !empty($_POST['srvdiscord']) AND !empty($_POST['srvsite'])) 
{	
$requete = $bdd->prepare("INSERT INTO annuaire(srvimg,srvdiscord,srvsite) VALUES(?, ?, ?)");
$requete->execute(array($_POST['srvimg'], $_POST['srvdiscord'], $_POST['srvsite']));
}
?>
				<!-- /col -->
				<div class="col-lg-4">
					<div class="latest_review">
						<h4>Recent reviews<br>for Good Electronics</h4>
						<div class="review_listing">
							<div class="clearfix add_bottom_10">
								<figure><img src="img/avatar3.jpg" alt=""></figure>
								<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
								<small>Shops</small>
							</div>
							<h3><strong>Jhon Doe</strong></h3>
							<h4>"Avesome Experience"</h4>
							<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
							<ul class="clearfix">
								<li><small>26.08.2018</small></li>
								<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
							</ul>
						</div>
						<!-- /review_listing -->
						<div class="review_listing">
							<div class="clearfix add_bottom_10">
								<figure><img src="img/avatar4.jpg" alt=""></figure>
								<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
								<small>Shops</small>
							</div>
							<h3><strong>Jhon Doe</strong></h3>
							<h4>"Avesome Experience"</h4>
							<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
							<ul class="clearfix">
								<li><small>26.08.2018</small></li>
								<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
							</ul>
						</div>
						<!-- /review_listing -->
					</div>
					<!-- /latest_review -->
					
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
	
<?php 
require 'footer.php';
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
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

</body>
</html>