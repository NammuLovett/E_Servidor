<?php

require_once 'config/config.php';
/*DB connection to the database*/

class db_connect
{
    private $host;
    private $db;
    private $user;
    private $pass;
    public $conection;

    public function __construct()
    {
        $this->host = constant('DB_HOST');
        $this->db = constant('DB_DATABASE');
        $this->user = constant('DB_USER');
        $this->pass = constant('DB_PASS');

        $this->conection = new mysqli($this->host,  $this->user, $this->pass, $this->db);

        if ($this->conection->connect_error) {
            die("connection failed: " . $this->conection->connect_error);
        }
    }
}
