 <main class="margin_main_container">
        <div class="container margin_60">
             <div class="row justify-content-center">
                <div class="col-md-5">
                    <div id="confirm">
                        <div class="icon icon--order-success svg add_bottom_15">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                                <g fill="none" stroke="#8EC343" stroke-width="2">
                                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                </g>
                            </svg>
                        </div>
                    <h2>Session Détruite</h2>
                    <p>Vous allez être redirigés dans quelques secondes</p>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
<?php 
    session_start(); // demarrage de la session
    session_destroy(); // on détruit la/les session(s), soit si vous utilisez une autre session, utilisez de préférence le unset()
header( "Refresh:1; url=home", true, 303);
    exit();
?>
