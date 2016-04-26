<?php
include 'adc_array.php'; //ADC multi-array reference page

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
*Calculates differences between each answer given against each champion's attributes, then computes averages by champion.
*@param $answers1-10, then $champion[laning-support3], then $weighted_average
*@return average between all differences sans %
*/
function sum_all(
	$answer_laning, $answer_kiting, $answer_support1, $answer_dodging, $answer_teamfighting, $answer_support2, $answer_positioning, $answer_dueling, $answer_landing, $answer_support3, 
	$champ_laning, $champ_kiting, $champ_support1, $champ_dodging, $champ_teamfighting, $champ_support2, $champ_positioning, $champ_dueling, $champ_landing, $champ_support3, $weighted_average) 
{
	//For the 3 support questions, each question has 1 support that does not combo well with the ADC. therefore, if the user picks the crappy combo, returns 0; otherwise 100
	if (!function_exists('support')) {
		function support($answer_support, $champ_support) {
			if ($answer_support == $champ_support){
				return 0;
			} 
				return 100;
		};
	};

	//Sums up the differences between user's answers and each ADC's pre-determined attributes from adc_array2.php. notice the 3 support questions are given 50% weight
	$sum = 
		(100 - abs($answer_laning - $champ_laning)) + 
		(100 - abs($answer_kiting - $champ_kiting)) +
		(support($answer_support1, $champ_support1) * 0.5) +
		(100 - abs($answer_dodging - $champ_dodging)) + 
		(100 - abs($answer_teamfighting - $champ_teamfighting)) +
		(support($answer_support2, $champ_support2) * 0.5) +
		(100 - abs($answer_positioning - $champ_positioning)) +
		(100 - abs($answer_dueling - $champ_dueling)) + 
		(100 - abs($answer_landing - $champ_landing)) +
		(support($answer_support3, $champ_support3) * 0.5);
	//Divides the sum by the $weighted_average to get the average of all the differences for a particular ADC
	return intval($sum/$wa);
};
//$session_answer is the new array used to store the averages from the function sum_all
$session_answer = array();

/**
*Loops through all 17 ADC, passing each ADC's 10 attributes through the function sum_all and comparing them all with user's answers
*Stores each average into array $session_answer as [champion name] => 'average'
*/
foreach($champions as $c) {
$session_answer[$c['name']] = sum_all(
	$answer_laning, $answer_kiting, $answer_support1, $answer_dodging, $answer_teamfighting, $answer_support2, $answer_positioning, $answer_dueling,  $answer_landing, $answer_support3,
	$c['laning'], $c['kiting'], $c['support1'], $c['dodging'], $c['teamfighting'], $c['support2'], $c['positioning'], $c['dueling'], $c['landing'], $c['support3'], $weighted_average);
};
