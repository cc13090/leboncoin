<br />
<?php
include ('views/menu_deroulant.php');
;
?>

<br />

<aside id="contact-aside">
    <section>
        <h2>FAQ</h2>
        Illud autem non dubitatur quod cum esset aliquando virtutum omnium domicilium Roma, ingenuos advenas plerique nobilium, ut Homerici bacarum suavitate Lotophagi, humanitatis multiformibus officiis retentabant.
    </section>
</aside>

<section class="cadre" id="contact-section">
    <h2>Formulaire de contact</h2>
    <div>
        Veuillez renseigner le formulaire suivant pour toute demande d'information :
    </div>
    <form id="form_contact" method="POST">
        <br /> Votre adresse email : <br /><input type="email" name="email" placeholder="email"/><br /><br />
        Objet de votre demande : <br /><input type="text" name="objet" placeholder="Objet"/><br /><br />
        Votre message : <br /><textarea id="message" COLS=40 ROWS=6 name="message" placeholder="message"></textarea><br /><br />
        <input type="submit" name="envoyer_message" value="Envoyer"/>
    </form>
</section >

<br />