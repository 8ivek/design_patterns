<?php
// Singleton Pattern
// We use singleton pattern when object never have more than one instance

class Database
{
    private static ?Database $instance = null;

    /**
     * Database constructor.
     */
    private function __construct()
    {
        // code to connect to database
    }

    /**
     * @return Database
     */
    public static function getInstance(): Database
    {
        if (!self::$instance instanceof Database) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}

class DB
{
    public function __construct()
    {
        // code to connect to db
    }
}

// we only need one connection to db => so we use singleton pattern here
// All variables below points to the same object.
$db = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

$db4 = new DB();
$db5 = new DB();
$db6 = new DB();

// $db1, $db2, $db3, all gives same instance of class Database,
var_dump($db, $db2, $db3);

// $db4, $db5, $db6 => gives different instance of class DB;
var_dump($db4, $db5, $db6);