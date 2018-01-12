<?php

include ("connection.php");
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
// Create connection
$conn = connection::connect();


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT *
FROM array  ";
    if ($result = $conn->query($sql)){
    
    // while($row = $result->fetch_assoc()) {
        // foreach ($result as $row){
             
     //require 'PHPMailer/PHPMailerAutoload.php';
        $name = new ArrayIterator(array());
$age = new ArrayIterator(array());
 $country = new ArrayIterator(array());
$team = new ArrayIterator(array());

$it = new MultipleIterator;
$it->attachIterator($name);
$it->attachIterator($age);
$it->attachIterator($country);
$it->attachIterator($team);

while($row = $result->fetch_assoc())
{     
$name[] = $row["name"];
$age[] = $row["age"];
$country[] = $row["country"];
$team[] = $row["team"];
}  

foreach($it as $e) {
   
			
				 echo $e[0]; 		
				echo $e[1]; 		
				 echo $e[2]; 
				 echo $e[3]; 	
			
}
    }