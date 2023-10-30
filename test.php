<?php
$numeros = [$_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5']];

// Soma geral
$soma_valores = 0;
foreach ($numeros as $numero):
    $soma_valores += $numero;
endforeach;

// Media
$media = $soma_valores / 5;

// Divisiveis por 5
$divisi5 = 0;
foreach ($numeros as $numero):
    if($numero == 0):
        continue;
    endif;
    if($numero % 5 == 0):
        $divisi5++;
    endif;
endforeach;

// Quantidade de nulos
$qtdNulls = 0;
foreach ($numeros as $numero):
    if($numero == 0):
        $qtdNulls++;
    endif;
endforeach;

// Soma dos pares
$somaPares = 0;
foreach ($numeros as $numero):
    if($numero % 2 == 0):
        $somaPares += $numero;
    endif;
endforeach;



?>

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

<form action="<?php echo $_SERVER['PHP_SELF'];;?>" method="POST">
    Digite o primeiro número: <input type="number" name="num1"><br>
    Digite o segundo número: <input type="number" name="num2"><br>
    Digite o terceiro número: <input type="number" name="num3"><br>
    Digite o quarto número: <input type="number" name="num4"><br>
    Digite o quinto número: <input type="number" name="num5"><br>
    <button type="submit">Enviar valores</button>
</form>

<?php
echo "Soma: " . $soma_valores . "<br>";
echo "Media: " . $media . "<br>";
echo "Quantidades de valores divisíveis por 5: " . $divisi5 . "<br>";
echo "Quantidades de valores nulos: " . $qtdNulls . "<br>";
echo "Soma de pares: " . $somaPares . "<br>";
?>
</body>
</html>