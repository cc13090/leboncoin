<?php
	//comme c'est un second point d'entree, il faut remettre le session_start et les include.
	// sur le site il n'y a que deux points d'entree index et ajax.
	session_start();
	include_once('class/class_annonce.php');
	include_once('data/data.php'); //pour charger une fois les datas
	include_once('functions.php');
	include_once('data/traitement.php');
	

	switch($_POST['bouton']) { 
		case "accueil":
			echo 'accueil ouvert avec Ajax !';
			include('views/home.php');
			break;
		case "contact":
		echo 'contact ouvert avec Ajax !';
			include('views/contact.php');					
		break;
	}
?>