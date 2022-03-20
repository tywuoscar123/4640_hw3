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
        if($sumAvail == 0){
            return 0;
        }else if($drop && count($scores) > 1){
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
        $result = array();
        //bottom left corner        
        $result[] = 1;
        $result[] = 2;
        $result[] = 1 + $height;
        //top left corner
        $result[] = $height;
        $result[] = $height - 1;
        $result[] = $height * 2;
        //top right corner
        $result[] = $width * $height;
        $result[] = $width * $height - 1;
        $result[] = $width * $height - $height;
        //bottom right corner
        $result[] = $width * $height - ($height - 1);
        $result[] = $width * $height - ($height - 1) - $height;
        $result[] = $width * $height - ($height - 1) + 1;
        sort($result);
        $result = array_unique($result);
        $result = array_values($result);
        return $result;
    }

    function combineShoppingLists(...$shoppingLists){
        $combinedList = array();
        //iterate through entered lists
        foreach($shoppingLists as $shoppingList){
            //check if list exists, if not, continue
            if(array_key_exists("list", $shoppingList)){
                //check if item exists as key in combinedList, if not, add item as key and value pair
                foreach($shoppingList["list"] as $item){
                    if(array_key_exists($item, $combinedList)){
                        array_push($combinedList[$item], $shoppingList["user"]);
                        continue;
                    }else{
                        $combinedList[$item] = array($shoppingList["user"]);
                    }
                }
            }
        }
        return $combinedList;
    }

    function validateEmail($email, $regex = 0){
        $defaultRegex = "/^[a-zA-z0-9-_+]?[a-zA-z0-9-_+.]*[a-zA-z0-9-_+]?@[a-zA-z0-9.-]*.[a-zA-z0-9.-]*$/";
        if($regex == 0){
            return preg_match($defaultRegex, $email) ? true : false;
            }else{
                if(preg_match($defaultRegex, $email) == 1 && preg_match($regex, $email)){
                    return true;
                }else{
                    return false;
                }
            }
    }