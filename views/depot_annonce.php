<!-- TO DO = verifier si l'utilisateur est bien connecté avant de remplir le formulaire -->
<!-- TO DO = Verifier le format des donnees : texte / nombre / format url -->
<br />
<?php
include ('views/menu_deroulant.php');
?>
<br />
<section class="cadre" id="depot_annonce">
    <h2>Vous êtes sur la page de dépôt d'annonce</h2>
    <form method="POST" action="index.php?page=depot" enctype="multipart/form-data">
        <input id="nom_annonce" type="text" name="nom_annonce" placeholder="Titre annonce" required ><br /><br />
        <textarea id="description_annonce" COLS=40 ROWS=6 name="description_annonce" placeholder="Description"></textarea><br /><br />
        <input id="prix_annonce" type="text" name="prix_annonce" placeholder="Prix" required><br /><br />
        <!--<input id="url_photo_annonce" type="text" name="url_photo_annonce" placeholder="URL photo annonce"> -->
        <h4>Sélectionnez une image à télécharger :</h4>
        <input id="upload_photo_annonce" type="file" name="upload_photo_annonce"/><br /><br />
        <input  type="submit" name="annonceForm" value="Créer"/>
        <br />
    </form>
</section >

