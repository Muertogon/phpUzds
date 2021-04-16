<?php
include "data/data.php";
//kieviena grupe bus sudeta i array kuriu index 0,1,2
$kiek = [0,1,2];
//skaiciavimas
$rez = array_fill_keys($kiek, []);
$out = count($kiek);
foreach ($duom as $item => $value) {
    $rez[$kiek[$item%$out]][] = $value;
}
//printinimas
for ($i=0;$i<sizeof($kiek);$i++){
    echo $rez[$i][0].", ".$rez[$i][1].", ".$rez[$i][2]." = ".array_sum($rez[$i]);
    echo "<br>";
}