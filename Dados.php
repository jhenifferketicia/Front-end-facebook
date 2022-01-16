<?php
    
    $host= "localhost";
    $email = "root";
    $senha = "";
    $dbname= "cadastro";


$conn = mysqli_connect($host,$email,$senha,$dbname);
$mysqli = new mysqli($host,$email,$senha)

$conexao= "INSERT INTO pessoas(email, senha)VALUES('$email','$senha', NOW())";
$resultado= mysqli_query($conn,$conexao);
?>