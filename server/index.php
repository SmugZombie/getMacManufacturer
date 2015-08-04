<?php
// getMacManufacturer index.php
// author: SmugZombie
// version: 1.0
header('Access-Control-Allow-Origin: *'); 
$mac = $_GET['mac'];
if($mac == ""){ $mac = "EC:1A:59"; } // If mac not provided, Use test data
$mac = str_replace(':', '-', $mac);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.macvendorlookup.com/api/v2/".$mac);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$downloaded_page = curl_exec($ch);
curl_close($ch);
$data = json_decode($downloaded_page, true);
echo $data[0]['company'];
?>
