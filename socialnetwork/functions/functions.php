<?php

// Establish connection to database
function connect() {
    static $conn;
    if ($conn === NULL){ 
        $conn = mysqli_connect('localhost','root','','socialnetwork');
    }
    return $conn;
}

// Escape strings to keep inputs safe
function sanitize($data){
    $conn = db ();
    return mysqli_real_escape_string($conn, $data);
}

?>