<?php
session_start();
include_once('class/class_annonce.php');
//include_once('class/class_annonces_manager.php'); => remplace par la ligne ci-dessous =
include_once('class/class_annonces_manager_pdo.php');
include_once('class/class_user.php');
include_once('class/class_user_manager_pdo.php');
//include_once('class/class_annonce.php');
// pour vérifier que l'appel de la classe Annonce fonctionne bien :
//$oAnnonce = new Annonce();
//print_r($oAnnonce);
include_once('class/class_message_contact.php');
include_once('functions.php');

//connectDB();
//$oAnnonceManager = new AnnoncesManager();
//Avec PDO =
$oPDO = connectDB();
$oAnnonceManager = new AnnoncesManager($oPDO);
$oUserManager = new UserManager($oPDO);

include_once('data/data.php'); //pour charger une fois les datas
include_once('data/traitement.php');
logIp();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Le Bon Coin </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="templates\global.css"/>
        <link rel="stylesheet" type="text/css" href="templates\styles.css"/>
        <link rel="stylesheet" type="text/css" href="templates\contact.css"/>
        <link rel="icon" type="image/png" href="images\logo.png" />
        <!--Test JQUERY SLIDETOGGLE = -->
        <!-- copie locale du jquery.js -->
        <script src="jquery\jquery-1.12.3.js"></script>
        <!-- lien vers jquery.js -->
        <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
        <script>
            $(document).ready(function () {
                $("input#button-test").click(function () {
                    $("section#test-deroulant").slideToggle('slow', function () {
                        $(".log").text('Toggle Transition Complete');
                    });
                });
            });
        </script>
    </head>

    <body>
        <header class="cadre">
            <?php include('views/_header.php'); ?>
        </header>

        <div id="ajaxDiv">
            <?php
            // include($_GET['page'].'.php');

            if (isset($_GET['page']) && $_GET['page']) {  //&& ctype_alpha($_GET['page'])
                switch ($_GET['page']) {
                    case 'home':
                        include('views/home.php');
                        break;
                    case 'contact':
                        include('views/contact.php');
                        break;
                    case 'depot':
                        include('views/depot_annonce.php');
                        break;
                    case 'detail_annonce':
                        include('views/detail_annonce.php');
                        break;
                    default:
                        include('views/home.php');
                }
            } else
                include('views/home.php');
            ?>
        </div>

        <footer>
            <?php include('views/_footer.php') ?>
        </footer>
        <!-- script AJAX JQuery pour charger uniquement le corps de la page et pas les header et footer lorsqu'on clique -->
        <!-- sur les boutons Accueil Ajax et Contact Ajax.-->
        <script>
            $(document).ready(function () {
                $('#accueilAjax').click(function () {
                    $.ajax({
                        async: true,
                        type: 'post',
                        url: "ajax.php",
                        data: "bouton=accueil",
                        success: function (data) {
                            $('#ajaxDiv').html(data);
                        }
                    });
                });
                $('#contactAjax').click(function () {
                    $.ajax({
                        async: true,
                        type: 'post',
                        url: "ajax.php",
                        data: "bouton=contact",
                        success: function (data) {
                            $('#ajaxDiv').html(data);
                        }
                    });
                });
            });

        </script>

    </body>

</html>