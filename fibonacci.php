<?php
    $a = $_POST['1'];
    $b = $_POST['2'];
    $bnyk = $_POST['3'];

    if($a==""){
        echo "ANGKA PERTAMA DI ISI!! <br>";
    }
    else if ($b==""){
        echo "ANGKA KEDUA DI ISI!! <br>";
    }
    else if ($bnyk==""){
        echo "BANYAK DERET DI ISI!! <br>";
    }
    else {
        echo "$a <br>";
        echo "$b <br>";
        for ($i=0; $i<$bnyk-2; $i++){
            $hasil=$a+$b;
            echo "$hasil <br>";
            $a = $b;
            $b = $hasil;
        }
    
    }

?>
