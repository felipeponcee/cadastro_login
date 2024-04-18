<?php 

require_once "config.php";


function logout(){

session_unset();
session_destroy();
header("Location: index.php");
exit;

}
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !==true){
    header("Location: index.php");
    exit;
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>
</head>
<body>
    <h1> Você está logado no site </h1>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" name="logout" value="logout">
    <?php 
      if (isset($_POST["logout"])){
        logout();
      }

  
    ?> 


</body>
</html>