<?php

    $basemaior = $_POST["basemaior"];
    $basemenor = $_POST["basemenor"];
    $altura = $_POST["altura"];

    if($basemaior<=0 or $basemenor<=0 or $altura<=0){
        echo "Você digitou um valor invalido";
    }else{
        $area = (($basemaior+$basemenor)/2)*$altura;
        echo "A área do trapézio é $area";
    }
?>