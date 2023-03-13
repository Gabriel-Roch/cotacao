<?php


require_once 'flight/Flight.php';
require_once 'DAO/connection.php';

Flight::path("dao/");
Flight::path("AppController/");
Flight::set('flight.views.path', 'views');


Connection::$dbhost = "nodejsdatabase.cyc6g470v8p1.us-east-1.rds.amazonaws.com";
Connection::$dbname = "node";
Connection::$dbuser = "admin";
Connection::$dbpassword = "narutinho123";

