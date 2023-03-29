<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 3;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 2500;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$5,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">A well-known lyric in the holiday song "Silver Bells" promises that "soon it will be" what?</td>
		</tr>
		<tr>
			<td class="a">A. July 4th weekend</td>
			<td class="b">B. Halloween night</td>
		</tr>
		<tr>
			<td class="c">C. Christmas Day</td> <!--Correct-->
			<td class="d">D. National Burrito Month</td>
		</tr>
	</table>
	<form action="q4.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="false">--</option>
				<option value="false">A</option>
				<option value="false">B</option>
				<option value="true">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
		
	</form>
</body>


</html>