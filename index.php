<?php

require_once "setup.php";

//TELA DE LOGIN
Flight::route('/', ['MainController','index']);

//TELA DE CADASTRO
Flight::route('/cadastro',['MainController','cadastro']);

Flight::start();
