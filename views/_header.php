<input type="image" class="logo" src="images\logo.jpg" alt="Logo LeBonCoin" height="60" width="100" onclick="javascript:location.href = 'index.php?page=home'">
<h2 id="titre">leboncoin</h2>
<div id="menu-mobile">
    <input id="button-test" type="button" value="Menu"/>
</div>
<!-- formulaire de connection/deconnection avec gestion utilisateur connecté ou pas et passage de logout dans l URL -->
<?php if ($_SESSION['bIsConnected']) { ?>
    <span id='connected'><?php echo $_SESSION['sEmailConnected'] . ' / ID : ' . $_SESSION['iIdConnected'] ?> connecté.</span>
    <a href='index.php?logout'>Se déconnecter<a/> /
        <?php
    } else {
        ?>
        <form id="form_connect" method="POST">
            <input type="email" name="email" placeholder="email"/>
            <input type="password" name="password" placeholder="Mot de passe"/>
            <input type="submit" name="loginForm" value="Se connecter"/>
        </form>
        <?php
    }
    ?>
    <nav>
        <!-- menu 7 bouttons -->
        <ul class="menu" id="test-deroulant">
            <li class="boutons-menu"><input class="menu-button" type="button" value="Accueil" onclick="javascript:location.href = 'index.php?page=home'"/></li>
            <li class="boutons-menu"><input class="menu-button" id="accueilAjax" type="button" value="Accueil Ajax"/></li>
            <li class="boutons-menu"><input class="menu-button" type="button" value="Offres"/></li>
            <li class="boutons-menu"><input class="menu-button" type="button" value="Dépôt annonce" onclick="javascript:location.href = 'index.php?page=depot'"/></li>
            <li class="boutons-menu"><input class="menu-button" type="button" value="Mes annonce"/></li>
            <li class="boutons-menu"><input class="menu-button" type="button" value="Contact" onclick="javascript:location.href = 'index.php?page=contact'"/> </li>
            <li class="boutons-menu"><input class="menu-button" id="contactAjax" type="button" value="Contact Ajax"/></li>
        </ul>

    </nav>