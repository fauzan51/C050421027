<?php
    $harga = 100;
    $lembar = 158;
    echo "harga fotocopy 158 lembar? <br/>";

    if($lembar >= 200){
        echo "lembar kertas 200 lebih<br/>";
    }
    elseif ($lembar >= 100){
        echo "lembar kertas 100/200<br/>";
    }
    elseif( $lembar >= 2){
        echo "lembar kertas 1/100<br/>";
    }
    else{
        echo "nilai  kurang";
    }


    if($harga == 150){
        echo "Harga fotocopy Rp:150,/lembar<br/>";
    }
    elseif ($harga == 100){
        echo " Harga fotocopy Rp:100,/lembar<br/>";
    }
    elseif( $harga == 80){
        echo "Harga fotocopy Rp:80,/lembar<br/>";
    }
    else{
        echo "nilai  kurang";
    }
  echo "total yang harus dibayar Rp: ";
  echo $harga * $lembar;

    ?>