<?php

$dbconfig = require_once 'config.php';

$db = new mysqli($dbconfig['server'], 
                 $dbconfig['username'], 
                 $dbconfig['password'], 
                 $dbconfig['database'], 
                 $dbconfig['port']);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//drop existent users table
$db->query("DROP TABLE IF EXISTS users");

$create_table_users = "CREATE TABLE users ("
    . "id INT(6) PRIMARY KEY AUTO_INCREMENT, "
    . "first_name VARCHAR(50) NOT NULL UNIQUE, "
    . "username VARCHAR(70) NOT NULL"
    . ");";

if ($db->query($create_table_users)) {
    printf("'users' TABLE CREATED SUCCESSFULLY\n");
} else {
    printf("COULDN'T CREATE TABLE 'users'\n");
}

//insert data into the table
$db->query("INSERT INTO users (id, first_name, username) VALUES (1, 'Kevin', 'kevinminion')");
$db->query("INSERT INTO users (id, first_name, username) VALUES (2, 'Stuart', 'hungrystuart')");
$db->query("INSERT INTO users (id, first_name, username) VALUES (3, 'Bob', 'kingbob')");
printf("%d rows inserted\n", $db->insert_id);
