<?php include "../app/config/auth.php";

if(isLogged()){
    header('Location: index.php');
    exit;
}


$erro = false;

if($_SERVER ['REQUEST_METHOD'] === 'POST'){
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    if(login($USUARIO, $email, $senha)){
        header('Location: index.php');
        exit;
    }
    $erro = true;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <div class="container">
        <form method="post" class="form">
            <div class="inputContent">
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>

            <div class="inputContent">
                <label for="senha">Senha</label>
                <input type="password" name="senha">
            </div>

            <div class="buttonArea">
                <button type="submit">Entrar</button>
            </div>
        </form>
        <?php if($erro): ?>
            <p>Email ou senha invalidos</p>
            <?php endif; ?>
    </div>
</body>

</html>