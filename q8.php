<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 9;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 100000;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$250,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">What coding laguage is mostly used for Data analytics problems?</td>
		</tr>
		<tr>
			<td class="a">A. Angular</td>
			<td class="b">B. Java</td>
		</tr>
		<tr>
			<td class="c">C. Python</td> <!--Correct-->
			<td class="d">D. React</td>
		</tr>
	</table>
	<form action="q9.php" method="post">
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