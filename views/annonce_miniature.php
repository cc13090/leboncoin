<?php

//Les datas sont dans le fichier data.php qui est appele au debut de index.php
// A l ouverture de index.php, tous les fichiers php sont "ouverts" et les variables visibles
// par tous les fichiers
//Pour les annonces de ASIDE verification si paye = TRUE ==> OBSOLETE plus traité par la classe Annonce

foreach ($aTab as $oAnnonce) {

    //if ($annonce['paye']==TRUE){} ==> OBSOLETE plus traité par la classe Annonce de la dernière version
    echo '<a href="index.php?page=detail_annonce&id=' . $oAnnonce->getId() . '">';
    echo '<article class="annonces-aside" id="thisAnnonce">';
    echo '<h3>' . $oAnnonce->getId() . ' - ' . $oAnnonce->getTitle() . '</h3>';
    echo '<br />';
    echo '<p>';
    echo '<img src="userfiles/' . $oAnnonce->getPicture() . '" alt="image" height="60" width="100"><br />';
    echo '<div class="description">' . $oAnnonce->getPrice() . '€</div>';
    echo '</p>';
    echo '</article>';
    echo '</a> ';
}
?>
