<?php


    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];

    if($tipo==1){
        $calculo = $valor*1.03;
        echo "O valor da sua Poupança é $calculo";
    }elseif($tipo==2){
        $calculo = $valor*1.04;
        echo "O valor do seu Fundo de renda fixa é $calculo";
    }else{
        echo "O número digitado não corresponde nem a Poupança nem a Fundo de renda fixa";
    }
?>