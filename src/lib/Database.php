<?php

namespace App\lib;

use PDO;
use PDOException;

class Database
{

    private String $host;
    private String $db;
    private String $user;
    private String $password;

    public function __construct()
    {
        $this->host     = $_ENV['HOST'];
        $this->db       = $_ENV['DB'];
        $this->user     = $_ENV['USER'];
        $this->password = $_ENV['PASSWORD'];
    }

    public function connect(): PDO
    {
        try {
            $connection = "pgsql:host" . $this->host . ";dbname=" . $this->db;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            return new PDO(
                $connection,
                $this->user,
                $this->password,
                $options,
            );
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
