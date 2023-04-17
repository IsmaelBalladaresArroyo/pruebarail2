<?php
	function conexion(){
	$host = "host=containers-us-west-198.railway.app";
	$port = "port=7377";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=0HbTRyk5Kxr9xjNAldaL";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>