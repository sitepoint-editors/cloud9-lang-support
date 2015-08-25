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
$select_all = "SELECT * FROM users;";

$result = $db->query($select_all) or trigger_error($db->error);

echo "<ul>";
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    printf("<li>%s's username is %s</li>", $row['first_name'], $row['username']);
}
echo "</ul>";
