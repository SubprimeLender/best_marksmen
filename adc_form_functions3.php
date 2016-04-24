<?php
include 'adc_array2.php'; //ADC multi-array reference page

//posted answers converted to variables
$answer_laning = $_POST["laning"];
$answer_kiting = $_POST["kiting"];
$answer_support1 = $_REQUEST["support1"]; 
$answer_dodging = $_POST["dodging"]; 
$answer_teamfighting = $_POST["teamfighting"];
$answer_support2 = $_REQUEST["support2"];
$answer_positioning = $_POST["positioning"];
$answer_dueling = $_POST["dueling"];
$answer_landing = $_POST["landing"]; 
$answer_support3 = $_REQUEST["support3"];
$answer_rank = $_POST["rank"];

$weighted_average = 8.5; //denominator for weighted average

/**
*Calculates differences between each answer given against each champion's attributes, 
*then computes averages by champion.
*@param $answers1-10, then $champion[laning-support3], then $weighted_average
*@return average between all differences sans %
*/
function sum_all(
	$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, 
	$c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10, $wa) 
{
	if (!function_exists('support')) {
		function support($a, $c) {
			if ($a == $c){
				return 0;
			} 
				return 100;
		};
	};
	$sum = 
		(100 - abs($a1 - $c1)) + 
		(100 - abs($a2 - $c2)) +
		(support($a3, $c3) * 0.5) +
		(100 - abs($a4 - $c4)) + 
		(100 - abs($a5 - $c5)) +
		(support($a6, $c6) * 0.5) +
		(100 - abs($a7 - $c7)) +
		(100 - abs($a8 - $c8)) + 
		(100 - abs($a9 - $c9)) +
		(support($a10, $c10) * 0.5);
	return intval($sum/$wa);
};
//$session_answer is the new array used to store the averages from the function sum_all
$session_answer = array();

/**
*Loops through all 17 champions, passing each of their attributes through the function sum_all,
*then stores each average into array $session_answer as [champion name] => 'average'
*/
foreach($champions as $c) {
$session_answer[$c['name']] = sum_all(
	$answer_laning, $answer_kiting, $answer_support1, $answer_dodging, $answer_teamfighting, $answer_support2, $answer_positioning, $answer_dueling,  $answer_landing, $answer_support3,
	$c['laning'], $c['kiting'], $c['support1'], $c['dodging'], $c['teamfighting'], $c['support2'], $c['positioning'], $c['dueling'], $c['landing'], $c['support3'], $weighted_average);
};
?>
