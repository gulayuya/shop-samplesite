<?php 
$db = new mysqli('mysql', 'testuser', 'testpass', 'sample');

if ($db->connect_error) {
    echo $db->connect_error;
    exit();
} else {
    $db->set_charset('utf8');
}

?>