<?php

class DB_connect {

    protected $db;

    protected function __construct($dbo = NULL) {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            // Constants are defined in /sys/config/db-cred.inc.php
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            try {
                $this->db = new PDO($dsn, DB_USER, DB_PASS);
            } catch (Exception $e) {
                // If the DB connection fails, output the error
                die($e->getMessage());
            }
        }
    }

}
