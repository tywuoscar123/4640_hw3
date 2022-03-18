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
  //tests for p1
  echo "Write tests for Problem 1 here<br>";
  $test1 = [ [ "score" => 55, "max_points" => 100 ], [ "score" => 55, "max_points" => 100 ] ];
  echo calculateGrade($test1, false); // should be 55
  //p2
  echo "<br>Run gridCorners() (problem 2) <br>";
  $gridResult = gridCorners(3,4);
  for($i = 0; $i < count($gridResult); $i += 1){
    echo $gridResult[$i];
    echo "    ";
  }
  echo "<br>";
  //p3
  echo "<br>Run combineShoppingLists() (p3) <br>";

  $list1 = [ "user" => "Fred", 
           "list" => ["frozen pizza", "bread", "apples", "oranges"]
         ];

  $list2 = [ "user" => "Wilma",
           "list" => ["bread", "apples", "coffee"]
         ];
  echo print_r(combineShoppingLists($list1, $list2));
  echo "<br> ";
?>

<p>...</p>
</body>
</html>