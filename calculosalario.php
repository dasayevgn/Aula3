<?php

    $salario = $_POST["salario"];
    $vendas = $_POST["vendas"];

    if($salario<0 or $vendas<0){
        echo "Valor digitado invalido, não digite valores negativos.";
    }else{
        $comissao = $vendas*0.04;
        $salariofinal = $salario+$comissao;
        echo "A comissão do funcionário desse mês foi de $comissao RS e o salário final é de $salariofinal RS.";
    }
?>