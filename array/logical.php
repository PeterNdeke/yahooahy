<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//0-1 Knapsack greedy algorithm 
class tanxin{
  public $weight;
  public $price;
  public function __construct($weight=0,$price=0)
  {
    $this->weight=$weight;
    $this->price=$price;
  }
}
// Generate data 
$n=10;
for($i=1;$i<=$n;$i++){
  $weight=rand(1,20);
  $price=rand(1,10);
  $x[$i]=new tanxin($weight,$price);
}
// Output result 
function display($x)
{
  $len=count($x);
  foreach($x as $val){
    echo $val->weight,' ',$val->price;
    echo '<br>';
  }
}
// Sort by price and weight ratio 
function tsort(&$x)
{
  $len=count($x);
  for($i=1;$i<=$len;$i++)
  {
    for($j=1;$j<=$len-$i;$j++)
    { 
      $temp=$x[$j];
      $res=$x[$j+1]->price/$x[$j+1]->weight;
      $temres=$temp->price/$temp->weight;
      if($res>$temres){
        $x[$j]=$x[$j+1];
        $x[$j+1]=$temp;
      }
    }
  } 
}
// Greedy Algorithm 
function tanxin($x,$totalweight=50)
{
  $len=count($x);
  $allprice=0;
  for($i=1;$i<=$len;$i++){
    if($x[$i]->weight>$totalweight) break;
    else{
      $allprice+=$x[$i]->price;
      $totalweight=$totalweight-$x[$i]->weight;
    }
  }
  if($i<$len) $allprice+=$x[$i]->price*($totalweight/$x[$i]->weight);
  return $allprice;
}
tsort($x);// Non increasing order 
display($x);// display 
echo '0-1 Knapsack optimal solution :';
echo tanxin($x);