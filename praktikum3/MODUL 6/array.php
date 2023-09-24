<?php
    $pegawai = array("line", "arni", "jone","punjabi","marcus","marlin");
    echo "<strong>sebelum diurutkan</strong><br?>";
    foreach($pegawai as $data => $nama){
        echo "$data: $nama"."<br/>";
    }

    sort($pegawai);

    echo "<strong>setelah diurutkan</strong><br/>";
    foreach($pegawai as $data => $nama){
        echo "$data: $nama"."<br/>";
    }
    ?>