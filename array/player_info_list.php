<?php
/** 
Author - Eneh James
Description - PHP code snipet to display array information of players in a defined format.
Date/Time - 11/01/2018 / 21:23:00
**/
	$players[] = [						//players information array begins here
		"Name" => "Ronaldo",
		"Age" => "31",
		"Country" => "Portugal",
		"Team" => "Real Madrid"];

	$players[] = [
		"Name" => "Messi",
		"Age" => "27",
		"Country" => "Argentina",
		"Team" => "Barcelona"];

	$players[] = [
		"Name" => "Neymar",
		"Age" => "24",
		"Country" => "Brazil",
		"Team" => "Barcelona"];

	$players[] = [
		"Name" => "Rooney",
		"Age" => "30",
		"Country" => "England",
		"Team" => "Man United"];		//players information array ends here
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Players Info List</title>

		<style type="text/css">

		*{
			font: 14px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		body {
			background-color: #fff;
			margin: 50px;
		}

		strong {
			clear: left;
			float: left;
			color: #ff4000;
			font-size: 16px;
			font-weight: bold;
		}

		ul{
			clear: left;
			display: block;
			float: left;
			list-style-type: none;
			border-bottom: 1px solid #ff4000;
		}

		li {
			clear: left;
			float: left;
			list-style-type: none;
			margin-left: -2.5em;
			color: #000000;
		}

		span {
			font-weight: bold;
			font-style: italic;
		}
		</style>
	</head>
	<body>
		<?php foreach($players as $i => $j){ 	//Looping through the players array starts here ?>
			<strong>Info of player # <?php echo ($i+1); ?></strong>
			<ul>
				<li><span>Name:    </span><?php echo $players[$i]['Name']; 		//Displays player's name ?></li>
				<li><span>Age:     </span><?php echo $players[$i]['Age']; 		//Displays player's age ?></li>
				<li><span>Country: </span><?php echo $players[$i]['Country']; 	//Displays player's country ?></li>
				<li><span>Team:	   </span><?php echo $players[$i]['Team']; 		//Displays player's team ?></li>
			</ul>
		<?php } 								//Looping through the players array ends here?>
	</body>
</html>