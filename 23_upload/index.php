<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_POST['enviar-formulario'])):
    $formatosPermitidos = ['jpg', 'jpeg', 'png', 'gif'];
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if (move_uploaded_file($temporario, $pasta.$novoNome)):
            $mensagem = "Arquivo enviado com sucesso";
        else:
            $mensagem = "Erro ao enviar o arquivo";
        endif;
    else:
        $mensagem = "Extensão não permitida";
    endif;

echo $mensagem;

endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

    <input type="file" name="arquivo"><br>
    <input type="submit" name="enviar-formulario">
</form>

</body>
</html>