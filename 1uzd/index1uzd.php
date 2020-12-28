<?php 

$player1_1 = rand(1, 11);
$player1_2 = rand(1, 11);
$player2_1 = rand(1, 11);
$player2_2 = rand(1, 11);

?>

<html lang="en">

	<head>

		<meta charset="UTF-8" />
		<title>beveik 21</title>
		<link rel="stylesheet" href="style.css" />

		<style type="text/css">
			
			h1 {
				text-align: center;
				color: #7957fb;
			}

			h2 {
				text-align: center;
				color: #79a7e8;
			}

			.boxcontainer {
				display: flex;
				justify-content: center;
			}

			.box {
				width: 200px;
				height: 200px;
				border-radius: 20px;
				border: 1px solid #79d2db;
				text-align: center;
				color: #6ec2d7;
				font-size: 50px;
				margin: 30px;
				line-height: 200px; /*naudojamas, tik tekstui*/
			}

		</style>

	</head>

	<body>

		<h1><?php

			if(($player1_1 + $player1_2) == ($player2_1 + $player2_2)) {

				print "Tie";

			} elseif(($player1_1 + $player1_2) == 22 && ($player2_1 + $player2_2) == 21) {

				print "Violeta is the winner with " . ($player2_1 + $player2_2);

			} elseif(($player1_1 + $player1_2) == 21 && ($player2_1 + $player2_2) == 22) {

				print "Enemy is the winner with " . ($player1_1 + $player1_2);

			} elseif(21 - ($player1_1 + $player1_2) < 21 - ($player2_1 + $player2_2)) {

				print "Enemy is the winner with " . ($player1_1 + $player1_2);

			} else {

				print "Violeta is the winner with " . ($player2_1 + $player2_2);
			}	
		
		?>!!!</h1>

		<h2>Enemy gets <?php print $player1_1 + $player1_2; ?></h2>

		<div class="boxcontainer">	
			<div class="box"><?php print $player1_1; ?></div>
			<div class="box"><?php print $player1_2; ?></div>
		</div>

		<h2>Violeta gets <?php print $player2_1 + $player2_2; ?></h2>

		<div class="boxcontainer">
			<div class="box"><?php print $player2_1; ?></div>
			<div class="box"><?php print $player2_2; ?></div>
		</div>

	</body>

</html>

