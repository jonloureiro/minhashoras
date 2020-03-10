<?php

declare(strict_types=1);

namespace App\Lib;

use PDO;
use PDOException;

class Database
{
    protected static $instance;

    private function __contruct()
    {
    }

    public static function getDatabaseHandle()
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        $host = getenv('HOST_DB');
        $user = getenv('USER_DB');
        $pass = getenv('PASS_DB');
        $db = getenv('NAME_DB');

        echo $host . " " . $user . " " . $pass . " " . $db;

        try {
            self::$instance = new PDO(
                "pgsql:host=" . $host .
                ";dbname=" . $db,
                $user,
                $pass,
                [
                    PDO::ATTR_PERSISTENT => true
                ]
            );
            return self::$instance;
        } catch (PDOException $e) {
            print_r($e);
            die("Error: " . $e->getMessage());
        }
    }
}
