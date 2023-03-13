<?php


 class Connection {
    public static $dbhost;
    public static $dbuser;
    public static $dbname;
    public static $dbpassword;

    public static function dbconnection()
    {
        $dbhost = self::$dbhost;
        $dbuser = self::$dbuser;
        $dbname = self::$dbname;
        $dbpassword = self::$dbpassword;

        return new pdo ("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);
    }

}