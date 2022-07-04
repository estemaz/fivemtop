
<?php



include 'db.php'; 

  
                                          
                                          if (isset($_POST['srvname']) AND isset($_POST['srvdesc']) AND isset($_POST['srvdiscord']) AND isset($_POST['srvsite']) AND isset($_POST['srvimg']) AND isset($_POST['srvip']) AND isset($_POST['longdesc'])) {
                                             
                                             $requete2 = $bdd->prepare("INSERT INTO annuaire(srvname, srvdesc, srvdiscord, srvsite, srvimg, srvip, longdesc)VALUES(?, ?, ?, ?, ?, ?, ?)");
                                             $requete2->execute(array($_POST['srvname'], $_POST['srvdesc'], $_POST['srvdiscord'], $_POST['srvsite'], $_POST['srvimg'], $_POST['srvip'], $_POST['longdesc']));
                                             
                                            

                                          }
                                            
?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Gtools</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Add your server (beta)</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                    
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

<form method="POST" action="">

                                                                            <div class="card-body">
                                     
                                   
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Server Name</label>
                                                        <input type="text" class="form-control" name="srvname" id="validationCustom01" placeholder="Exemple : RpLife" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Server SHORT ! Description</label>
                                                        <input minlength="1" maxlength="45" type="text" class="form-control" name="srvdesc" id="validationCustom02" placeholder="Exemple : A simple garry's mod server" value="" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                  
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Server LONG ! Description</label>
                                                        <input minlength="1" maxlength="20000" type="text" class="form-control" name="longdesc" id="validationCustom02" placeholder="Exemple : A simple garry's mod server..." value="" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Server Discord</label>
                                                        <input type="text" class="form-control" id="validationCustom03" name="srvdiscord" placeholder="Exemple : https://discord.gg/SqERTRkAxp" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Server Website</label>
                                                        <input type="text" class="form-control" id="validationCustom04" name="srvsite" placeholder="Exemple : https://gtools.fr" required="">
                                                        <div class="invalid-feedback"> 
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Server Logo</label>
                                                        <input type="text" class="form-control" id="validationCustom05" name="srvimg" placeholder="Exemple https://gtools.fr/img.png" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Server Ip</label>
                                                        <input type="text" class="form-control" id="validationCustom05" name="srvip" placeholder="Exemple : 127.0.0.1:5555" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <
                 
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        
                                  
                        <div class="row mt-3">
                            <div class="col-xl-12">
                                <div class="text-center my-3">
                                    <button type="submit" class="btn btn-primary">Add server</button>
                                </div>
                            </div>
                        </div>
                       
                                              </form>
                        <!-- end row -->

                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                         
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Gtools.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                     Gtools by Estemaz & Ziro'Hax
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
       
 
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

 



    </body>

</html>