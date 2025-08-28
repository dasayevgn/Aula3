<?php


    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    

    if($valor < 40000){
        $resultado = $valor*1.05;
        echo "Olá $nome, o valor do seu carro é $resultado, você está isento de imposto";
    }elseif($valor < 70000){
         $resultado = $valor*1.10*1.15;
        echo "Olá $nome, o valor do seu carro é $resultado";
    }else{

         $resultado = $valor*1.10*1.20;
        echo "Olá $nome, o valor do seu carro é $resultado";
    }
?>