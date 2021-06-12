<?php 
// Development Connection
// DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','elms');
// Establish database connection.


// Remote Database Connection
define('DB_HOST','sql4.freemysqlhosting.net');
define('DB_USER','sql4418741');
define('DB_PASS','KWTecgimxc');
define('DB_NAME','sql4418741');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>