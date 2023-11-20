<?php
    //Realizar a conexão com o banco de dados
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-faesa';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //if ($conexao->connect_errno){
    //    echo"Erro";
    //}
    //else{
    //    echo"conexão efetuada com sucesso";
    //}
?>