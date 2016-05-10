<?php
connectDB();
$oDatabase = 'leboncoin';
mysql_select_db($oDatabase);
mysql_set_charset('UTF-8');

$oReq = mysql_query('SELECT * FROM LeBonCoin.annonces;');
//echo 'avant le WHILE de mysql_fetch_array';
while ($oRes = mysql_fetch_array($oReq)){
	//echo 'dans le WHILE de mysql_fetch_array';
	echo $oRes[1];
}
//mysql_close($handle);
?>