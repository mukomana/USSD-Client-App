<?php

require_once 'config.php';

class Database {
    
    private $dbConnection;
    private $Credentials;
    
    function connect() {
        
        /* Get login details */
        getCredentials();
        
        // Create connection
        $db = new mysqli($db['DB_HOST'], $db[DB_USER], $db['DB_PASSWORD'], $db['DB_DATABASE'], $db['DB_PORT']);
        
        // Check connection
        if ($db->connect_error) {
            header('Content-type: text/plain');
            
            //log error to file/db $e-getMessage()
            die("END An error was encountered. Please try again later");
        } else {
            $this->dbConnection = $db;
            echo 'Connection established!';
            return $this->dbConnection;
        }
    }
    
    function close() {
        mysqli_close($dbConnection);
        echo 'Connection closed!';
    }
    
    function getCredentials() {
        $db = parse_ini_file(config.ini);
    }
}
