<?php

$k = "80e32263";
$kh = "6f8auf44abea0";
$kf = "351039f4a7b5";
$p = "0UlYyJHG87EJqEz6";
function inverseXOR($t, $k){
    $c = strlen($k);
    $l = strlen($t);
    $o = "";
    for($i = 0; $i < $l; ) {
        for($j = 0; ($j < $c && $i < $l); $j++, $i++) {
            $o.= $t[$i]^$k[$j];
        }
    }
    return $o;
}
$textinput = "0QKxO/n6DAwXuGEoc5X9/H3HkMXv1Ih75Fx1NdSPRNDPUmHTy3";
//file_get_contents("php://input");
$base644 = base64_decode($textinput);
$decomp = inverseXOR($base644, $k);
$resultat = gzuncompress($decomp);
echo "Res: " .$resultat;
?>

