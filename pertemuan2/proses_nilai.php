<?php

    if(isset($_GET["submit"])) {

    $nama = $_GET["nama"];
    $matkul = $_GET["matkul"];
    $uts = $_GET["uts"];
    $uas = $_GET["uas"];
    $praktikum = $_GET["praktikum"];

    echo "Nama : $nama <br>";
    echo "Mata Kuliah : $matkul <br>";
    echo "Nilai UTS : $uts <br>";
    echo "Nilai UAS : $uas <br>";
    echo "Nilai Praktikum : $praktikum <br>";
    echo "Nilai Rata-Rata : " . round(($uts + $uas + $praktikum)/3, 2);
    echo "<br>Grade : ";

    if(($uts + $uas + $praktikum)/3 <= 35 and ($uts + $uas + $praktikum)/3 >= 0){
        echo "E";
    }
    elseif(($uts + $uas + $praktikum)/3 <= 55 and ($uts + $uas + $praktikum)/3 >= 36){
        echo "D";
    }
    elseif(($uts + $uas + $praktikum)/3 <= 69 and ($uts + $uas + $praktikum)/3 >= 56){
        echo "C";
    }
    elseif(($uts + $uas + $praktikum)/3 <= 84 and ($uts + $uas + $praktikum)/3 >= 70){
        echo "B";
    }
    elseif(($uts + $uas + $praktikum)/3 <= 100 and ($uts + $uas + $praktikum)/3 >= 85){
        echo "A";
    }
    elseif(($uts + $uas + $praktikum)/3 > 100 or ($uts + $uas + $praktikum)/3 < 0){
        echo "I";
    }
    
    }
    
    else{
        echo "Tidak Ada Data";
    }
?>