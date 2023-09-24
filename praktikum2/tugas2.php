<?php
function hitungVolumeKerucut($r, $t) {
    $volume = (1.0/3) * 3.14 * $r * $r * $t;
    return $volume;
}

$r = 5; // jari-jari lingkaran alas kerucut
$t = 10; // tinggi kerucut

$volumeKerucut = hitungVolumeKerucut($r, $t);
echo "Volume kerucut adalah: " . $volumeKerucut . "\n";
?>
