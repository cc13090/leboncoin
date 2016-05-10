<?php
$aTab = $oAnnonceManager->getList();
?>
<br />
<section class="cadre" id="test">
    <!-- Section avec champs Recherche Catégories Régions Que recherchez vous Recherche -->
    <h2 id="nos-offres">Nos offres :</h2>
    <form>
        <select>
            <option value="Automobile">Automobile</option>
            <option value="Immobilier">Immobilier</option>
            <option value="Divers">Divers</option>
            <option value="Services">Services</option>
        </select>
        <select>
            <option value="Ile de France">Ile de France</option>
            <option value="PACA">PACA</option>
            <option value="Centre">Centre</option>
            <option value="Nord">Nord</option>
        </select>
        <input id="villes" type="text" name="ville" placeholder="Ville">

        <input class="recherche-input"type="text" name="cherche" placeholder="Que recherchez-vous ?" size="30">
        <input class="recherche-button" type="button" value="Rechercher"/>
        <br />
    </form>
</section>

<?php
include ('views/menu_deroulant.php');
;
?>

<br />
<aside id="home-aside">
    <!-- Aside avec annonces à la une -->
    <h2>Annonces à la une</h2>
    <?php include('views/annonce_miniature.php'); ?>
</aside>

<section class="section-annonces"  id="home-section">
    <!-- Section avec annonces -->
    <h2>Annonces</h2>
    <?php include('views/annonce.php'); ?>
</section>

<br />