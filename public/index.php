<?php

$method = $_SERVER["REQUEST_METHOD"];
$url = $_SERVER["REDIRECT_URL"];

if ("/php-initiation/public/home" === $url){
    echo "home";
} elseif ("/php-initiation/public/contact" === $url) {
    echo "contact";
} else {
    echo "page non trouvé";
}
