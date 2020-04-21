<?php

$people[] = "Takesure";
$people[] = "Amanda";
$people[] = "Shawn";
$people[] = "Derek";
$people[] = "Trump";
$people[] = "Brad";
$people[] = "Mike";
$people[] = "Rachel";
$people[] = "Diana";
$people[] = "Ropafadzo";
$people[] = "Gamuchirai";
$people[] = "Tooyoung";
$people[] = "Jescah";
$people[] = "Clever";
$people[] = "Patience";

//Get Query String

$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;