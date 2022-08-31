
<?php 
$db_host = "localhost";
$db_name = "portifolio_marcelo";
$db_pass = "";
$db_user = "root";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);


?>