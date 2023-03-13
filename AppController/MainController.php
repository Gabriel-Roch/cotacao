<?php

require_once 'DAO/MainDAO.php';

class MainController extends MainDAO
{

    public static function index()
    {
        
        Flight::render('index', ['titulo' => 'Bem vindo']);
       
    }

    public static function cadastro()
    {
        Flight::render('cadastro',['titulo' => 'CADASTRO']);
    }

    public static function main()
    {
        Flight::render('main',['titulo' => 'Pagina Principal']);
    }

   
}