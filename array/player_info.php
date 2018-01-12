
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Players Info List</title>

		
	</head>
	<body>
            
<?php 
                

include ("connection.php");

// Create connection
$conn = connection::connect();


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM player  ";

    if ($result = $conn->query($sql)){
    
    
$ID = new ArrayIterator(array());
$name = new ArrayIterator(array());
$age = new ArrayIterator(array());
$country = new ArrayIterator(array());
$team = new ArrayIterator(array());

$it = new MultipleIterator;
$it->attachIterator($ID);
$it->attachIterator($name);
$it->attachIterator($age);
$it->attachIterator($country);
$it->attachIterator($team);

while($row = $result->fetch_assoc())
{  
 $ID[] = $row["ID"];   
$name[] = $row["name"];
$age[] = $row["age"];
$country[] = $row["country"];
$team[] = $row["team"];
}  


                
                
                foreach($it as $e ){ 	 ?>
			<strong>Info of player # <?php echo $e[0]; ?></strong>
			<ul>
                            <li><strong>Name:    </strong><?php echo $e[1]; 	 ?></li>
                            <li><strong>Age:     </strong><?php echo $e[2]; 	 ?></li>
                            <li><strong>Country: </strong><?php echo $e[3]; 	 ?></li>
                            <li><strong>Team:	   </strong><?php echo $e[4]; 	 ?></li>
			</ul>
		<?php } 
                } ?>
	</body>
</html>