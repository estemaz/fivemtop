	<style type="text/css">
		body::-webkit-scrollbar {
  width: 12px; /* width of the entire scrollbar */
}

body::-webkit-scrollbar-track {
  background: #e77c37; /* color of the tracking area */
}

body::-webkit-scrollbar-thumb {
  background-color: #2c2f33; /* color of the scroll thumb */
  border-radius: 20px; /* roundness of the scroll thumb */
}
	</style>
	<header class="header menu_fixed">
		<div id="logo">
			<a href="home">
				<img src="img/logo_s2.png" width="140" height="35" alt="" class="logo_normal">
				<img src="img/logo_sticky.png" width="140" height="35" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="https://discord.gg/echRPuz8hG" class="btn_top">Discord</a></li>
			<li><a href="companies-landing.html" class="btn_top company">Ajouter ton serveur</a></li>
			<?php 
			 session_start();
if (!isset($_SESSION['user'])) {
	echo '<li><a href="connexion" class="login" title="Connexion">Connexion</a></li>';
}
else{
	echo '<li>
                            <div class="dropdown dropdown-user">
                                <a href="#0" class="logged" data-toggle="dropdown"><img src="img/avatar4.jpg" alt=""></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="compte">Mon compte</a></li>
                                        <li><a href="#">Mes serveurs</a></li>
                                        <li><a href="logout">Déconnexion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
					</ul>';
}

			?>
			
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile -->
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="home">Home</a></span>
				
				</li>
				<li><span><a href="list">Classement</a></span>
					
				<li><span><a href="pricing.html">Derniers serveurs</a></span></li>
				<li><span><a href="#0">Serveurs aléatoires</a></span>
					
				<li class="d-block d-sm-none"><span><a href="#0" class="btn_top">Write a review</a></span></li>
			</ul>
		</nav>
	</header>
	<!-- /header -->