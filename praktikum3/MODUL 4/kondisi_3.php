<?php

    $bln = date("M");
    switch($bln)
    {
        case "Jan" : $namaBln = "januari";
        break;
        case "Feb" : $namaBln = "Februari";
        break;
        case "Mar" : $namaBln = "Maret";
        break;
        case "Apr" : $namaBln = "april";
        break;
        case "May" : $namaBln = "mei";
        break;
        case "Jun" : $namaBln = "Juni";
        break;
        case "Jul" : $namaBln = "Juli";
        break;
        case "Aug" : $namaBln = "Agustus";
        break;
        case "Sep" : $namaBln = "September";
        break;
        case "Oct" : $namaBln = "Oktober";
        break;
        case "Nov" : $namaBln = "Nopember";
        break;
        case "Dec" : $namaBln = "Desenber";
        break;
    }
    echo "nama bulan sekarang adalah : ".$namaBln;
    ?>