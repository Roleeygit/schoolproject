<?php

$aside = $_GET['aSide'];
$bside = $_GET['bSide'];
$cside = $_GET['cSide'];
$dside = $_GET['dSide'];


$terulet =( ($aside+$cside) / (4* ($aside-$cside)) )*
sqrt(($aside+$bside-$cside+$dside)*
($aside-$bside-$cside+$dside)*
($aside+$bside-$cside-$dside)*
(-$aside+$bside+$cside+$dside));


echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');
$page = file_get_contents('templates/result.html');
$page = str_replace('{{ Terület }}', $terulet ,$page);
echo $page;

echo file_get_contents('templates/foot.html');