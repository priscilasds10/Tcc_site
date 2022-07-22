<?php
// conexão banco de dados mysql (Simples)
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "servicodb";


    
//PDO mudar
$cn = new PDO("mysql:host=localhost;dbname=servicodb","root","");
//var_dump($cn); 

//instrucao de conexao para receber os parametros
///$db = mysqli_connect($host,$usuario,$senha,$banco);

//if (!$db){
    //echo "Error ao conectar";}
    
?>
