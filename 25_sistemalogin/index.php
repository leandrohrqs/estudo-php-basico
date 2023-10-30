<?php
// Conexão
require_once 'db_connect.php';
// Sessão
session_start();
// Botão enviar
if (isset($_POST['botao-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $password = mysqli_escape_string($connect, $_POST['password']);
    if (empty($login) or empty($password)):
        $erros[] = "<li> Preencha todos os campos </li>";
    else:
        $sql = "SELECT login FROM users WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);


        if(mysqli_num_rows($resultado) > 0):
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
            $resultado = mysqli_query($connect, $sql);


            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_user'] = $dados['id'];
                header('Location: home.php');

            else:
                $erros[] = "<li> Usuário e senha não conferem </li>";
            endif;

        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;
    endif;
endif

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<h1> Login </h1>
<?php
if(!empty($erros)):
    foreach ($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login: <input type="text" name="login"><br>
Senha: <input type="password" name="password"><br>
<button type="submit" name="botao-entrar">Entrar</button>
</form>

</body>
</html>