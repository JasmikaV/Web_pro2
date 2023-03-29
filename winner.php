<?php
	session_start();
	include 'check.php';
	$score = 10;
	$amount = 1000000;
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 1000000;
	$lines = file('user_data.txt');
	$result = '';

	foreach($lines as $line) {
		$data = explode(',', $line);
		if($data[0] == $username) {
			$result .= $username . "," . $password . "," . $score . "," . $amount . "\n";
		} else {
			$result .= $line;
		}
	}

	file_put_contents('user_data.txt', $result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>WINNER</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="header"><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
	<img src="logo.png"><br/>
	<div class="winnerDiv">
		<h2 class="Congratulations">Congratulations, <?php print $_SESSION["username"] ?>! </h2>
		<h2 class="winner">YOU WON $1,000,000!</h2>
		<h2 class="winner">YOU'RE A MILLIONAIRE!</h2>
		<a href="leaderboard.php" class="leaderboard">Go to the Leaderboard</a>
	</div>
		
</body>
</html>