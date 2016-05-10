
<?php

// test de logout passé par l'URL, si existe on detruit la SESSION
if (isset($_GET['logout'])) {
    unset($_SESSION); //on efface la session (ce qui est en mémoire)
    session_destroy(); // on efface le fichier de session
    header('Location: index.php'); //on va changer les informations envoyees au navigateur
    exit();
}

if (!isset($_SESSION['bIsConnected'])) {
    $_SESSION['bIsConnected'] = false;
    $_SESSION['sEmailConnected'] = false;
}
if (isset($_POST['loginForm'])) {
    // on parcourt les datas pour verifier le couple email et password :
    /* foreach($mesUtilisateurs as $email => $password){
      if($email == $_POST['email'] && $password == $_POST['password']) {
      $_SESSION['bIsConnected'] = true;
      $_SESSION['sEmailConnected'] = $email;
      }
      } */
    // Meme chose mais en filtrant l'email et le password avec filter_input :
    $sEmailInput = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $sPasswordInput = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $iIdConnected = NULL;

    if ($sEmailInput && $sPasswordInput) {
        $oUser = $oUserManager->getByEmailAndPassword($sEmailInput, $sPasswordInput);
        if ($oUser instanceof User) {
            $_SESSION['bIsConnected'] = true;
            $_SESSION['sEmailConnected'] = $sEmailInput;
            $_SESSION['iIdConnected'] = $oUser->getId();
        }

        /* foreach ($mesUtilisateurs as $email => $password) {
          if ($email == $_POST['email'] && $password == $_POST['password']) {
          $_SESSION['bIsConnected'] = true;
          $_SESSION['sEmailConnected'] = $email;
          }
          } */
    }
}

if (isset($_POST['annonceForm'])) {
    if ($_SESSION['bIsConnected'] == true) {
        //echo $_POST['nom_annonce'];
        //...filter_input
        $sTitleInput = filter_input(INPUT_POST, 'nom_annonce', FILTER_SANITIZE_STRING);
        $sDescriptionInput = filter_input(INPUT_POST, 'description_annonce', FILTER_SANITIZE_STRING);
        $sPriceInput = filter_input(INPUT_POST, 'prix_annonce', FILTER_VALIDATE_INT);

        $sUrlInput = false;
        $aAllowedTypes = array(
            'image/png',
            'image/gif',
            'image/jpg',
            'image/jpeg',
        );
        // Test des conditions pour l'upload de l'image Exists/No Error/Type dans tableau de types autorisés =
        if (isset($_FILES['upload_photo_annonce']) && $_FILES['upload_photo_annonce']['error'] == 'UPLOAD_ERR_OK' && in_array($_FILES['upload_photo_annonce']['type'], $aAllowedTypes)
        ) {
            $sUrlInput = $_FILES['upload_photo_annonce']['tmp_name']; //Tableau à deux dimensions, on peut passer plusieurs images par exemple
        }
        // Test des conditions pour les autres champs du formulaire =
        if ($sTitleInput && $sDescriptionInput && $sPriceInput && $sUrlInput) { // On vérifie que titre description et prix existent bien
            $oNewAnnonce = new Annonce();
            $oNewAnnonce->setTitle($sTitleInput); // On met la valeur VERIFIEE et non pas la valeur du POST !!!!
            $oNewAnnonce->setDescription($sDescriptionInput);
            $oNewAnnonce->setPrice($sPriceInput);
            $oNewAnnonce->setCreatedDate(date("Y-m-d"));

            $oAnnonceManager->insert($oNewAnnonce); //on met l'INSER avant à cause du id récupéré ci-dessous

            $destination_file_image_name = 'image' . $oNewAnnonce->getId() . '.jpg';
            echo 'le nom de l image a inserer est = ' . $destination_file_image_name;
            $destination_file = 'userfiles/image' . $oNewAnnonce->getId() . '.jpg'; //renomme l'image en imagexx.jpg / il vaut mieux récupérer le getId que la variable static NB_ANNONCE, au moins on est sûr d'avoir l'ID de cette annonce
            if (move_uploaded_file($sUrlInput, $destination_file)) {
                $oNewAnnonce->setPicture($destination_file_image_name);
                $oAnnonceManager->update($oNewAnnonce);
            }
        }
    } else {
        echo 'Veuillez vous connecter avant de déposer une annonce !';
    }
}
if (isset($_POST['envoyer_message'])) {
    $sEmailInput = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $sObjetInput = filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_STRING);
    $sMessageInput = filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_STRING);

    if ($sEmailInput && $sObjetInput && $sMessageInput) {
        echo 'Formulaire de contact envoyé avec succés !';
        $NewContactForm = new MessageContact($sEmailInput, $sObjetInput, $sMessageInput);
        $NewContactForm->send();
    }
}

if (isset($_GET['delete_annonce'])) {
    //echo 'id =' . $_GET['delete_annonce'];

    $oAnnonce = $oAnnonceManager->delete($_GET['delete_annonce']);

    //$oData = mysql_query('DELETE FROM LeBonCoin.annonces WHERE annonces.id=' . $_GET['delete_annonce'] . ';');
    print_r(mysql_error());

    header('Location: index.php');
    exit();
}

/*
  //print_r($_GET);
  //print_r($_POST);
  //print_r($mesUtilisateurs);
  //print_r($_POST["password"]);
  if (isset($_POST["email"])){
  if(array_key_exists($_POST["email"],$mesUtilisateurs)) {
  //echo 'Bienvenue cher utilisateur enregistré';
  if(in_array($_POST["password"],$mesUtilisateurs)){
  echo 'Utilisateur enregistré et password correct';
  }
  }
  }
  if ($bTestUser!== false) {
  echo('Bienvenue cher utilisateur enregistré : '.$_POST["email"]);
  } */
?>