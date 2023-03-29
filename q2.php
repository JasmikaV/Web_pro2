<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 2;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 1000;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$2,500 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">Which of these brands was chiefly associated with the manufacture of household locks?</td>
		</tr>
		<tr>
			<td class="a">A. Phillips</td>
			<td class="b">B. Flymo</td>
		</tr>
		<tr>
			<td class="c">C. Chubb</td> <!--Correct-->
			<td class="d">D. Ronseal</td>
		</tr>
	</table>
	<form action="q3.php" method="post">
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