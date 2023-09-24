<?php
    $hari = 91;

    switch($hari){
        case $hari <= 100;
        echo "Hari 90-100 || Mata kuliah A || Baik Sekali><br/>";
        break;
        case $hari <= 90;
        echo "Hari 76-89 || Mata kuliah B || Baik><br/>";
        break;
        case $hari <= 75;
        echo "Hari 60-75 || Mata kuliah C || Cukup><br/>";
        break;
        case $hari <= 60;
        echo "Hari 50-59 || Mata kuliah D || Hampir cukup><br/>";
        break;
        case $hari <= 50;
        echo "Hari 0-49 || Mata kuliah E || Kurang><br/>";
        break;
    }

        echo "menggnakan if Else<br/>";
    if($hari <= 100){
        echo "Hari 90-100 || Mata kuliah A || Baik Sekali><br/>";
    }
    elseif ($hari <= 90){
        echo "Hari 76-89 || Mata kuliah B || Baik><br/>";
    }
    elseif( $hari <= 75){
        echo "Hari 60-75 || Mata kuliah C || Cukup><br/>";
    }
    elseif( $hari <= 60){
        echo "Hari 50-59 || Mata kuliah D || Hampir cukup><br/>";
    }
    elseif( $hari <= 50){
        echo "Hari 0-49 || Mata kuliah E || Kurang><br/>";
    }
    else{
        echo "nilai  kurang";
    }
    
    
?>