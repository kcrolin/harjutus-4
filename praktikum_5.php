<!DOCTYPE HTML>
  <head>
    <title>Andmetüübid(2)</title>
    <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  
	<h2>Arvutamine murd- ja täisarvudega</h2> 
	 <?php echo $float = 3.14; ?><br>
	 <?php echo $float + 7; ?><br>
	 <?php echo 4/3; ?><br>
	
	 <h2>Murdarvude ümardamine</h2> 
	 
  <?php echo round($float,1); ?><br>
  <?php echo ceil($float); ?><br>
  <?php echo floor($float); ?><br>
  
  <h2>Andmetüübi funktsioonid</h2> 
  
   <?php $integer=3; ?>
   <?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
   <?php echo "Kas {$float} on integer? " . is_int($float); ?><br>
   <?php echo "Kas {$float} on float? " . is_float($float); ?><br>
   <?php echo "Kas {$integer} on float? " . is_float($integer); ?><br>
   <?php echo "Kas {$integer} on number? " . is_numeric($integer); ?><br>
   <?php echo "Kas {$float} on number? " . is_numeric($float); ?><br>
   
   <h2>Jadad (array)</h2> 
   
   <?php
    $numbers = array(4, 8, 15, 16, 23, 42);
	echo $numbers[0];
	echo "<br>";
	echo $numbers[1];
	echo "<br>";
	echo $numbers[2];
	echo "<br>";
	echo $numbers[3];
	echo "<br>";
	echo $numbers[4];
	echo "<br>";
	echo $numbers[5];
?>

<?php $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
echo "<br>";
echo $mixed[2]; 
echo "<br>";
echo $mixed[4][2];
$mixed[2] = "kass"; 
$mixed[5] = "kass"; 
$mixed[] = "veel kass"; 
echo "<br>";
echo $mixed;?> <br>

<pre><?php echo print_r($mixed); ?></pre>

 <h2>Associative arrays</h2> 
 
<?php $assoc = array("first_name" => "Cärolin", "last_name" => "Karing"); ?>
<?php echo $assoc["first_name"]; ?><br>
 <?php echo $assoc["last_name"]; ?>
 
 <?php $assoc["first_name"] = "Karin"; ?>
<?php $assoc["last_name"] = "X" ?><br>
<?php echo $assoc["first_name"]; ?><br>
 <?php echo $assoc["last_name"]; ?>
<?php $assoc["email"] = "carolin.karing@khk.ee" ?><br> 
<?php echo "Minu nimi on " .$assoc["first_name"] . " " . $assoc["last_name"]. ". " . "Minu e-post on " . $assoc["email"]; ?>
 
  <h2>Array functions</h2> 
  
  <?php $numbers_2 = array(8,23,15,42,16,4);

echo count($numbers_2); 
echo "<br>";
echo max($numbers_2);
echo "<br>";
echo min($numbers_2);
echo "<br>"
 ?>
 
<?php sort($numbers_2);
print_r($numbers_2);
 ?>
 
 <br>
 
 <?php rsort($numbers_2);
print_r($numbers_2);
 ?> 
  
  <br>
 
 <?php echo $num_string = implode(" ja ",$numbers_2);

 ?>  
 
  <br>
 
<?php print_r(explode(" ja ", $num_string)); ?>
  
  </body>
</html>