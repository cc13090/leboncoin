<?php

/*
  $oAnnonce1 = new Annonce();
  //$oAnnonce1 ->setId('001');
  $oAnnonce1 ->setTitle('IPAaD');
  $oAnnonce1 ->setDescription('bel Ipad comme neuf');
  $oAnnonce1 ->setImage('images\ipad2.jpg');
  $oAnnonce1 ->setPrice('200');
  $oAnnonce1 ->setDate('10/10/2016');

  $oAnnonce2 = new Annonce();
  //$oAnnonce2 ->setId('002');
  $oAnnonce2 ->setTitle('IPooD');
  $oAnnonce2 ->setDescription('IPooD cassé à réparer');
  $oAnnonce2 ->setImage('images\ipod.jpg');
  $oAnnonce2 ->setPrice('250');
  $oAnnonce2 ->setDate('11/10/2016');

  $oAnnonce3 = new Annonce();
  //$oAnnonce3 ->setId('003');
  $oAnnonce3 ->setTitle('Ipad');
  $oAnnonce3 ->setDescription('IPad neuf');
  $oAnnonce3 ->setImage('images\ipad.jpg');
  $oAnnonce3 ->setPrice('200');
  $oAnnonce3 ->setDate('12/10/2016');

  $mesAnnonces =array();
  $mesAnnonces[]= $oAnnonce1;
  $mesAnnonces[]= $oAnnonce2;
  $mesAnnonces[]= $oAnnonce3; */

// Pour créer les fichiers TXT, à lancer une seule fois :
//file_put_contents( $file1 , serialize( $oAnnonce1 ) );
//file_put_contents( $file2, serialize( $oAnnonce2 ) );
//file_put_contents( $file3, serialize( $oAnnonce3 ) );

/* Unserialize sans faire un FOREACH :
  $file1 = 'data/annonce001.txt';
  $file2 = 'data/annonce002.txt';
  $file3 = 'data/annonce003.txt';

  $mesAnnonces =array();

  $oAnnonce1 = unserialize( file_get_contents( $file1 ) );
  $oAnnonce2 = unserialize( file_get_contents( $file2 ) );
  $oAnnonce3 = unserialize( file_get_contents( $file3 ) );

  $mesAnnonces[]= $oAnnonce1;
  $mesAnnonces[]= $oAnnonce2;
  $mesAnnonces[]= $oAnnonce3; */
//  Appel de la fonction static load() de la classe Annonce :
//$mesAnnonces = Annonce::load();


/*
  //Tableau mes annonces :
  $mesAnnonces =array();
  $mesAnnonces[]=array(
  'photo' => 'images\ipad2.jpg',
  'description' => 'IPAAD neuf emballé',
  'prix' => '200',
  'paye' => FALSE,
  );
  $mesAnnonces[]=array(
  'photo' => 'images\ipod.jpg',
  'description' => 'IPooD cassé à réparer',
  'prix' => '250',
  'paye' => FALSE,
  );
  $mesAnnonces[]=array(
  'photo' => 'images\ipad.jpg',
  'description' => 'IPad neuf',
  'prix' => '200',
  'paye' => TRUE,
  );
  $mesAnnonces[]=array(
  'photo' => 'images\5turbo.jpg',
  'description' => 'pour pièces',
  'prix' => '1000',
  'paye' => TRUE,
  );
  $mesAnnonces[]=array(
  'photo' => 'images\indesit.jpg',
  'description' => 'Lave linge Indesit B150',
  'prix' => '350',
  'paye' => FALSE,
  );
  $mesAnnonces[]=array(
  'photo' => 'images\chaton.jpg',
  'description' => 'A venir chercher sur Aix',
  'prix' => '0',
  'paye' => TRUE,
  );
 */
//Tableau utilisateurs enregistres :
//$mesUtilisateurs = array();
//$mesUtilisateurs['christian.chabert@gmail.com'] = 'password';
?>