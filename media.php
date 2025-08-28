<?php

    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    if($nota1<0 or $nota2<0){
        echo "Uma das notas digitadas é invalida, não digite números negativos.";
    }else{
        $media = ($nota1+$nota2)/2;
        echo "O aluno $nome ficou com $media de média";
    }
?>