<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "php";
mysql_connect($servername, $username, $password) or die('could not connect to the database');
mysql_selectdb($dbname)or die('could not select database');

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 

// sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";
//$sql = "CREATE TABLE tamil(tid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,title VARCHAR(30) NOT NULL,film_name VARCHAR(100) NOT NULL,description VARCHAR(100) NOT NULL,reg_date TIMESTAMP)";

//if ($conn->query($sql) === TRUE) {
  //  echo "Table MyGuests created successfully";
//} else {
  //  echo "Error creating table: " . $conn->error;
//}

//$conn->close();

?>