<?php
session_start();

if(!isset($_SESSION['name'])){
    header("Location: index.php");
    exit();
}

$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Painel de controle</h1>
    <p>Seja bem vindo <?php echo $name; ?> </p>

    <a href="logout.php">Sair</a>

    
</body>
</html>