<?php

require_once ('connection.php');
class BaseDAO extends Connection 
{
    public static function DbInsert($query)
    {
        $sql = self::dbconnection()->prepare($query);
        $sql->execute();
    }

    public static function Dbselect($query)
    {
        $sql = self::dbconnection()->prepare($query);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

} 