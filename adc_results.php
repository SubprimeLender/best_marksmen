<!DOCTYPE html>
<html>
	
<head>
<title>The Best ADC is...</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- JQuery function that hides "partialtable" and brings up "fulltable", only useful if viewed on mobile -->
	<script src="adc_select.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- Top of page heading -->
<div class ="jumbotron jumbotron-fluid">
	<div class ="container text-center">
		<h1>The Best Marksmen (for you)</h1>
		<h3>The champion that fits your playstyle the most is:</h3>
	</div>
</div>

<div class="container">
	<div class="row">
		<!-- Complete table of all 17 ADCs and their respective % with picture link -->
		<div id="fulltable" class="col-lg-5 col-md-5 hidden-sm hidden-xs">
			<table class="table">
				<thead><tr>
					<th>Champion</th>
					<th>Effectiveness</th>
					<th>Portraits</th>
				</tr></thead>
				<tbody>
					<?php
					include 'adc_preference_functions.php'; //reference functions already includes reference adc_array
					include 'ddragon_version_url.php'; //data dragon base url
					
					/*
					*Sorts $session_array highest first
					*Displays all 17 champions
					*@return champion[name] || average% || champion thumbnail					
					*/
					arsort($session_answer); 
					foreach($session_answer as $k => $v) {
						echo "<tr><td>" . $k . ":</td><td> " . $v . "%  </td><td><img src='$ddragon/img/champion/$k.png' id='$k' width='50' height='50'></td></tr>";
					};
					?>
				</tbody>
			</table>
		</div>
		<!-- Partial table of 4 highest averaging ADCs and their respective % with picture link to respective probuilds.net, "See all results" button will hide partialtable and unhide fulltable -->
		<div id="partialtable" class="hidden-lg hidden-md col-sm-12 col-xs-12">
			<table class="table">
				<thread><tr>
					<th>Champion</th>
					<th>Effectiveness</th>
					<th>Portraits</th>
				</tr></thread>
				<tbody>
					<?php
					/*
					*Sorts $session_array highest first
					*displays only top 4 with "see all" option (for mobile)
					*@return champion[name] || average% || champion thumbnail that links to probuilds.net
					*/
					arsort($session_answer);
					$i = 0;
					foreach($session_answer as $k => $v) {
						echo "<tr><td>" . $k . ":</td><td> " . $v . "%  </td><td><img src='$ddragon/img/champion/$k.png' id='$k' width='50' height='50'></td></tr>";
						if (++$i == 4) break;
					};
					?>
				</tbody>
			</table>
			<div id="showall" class="text-center">
				<button id="showall" type="button" class="btn btn-danger btn-lrg">See all results</button><br>
			</div>
		</div>
		<!-- Description of highest averaging ADC, answers are anonymously recorded in database-->
		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
			<div class="champ-info">
				<?php
				include 'adc_info.php'; //reference of champion descriptions
				
				//Displays name and description of most effective champion by drawing $$key from adc_info.php
				$high = max($session_answer);
				$key = array_search($high, $session_answer);
				echo "<h1>$key</h1><br>";
				echo $$key;

				include 'adc_db_info.php'; //reference for database info

				//Insert into table best_adc
				/*
				$sql="INSERT INTO best_adc  
					(Rank, Laning, Kiting, Dodging, Teamfighting, Positioning, Dueling, Landing, Champion)
					VALUES 
					('$answer_rank', '$answer_laning', '$answer_kiting', '$answer_dodging', '$answer_teamfighting', '$answer_positioning', '$answer_dueling', '$answer_landing', '$key')
					";
				if ($conn->query($sql) === TRUE) {
					echo "<hr>";
				};
				*/
				?>
			</div>
		</div>
	</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<br><br><br>
</body>

</html>
