<?php

require_once(__DIR__.'/utils/route.php');

Route::get('/login', function () {
    require_once(__DIR__.'/view/login.php');    
});

Route::post('/login', function () {
    echo "Os dados de login foram <br>";
    echo "Usuário: {$_POST['username']} <br>";
    echo "Senha: {$_POST['password']}";
});

// if ($_SERVER['REQUEST_URI'] === '/login') {
//     if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//         require_once(__DIR__.'/view/login.php');
//     } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         echo "Os dados de login foram <br>";
//         echo "Usuário: {$_POST['username']} <br>";
//         echo "Senha: {$_POST['password']}";
//     }
// } else {
//     echo 'Epa! Essa página não foi encontrada!';
// }