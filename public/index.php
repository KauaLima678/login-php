<?php include "../app/config/auth.php"; 

if($_SERVER['REQUEST_METHOD'] === "POST"){
    logout();
    header("Location: login.php");
}

if(!isLogged()){
    header("location: login.php");
    exit;
}

// $_SESSION diz: na minha seção, busque usuario e dentro de usuário busque o valor nome.
$nome = $_SESSION['usuario']['nome']
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Bem vindo <?= $nome ?></h1>
    <p>Você está logado. esta página é particular</p>
    <form method="post">
        <button name="logout" type="submit">Sair</button>
    </form>
</body>

</html>