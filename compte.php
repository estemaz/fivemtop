<?php 
include 'nav/navsrv2.php';
?>
<?php 
   
    require_once 'db.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:connexion');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
    <meta name="author" content="Ansonika">
    <title>FIVEMTOP.FR | Mon compte</title>

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

	
	<main class="margin_main_container">
		<div class="user_summary">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<figure>
								<img src="img/avatar4.jpg" alt="">
							</figure>
							<h1><?php echo $data['pseudo']; ?><?php if (isset($data['isadmin']) AND $data['isadmin'] == 1) {
								echo ' (admin)';
							} ?></h1>
							<span>
						</div>
						<div class="col-md-6">
							<ul>
								<li>
									<strong>0</strong>
									<a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Reviews written by you"><i class="icon_star"></i> Reviews</a>
								</li>
								<li>
									<strong><?php echo $data['serveur']; ?></strong>
									<a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who have read your reviews"><i class="icon-user-1"></i> Serveurs</a>
								</li>
								<li>
									<strong>0</strong>
									<a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who found your review useful"><i class="icon_like_alt"></i> Bonus</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /container -->
			</div>
		</div>
		<!-- /user_summary -->
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
				<?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 

                                case 'autoreconnect':
                                    echo "<div class='alert alert-success'>Vous avez était automatiquement connecté</div>";
                                break; 
                            }
                        }
                    ?>
					<!-- /settings_panel -->
					<div class="settings_panel">
					    <h3>Changer votre mot de passe</h3>
					    <hr>
					      <form action="userfile/change_password.php" method="POST">
						<div class="form-group">
							<label>Mot de passe actuel</label>
							<input type="password" id="current_password" name="current_password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nouveau mot de passe</label>
							<input type="password" id="new_password" name="new_password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Confirmez le mot de passe</label>
							<input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required>
						</div>
						<div id="pass-info" class="clearfix"></div>
						<p class="text-right"> <button type="submit" class="btn_1 small">Sauvegarder</button></p>
					
					</div>
					  </form>
					<!-- /settings_panel -->
				</div>
				<!-- /col -->
				<div class="col-lg-4" id="sidebar">
					<div class="box_general">
						<h5>Ajoutez votre serveur</h5>
						<p>FivemTop.fr est une platforme crée pour noter justement les serveurs Fivem/GtaRp, ajouter votre serveur chez nous vous donnera de la visibilité</p>
						<a href="#" class="btn_1 small">Ajouter</a>
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
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>

</body>
</html>