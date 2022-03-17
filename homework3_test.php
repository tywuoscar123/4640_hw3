<?php
    include("homework3.php");
?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="your name">
  <meta name="description" content="include some description about your page">  
    
  <title>Homework 3 Test File</title>
</head>
<body>
<h1>Homework 3 Test File</h1>

<h2>Problem 1</h2>
<?php
  echo "Write tests for Problem 1 here<br>";
  $test1 = [ [ "score" => 55, "max_points" => 100 ], [ "score" => 55, "max_points" => 100 ] ];
  echo calculateGrade($test1, false); // should be 55
  echo "<br>Run gridCorners()<br>";
  $gridResult = gridCorners(3,4);
  for($i = 0; $i < count($gridResult); $i += 1){
    echo $gridResult[$i];
    echo ", ";
  }
  echo "<br>"
   
?>

<p>...</p>
</body>
</html>