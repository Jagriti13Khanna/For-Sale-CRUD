<?php


$db_server = "localhost";
$db_username = "";
$db_password = "";
$database = "";

$conn = new mysqli($db_server, $db_username, $db_password, $database);

if($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// else
// {
//     echo "Connection good";
// }

//This stops SQL Injection in POST vars
foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($conn, $value);
}

//This stops SQL Injection in GET vars
foreach ($_GET as $key => $value) {
    if(!is_array($_GET)) {
        $_GET[$key] = mysqli_real_escape_string($conn, $value);
    }
}

if(!defined("BASE_URL"))
{
    define("BASE_URL", "https://jkhanna1.dmitstudent.ca/dmit2025/labs/lab7/" );
}

if (!defined("THIS_PAGE")) {
    define("THIS_PAGE", $SERVER['PHP_SELF']);
}

?>