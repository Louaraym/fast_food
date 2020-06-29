<?php

class Database
{
//    private static $dbHost = 'localhost';
//    private static $dbName = 'lora0935_fast_food';
//    private static $dbUsername = 'lora0935_Raymond';
//    private static $dbUserpassword = 'Takoleta2016';

    private static $dbHost = 'localhost';
    private static $dbName = 'fast_food';
    private static $dbUsername = 'root';
    private static $dbUserpassword = '';
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}

