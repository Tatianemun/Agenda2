<?php
    $servidor="localhost";
    $usuario="escola2";
    $senha="123";
    $nomedodb="escola2";

    $conn=new mysqli($servidor,$usuario,$senha,$nomedodb);

    if($conn->connect_error){
        die("conexão falhou".$conn->connect_error);
    }
    echo"Conectado ao Banco de Dados";
    ?>