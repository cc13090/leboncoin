<br />
<?php
include ('views/menu_deroulant.php');
?>
<br />
<section class="cadre" id="detail_annonce">
    <h3>Détail annonce N°  <?php echo ' ' . $_GET['id']; ?></h3>
    <?php
    $oAnnonce = $oAnnonceManager->get($_GET['id']);
    if ($oAnnonce instanceof Annonce) {
        echo '<div class="description"><h3>' . $oAnnonce->getTitle() . '</h3></div>';
        echo '<div>';
        echo '<img id="image_detail_annonce" src="userfiles/' . $oAnnonce->getPicture() . '" alt="image" height="70" width="70">';
        echo '</div>';
        echo '<div class="description">' . $oAnnonce->getDescription() . '</div>';
        echo '<div class="description">Prix : ' . $oAnnonce->getPrice() . '€</div>';
        echo '<div class="description">Date publication : ' . $oAnnonce->getDate() . '</div>';
        echo '<a href="index.php?delete_annonce=' . $_GET['id'] . '">Supprimer</a>';
    }
    ?>

</section >

<br />