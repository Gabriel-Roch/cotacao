<?php

require_once ("BaseDAO.php");

class MainDAO extends BaseDAO 
{
    public static function getdata()
    {
        $sql = "SELECT * FROM cotation_system.users;";
        return self::Dbselect($sql);
    }
}