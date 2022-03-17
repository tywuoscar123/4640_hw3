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
            $percentage = round($scores["score"]/$scores["max"], 3);
            if($percentage < $lowestPercentage){
                $lowestScored = $scores["score"];
                $lowsestAvail = $scores["max"];
            }
            $sumScored = $sumScored + $scores["score"];
            $sumAvail = $sumAvail + $scores["max"];
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