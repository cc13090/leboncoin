<?php
	switch($_GET['bouton']) {  //changer GET par POST si on change de méthode dans index.php
		case "boutonA":
				// echo '<img src="ipad.jpg"/>';
				?>
				<div id="monDiv" style="width:150px; font-style: italic;">  
					Nous vous proposons de sélectionner le motif de votre demande dans le menu ci-dessous. Vous y trouverez un texte d'information qui répond aux cas fréquents rencontrés par nos utilisateurs et clients.
					Notre page d'aide en ligne est également disponible. Vous y retrouverez de nombreuses informations sur l'utilisation du site. Si vous souhaitez obtenir plus de réponse à votre question, vous pouvez détailler votre demande via le formulaire de contact, nous y apporterons une réponse sous 24 heures. Toutefois, si elle nécessite une expertise plus approfondie, ce délai peut être étendu à 6 jours ouvrés.
					Attention : notre service client est fermé les jours fériés.
				</div>
				<?php
			break;
		case "boutonB":
				?>
				<div id="monDiv" style="width:350px; font-style: oblique;">
					Nous vous proposons de sélectionner le motif de votre demande dans le menu ci-dessous. Vous y trouverez un texte d'information qui répond aux cas fréquents rencontrés par nos utilisateurs et clients.
					Notre page d'aide en ligne est également disponible. Vous y retrouverez de nombreuses informations sur l'utilisation du site. Si vous souhaitez obtenir plus de réponse à votre question, vous pouvez détailler votre demande via le formulaire de contact, nous y apporterons une réponse sous 24 heures. Toutefois, si elle nécessite une expertise plus approfondie, ce délai peut être étendu à 6 jours ouvrés.
					Attention : notre service client est fermé les jours fériés.
				</div>
				<?php
			break;
		case "boutonC":
				?>
				<div id="monDiv" style="width:550px; font-weight: bold">
					Nous vous proposons de sélectionner le motif de votre demande dans le menu ci-dessous. Vous y trouverez un texte d'information qui répond aux cas fréquents rencontrés par nos utilisateurs et clients.
					Notre page d'aide en ligne est également disponible. Vous y retrouverez de nombreuses informations sur l'utilisation du site. Si vous souhaitez obtenir plus de réponse à votre question, vous pouvez détailler votre demande via le formulaire de contact, nous y apporterons une réponse sous 24 heures. Toutefois, si elle nécessite une expertise plus approfondie, ce délai peut être étendu à 6 jours ouvrés.
					Attention : notre service client est fermé les jours fériés.
				</div>
				<?php
			break;
	}
	
	//print_r($_GET);
	//print_r($_POST);
?>