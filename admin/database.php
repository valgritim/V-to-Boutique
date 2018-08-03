<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "vetoBoutique";
    private static $dbUser = "root";
    private static $dbUserpassword = "valgritim";
    
    protected static $connection = null;
    
    public static function connect()
    {
        try{
                 //echo "try connexion\n";
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";charset=UTF8;dbname=" . self::$dbName, self::$dbUser,self::$dbUserpassword);
               
    
            }
            catch (PDOException $e)
            {
    
                die($e->getMessage()); 
                    
            }
            return self::$connection;
     }
     
     public static function disconnect(){
        self::$connection = null;
     
     }
    
}




?>
