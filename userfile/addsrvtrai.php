<?php 
    session_start(); // Démarrage de la session
    require_once '../db.php'; // Include base de donnée

    if(!empty($_POST['srvname']) && !empty($_POST['srvip']) && !empty($_POST['srvsite']) && !empty($_POST['srvslots']) && !empty($_POST['srvdiscord']) && !empty($_POST['longdesc']) && !empty($_POST['srvimg']) ) // Verification des posts
    {
        // Patch XSS
        $srvname = htmlspecialchars($_POST['srvname']); 
        $srvip = htmlspecialchars($_POST['srvip']);
        $srvsite = htmlspecialchars($_POST['srvsite']); 
        $srvslots = htmlspecialchars($_POST['srvslots']);
        $srvdiscord = htmlspecialchars($_POST['srvdiscord']); 
        $longdesc = htmlspecialchars($_POST['longdesc']);
        $srvimg = htmlspecialchars($_POST['srvimg']); 
        
        
        // Ajout du serveur
        $check = $bdd->prepare('SELECT srvname, srvip, srvsite, srvslots, srvdiscord, longdesc, srvimg FROM annuaire');
        $check->execute(array($srvname, $srvip, $srvsite, $srvslots, $srvdiscord, $longdesc, $srvimg));
        $data = $check->fetch();
        

}