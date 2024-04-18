<?php 
   //sessão começa aqui 
   session_start();

   $servername = "localhost";
   $username = "root";
   $password = "123@";
   $dbname = "login2";

   $conn = new mysqli($servername, $username, $password, $dbname);

//verifica a conexão 

if( $conn-> connect_error){
    die("Falha na conexão" . $conn->connect_error);
}

?>