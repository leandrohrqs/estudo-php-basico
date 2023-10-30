<?php
setcookie('user', 'Leandro Henriques', time() + 3600);
setcookie('email', 'leandrohenriquesmg@gmail.com', time() + 3600);
setcookie('ultima_pesquisa', 'tenis nike' , time() + 3600);

foreach ($_COOKIE as $key => $value) {
    echo "$key => $value <br>";
}
