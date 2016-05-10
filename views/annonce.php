<?php

//Les datas sont dans le fichier data.php qui est appele au debut de index.php
// A l ouverture de index.php, tous les fichiers php sont "ouverts" et les variables visibles
// par tous les fichiers

foreach ($aTab as $oAnnonce) {
    echo '<a href="index.php?page=detail_annonce&id=' . $oAnnonce->getId() . '">';
    echo '<article class="annonces" id="thisAnnonce">';
    echo '<div class="img-annonce">';
    echo '<img src="userfiles/' . $oAnnonce->getPicture() . '" alt="image" height="70" width="70">';
    echo '</div>';
    echo '<div class="description"><h3>' . $oAnnonce->getId() . ' - ' . $oAnnonce->getTitle() . '</h3></div>';
    echo '<div class="description">' . substr($oAnnonce->getDescription(), 0, 10) . '</div>'; //SUBSTR pour garder els 10 premiers caractères de DESCRIPTION
    echo '<div class="description">' . $oAnnonce->getPrice() . '€</div>';
    echo '</article>';
};
?>