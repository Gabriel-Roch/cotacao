<?php

require_once 'DAO/MainDAO.php';

class MainController extends MainDAO
{

    public static function index()
    {
        
        Flight::render('index', ['titulo' => 'Bem vindo']);
       
    }

    public static function main()
    {

        $dados = self::getdata();
        echo json_encode($dados);
        // Flight::render('table',['body' => $dados]);
    }

}