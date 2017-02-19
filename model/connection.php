<?php
class Db{
    private static $instance = NULL;

    private function __construct(){}

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    //Singleton. This allows us to return an instance of the connection and always the same as we only need one to execute all our queries.
    public static function getInstance(){
        if(!isset(self::$instance)){
            $pdoOptions[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost; dbname=tailMate', 'root', '1234', $pdoOptions);
        }
        return self::$instance;
    }

}