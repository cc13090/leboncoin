<?php

function logIp() {

    $dir = 'log/'; //nom dossier
    $fileName = "log/" . date("Y-m-d") . ".log"; //nom fichier
    $texte = date("Y-m-d H:i:s") . '#' . $_SERVER['REMOTE_ADDR'] . "\n"; //contenu ligne
//
    if (!file_exists($dir)) { //verification existance dossier log
        mkdir($dir);
    }

    file_put_contents($fileName, $texte, FILE_APPEND); //creation et/ou ajout de ligne
}

function connectDB() {
    $user = 'root';
    $pwd = 'root';
    $aOptions = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "utf8"');
    $oPDO = new PDO('mysql:host=127.0.0.1;dbname=leboncoin;charset=UTF8', $user, $pwd, $aOptions);
    $oPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    //echo 'connected !';
    return $oPDO;
}

/*
  function connectDB() {
  $sServer = '127.0.0.1';
  $sUser = 'root';
  $sPwd = 'root';
  $handle = mysql_connect($sServer, $sUser, $sPwd);
  mysql_query('SET NAMES "utf8"');
  //echo 'Connexion à la DB réussie !';
  //echo $handle;
  }
 */
?>