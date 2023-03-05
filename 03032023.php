<?php
     //soal 1
    $a="CAMP";
    $b="ENIGMA";
    $c= [$a, $b];
    $reversed = array_reverse($c, true);
    foreach ($reversed as $value) {
        echo $value . ' ';
    }


    //soal 2
    // $waktu = date('H');
    // if ($waktu==5) {
    //     echo "bangun tidur <br>";
    // }
    // elseif ($waktu==7 || $waktu==8) {
    //     echo "mandi & sarapan <br>";
    // }
    // elseif ($waktu==9) {
    //     echo "Olahraga";
    // }
    // elseif ($waktu==10) {
    //     echo "Belajar <br>";
    // }
    // elseif ($waktu==11 || $waktu==13) {
    //     echo "Makan & Ngopi <br>";
    // }
    // elseif ($waktu==14) {
    //     echo "Tidur Siang <br>";
    // }
    // else {
    //     echo "Kegiatan Lainnya <br>";
    // }
?>
