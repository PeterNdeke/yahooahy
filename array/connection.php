<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connection
 *
 * @author Peter
 */
class connection {

    public static function connect() {
        $servername = "localhost";
        $dbase = "test";
        
        $username = "root";
        $password = "toor";
     

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbase);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
          //echo "Connected successfully";
        return $conn;
    }

}