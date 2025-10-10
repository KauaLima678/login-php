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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./assets/css/login.css">
    <title>UISolution - Login</title>
</head>

<body>
    <div class="container">
        <div class="colLeft">
            <div class="logo">
                <h1>UI<span>Solutions</span></h1>
            </div>
            <div class="form">
                <div class="header">
                    <h1>Login</h1>
                    <p>Ainda não possui uma conta?  registre-se <a>Aqui!</a></p>
                </div>
                <form method="post">
            <div class="inputContent">
                <label for="email" class="label">Email</label>
                <div class="input">
                    <i class="fa-regular fa-envelope icon"></i>
                    <input type="email" name="email" placeholder="Insira seu Email">
                </div>
            </div>

            <div class="inputContent password">
                <label for="senha" class="label">Senha</label>
                <div class="input">
                    <i class="fa-solid fa-lock icon"></i>
                    <input type="password" name="senha" placeholder="Digite sua senha" id="senha">
                    <i  class="fa-solid fa-eye-slash icon" id="eye"></i>
                </div>
                <div class="actions">
                    <div class="remember">
                        <input type="checkbox">
                        <span>Lembrar de mim</span>
                    </div>
                    <div class="forget">
                        <span>Esqueci minha senha </span>
                    </div>
                </div>
            </div>
            <?php if($erro): ?>
            <p>Email ou senha invalidos</p>
            <?php endif; ?>
            <div class="buttonArea">
                <button type="submit">Entrar</button>
            </div>

            <div class="div">
                <p>Ou entre com</p>

                <div class="social">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/512px-2021_Facebook_icon.svg.png" alt="Facebook">
                    <img src="https://cdn-icons-png.flaticon.com/512/0/747.png" alt="Apple">
                    <img src="https://cdn-icons-png.flaticon.com/512/720/720255.png" alt="Google">
                </div>
            </div>
        </form>
            </div>
        </div>
        <div class="colRight">
            <div class="imageContent">
                <img src="./assets/imgs/UISolutions.png" alt="Imagem Hero">

                <div class="phone">
                    <p><i class="fa-solid fa-phone"></i> (16) 99123-4567</p>
                </div>

                <div class="hero">
                    <h1>UISolutions</h1>
                    <p>Encontre seus componentes, bibliotecas, svgs e muito mais!</p>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>