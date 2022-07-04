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
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <?php
      $videos = $bdd->query('SELECT * FROM annuaire ORDER BY srvid LIMIT '.$depart.','.$srvpage);
      while($vid = $videos->fetch()) {
      ?>
      <b>N°<?php echo $vid['srvid']; ?> - <?php echo $vid['srvname']; ?></b><br />
      <i><?php echo $vid['srvdesc']; ?></i>
      <br /><br />
      <?php
      }
      ?>
     
   </body>
</html>