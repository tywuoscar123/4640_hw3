<?php
    /**
     * Homework 3 - Practicing PHP
     *
     * Computing ID:
     * Resources used: [list any resources used to complete this assignment]
     */
     
    // Your functions here

    // No closing php tag needed since there is only PHP in this file
    function calculateGrade($scores, $drop){
        $lowestPercentage = PHP_INT_MAX;
        $lowestScored = 0;
        $lowestAvail = 0;
        $sumScored = 0;
        $sumAvail = 0;
        for($i = 0; $i < count($scores); $i++){
            $percentage = round($scores[$i]["score"]/$scores[$i]["max_points"], 3);
            if($percentage < $lowestPercentage){
                $lowestScored = $scores[$i]["score"];
                $lowsestAvail = $scores[$i]["max_points"];
            }
            $sumScored = $sumScored + $scores[$i]["score"];
            $sumAvail = $sumAvail + $scores[$i]["max_points"];
        }
        if($drop){
            $sumScored = $sumScored - $lowestScored;
            $sumAvail = $sumAvail - $lowestAvail;
            $average = round(100 * ($sumScored/$sumAvail), 3);
            return $average;
        }else{
            $average = round(100 * ($sumScored/$sumAvail), 3);
            return $average;
        }
    }

    function gridCorners($width, $height){
        echo "<br> <br>";
        $result = array();
        $colCount = 1;
        $rowCount = 1;
        for($i = 1; $i <= $width * $height; $i++){
            echo "<br> CURRENT COL, ROW ";
            echo $colCount;
            echo " ";
            echo $rowCount;
            echo "<br> CURRENT i ";
            echo $i;
            echo "<br>";
            //case for col 0 and n
            if($i == 1 || ($i % $width) == 0){
                echo "appendin";
                $result[] = $i;
                //when you complete 1 col, reset rowCount, colCount++
                if(($i % $height) == 0){
                    echo "<br> COMPLETED 1 COL RESET ROWCOUNT, COLCOUNT++ <br>";
                    $rowCount = 1;
                    $colCount++;
                    continue;
                }else{
                    echo "<br> rowCount++ <br>";
                    $rowCount++;
                    continue;
                }
            //case for numbers in between
            }else{
                if($rowCount == 0 || $rowCount == $height)
                $result[] = $i;
                if(($i % $height) == 0){
                    echo "<br> COMPLETED 1 COL RESET ROWCOUNT, COLCOUNT++ <br>";
                    $rowCount = 1;
                    $colCount++;
                    continue;
                }else{
                    echo "<br> rowCount++ <br>";
                    $rowCount++;
                    continue;
                }
            }
        }
        return $result;
        echo "<br>";
    }