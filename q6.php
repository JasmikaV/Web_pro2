<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 6;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 20000;
?>
<html>
<head>
	<title>Question</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$50,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">In the United States, what is traditionally the proper way to address a judge?</td></td>
		</tr>
		<tr>
			<td class="a">A. Your holiness</td>
			<td class="b">B. Your honor</td><!--Correct-->
		</tr>
		<tr>
			<td class="c">C. Your eminence</td> 
			<td class="d">D. You da man!</td></td>
		</tr>
	</table>
	<form action="q7.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="false">--</option>
				<option value="false">A</option>
				<option value="true">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
		
	</form>
</body>


</html>