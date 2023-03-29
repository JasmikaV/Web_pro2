<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 4;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 5000;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$10,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">Due to the geographical areas they represented, the opposing sides of the US Civil War were known by what names?</td>
		</tr>
		<tr>
			<td class="a">A. The Hills and the Valleys</td>
			<td class="b">B. The Cities and the Farms</td>
		</tr>
		<tr>
			<td class="c">C. The North and the South</td> <!--Correct-->
			<td class="d">D. The Kool and the Gang</td>
		</tr>
	</table>
	<form action="q5.php" method="post">
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