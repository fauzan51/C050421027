<?php
    $array1 = array ("Arman","Bayu","Feri");
    echo "array awal ialah:<br/>";
    for($i=0; $i<count($array1); $i++){
        echo"data ke-",$i," : ",$array1[$i],"<br/>";

    }

    echo "<br/>setelah ditambahkan \"Herni, gita &Dewi\"menggunakan fungsi array_push():<br/>";
    array_push($array1, "Herni","Gita","Dewi");
    for ($i=0;
    $i<count($array1);
    $i++){
        echo "data ke=",$i," : ",$array1[$i],"<br/>";
    }

    echo "<br/>dan setelah isi array diurutkan menggunakan fungsi sort():<br/>";
    sort ($array1);
    for($i=0; $i<count($array1); $i++){
        echo"data ke ",$i," : ",$array1[$i],"<br/>";

    }

    
    ?>