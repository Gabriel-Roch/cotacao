<?php

require_once "setup.php";

Flight::route('/', ['MainController','index']);

Flight::route('/main',['MainController','main']);


Flight::start();
