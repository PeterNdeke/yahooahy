<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p id="name">Name:</p>
        <p id="age">Age:</p>
        <p id="country">Country:</p>
        <p id="team">Team:</p>
        <?php
       
        
        
          $players1 = array("Name"=>"Ronaldo", "Age"=>31, "Country"=>"Portugal","Team"=>"RealMadrid"); 
          $label = array("Name: ", "Age: ", "Country: ", "Team: ");
          $count1=0;
          echo "Info of player # 1: <br>";
          foreach ($players1 as $value) {
           //$count=0;
           echo "$label[$count1]".$value."<br />";  
           $count1++;
         }
        
         $players2 = array("Name"=>"Messi", "Age"=>"27", "Country"=>"Argentina" ,"Team" =>"Barcelona"); 
          //$label2 = array("Name:", "Age:", "Country:", "Team");
          //global $count;
          echo "<br>Info of player # 2: <br>";
          $count2=0;
          foreach ($players2 as $value) {
           //$count=0;
           echo "$label[$count2]".$value."<br />";
  
          $count2++;
        }
        
        $players3 = array("Name"=>"Neymer", "Age"=>"24", "Country"=>"Brazil" ,"Team" =>"Barcelona"); 
          //$label2 = array("Name:", "Age:", "Country:", "Team");
          //global $count;
          echo "<br>Info of player # 3: <br>";
          $count3=0;
          foreach ($players3 as $value) {
           //$count=0;
           echo "$label[$count3]".$value."<br />";
  
          $count3++;
        }
        
         $players4 = array("Name"=>"Rooney", "Age"=>"30", "Country"=>"England" ,"Team" =>"Man United"); 
          //$label2 = array("Name:", "Age:", "Country:", "Team");
          //global $count;
          echo "<br>Info of player # 4: <br>";
          $count4=0;
          foreach ($players4 as $value) {
           //$count=0;
           echo "$label[$count4]".$value."<br />";
  
          $count4++;
        }
        ?>
    </body>
</html>
