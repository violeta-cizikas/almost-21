<?php 

$player1_1 = rand(1, 11);
$player1_2 = rand(1, 11);
$player2_1 = rand(1, 11);
$player2_2 = rand(1, 11);

?>

<html lang="en">

	<head>		
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>beveik 21</title>

		<style type="text/css">
			
			h1 {
				text-align: center;
				color: #7957fb;
			}

			h2 {
				text-align: center;
				color: #79a7e8;
			}

			.bananaRefresh {
				background-image: url("bananarefresh.png");
				background-size: contain;
				background-repeat: no-repeat;
				width: 10vh;
				height: 10vh;
				position: absolute;
			    top: 3vh;
			    right: 3vh;
			    cursor: pointer;
			}

			.bananaRefreshRotating {
				animation-name: rotationBanana;
			    animation-duration: 0.1s;
			    animation-iteration-count: infinite;
			    animation-timing-function: linear;
			}

			.boxcontainer {
				width: 100%;
				display: flex;
				justify-content: center;
				box-sizing: border-box;
			}

			.box {
				width: 15vh;
				height: 15vh;
				border-radius: 20px;
				border: 1px solid #79d2db;
				text-align: center;
				color: #6ec2d7;
				font-size: 50px;
				margin: 30px;
				line-height: 15vh; /*naudojamas, tik tekstui*/				
			}

			@media screen and (max-width: 800px) {

				html {
					transform: scale(0.3);
					margin-top: -170px;
				}

				.box {
					width: 50vh;
					height: 50vh;
					border-radius: 20px;
					line-height: 50vh; /*naudojamas, tik tekstui*/
				}

				.bananaRefresh {
					width: 50vh;
					height: 50vh;
					right: -50vh;
					top: 40vh;
				}
			}
			
			@media screen and (max-width: 420px) {

				body {
					box-sizing: border-box;
				}

				html {
					transform: scale(0.6);
					margin-top: -120px;
				}	

				.bananaRefresh {
					width: 15vh;
					height: 15vh;
					right: -15vh;
				}
			}

			/*banano animacija*/
			@keyframes rotationBanana {
			  	from {
			    	transform: rotate(0deg);
			  	}

			  	to {
			    	transform: rotate(360deg);
			  	}
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

		<div class="bananaRefreshContainer">
			<div onclick="onclickBananaRefresh()" class="bananaRefresh"></div>
		</div>

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
	<script src="main.js"></script>
</html>

