<?php
session_start();
include("db.php");
include("funkce.php");
include("onload.php");
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <!--<link rel="icon" href="favicon.ico" />-->
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="narrow-jumbotron.css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="//js.pusher.com/3.0/pusher.min.js"></script>

        <title><?php echo(NAZEV_STRANKY); ?></title>
    </head>

    <body>
        
        <div class="container" id="container">
            
            <div class="header clearfix">
                <nav>
                <!--<form action="#" method="post">-->
                    <ul class="nav nav-pills pull-xs-right">
                        <li id="navTlacitko-domu" class="nav-item">
                            <a class="nav-link btn" onclick="navigace('domu')">Domů</a>
                        </li>
                        <li id="navTlacitko-info" class="nav-item">
                            <a class="nav-link btn" onclick="navigace('info')">Pravidla a informace</a>
                        </li>
                        <li id="navTlacitko-kontakt" class="nav-item">
                            <a class="nav-link btn" onclick="navigace('kontakt')">Kontakt</a>
                        </li>
                    </ul>
                <!--</form>-->
                </nav>
                <?php echo(NADPIS); ?>
            </div>
            
            <div id="ajax">
                <!-- include -->

                <?php /*
                  if((!isset($_POST["p"])) || ($_POST["p"] == "Domů")) {
                  include("domu.php");
                  }
                  elseif((isset($_POST["p"])) && ($_POST["p"] == "Pravidla a informace")) {
                  include("info.php");
                  }
                  elseif((isset($_POST["p"])) && ($_POST["p"] == "Kontakt")) {
                  include("kontakt.php");
                  }
                  else {
                  include("404.php");
                  }
                 */ ?>

                <!-- /include -->
            </div>
            <footer class="footer" style="color: #FFF;">
                <p><?php echo(COPYRIGHT); ?></p>
            </footer>

        </div> <!-- /container -->

        <script>
            // JS funkce

            navigace();
            function navigace(obsah, blank) {
                if (!obsah) {
                    $("#ajax").load("domu.php");
                    $("#navTlacitko-domu").addClass("active");
                } else {
                    if (!blank) {
                        
                        /*$("#ajax").fadeOut("slow", function () {
                            $(this).load(obsah + ".php", function () {
                                $(this).fadeIn("slow");
                            });
                        });*/

                        $("#ajax").load(obsah+".php");
                        $("[id^='navTlacitko-']").removeClass("active");
                        $("#navTlacitko-"+obsah).addClass("active");
                        
                        $("#stav").fadeOut(5000, function() {
                            $(this).remove();
                        });
                        
                    } else if (blank == true) {
                        window.open(obsah + ".php");
                    }
                }
            }

            function vepisZnak(znak, element) {
                $('#' + element).val(($('#' + element).val()) + znak);
                $('#' + element).focus();
            }

        </script>
    
    <!-- video na pozadí -->
    <video autoplay loop poster="pozadi.png" id="bgvid">
        <source src="pozadi.mp4" type="video/mp4">
    </video>
    <!-- /video na pozadí  -->

    </body>
</html>