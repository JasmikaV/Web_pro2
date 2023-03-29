<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 7;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 50000;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$100,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">Which of these names is not in the title of a Shakespeare play?</td>
		</tr>
		<tr>
			<td class="a">A. Hamlet</td>
			<td class="b">B. Romeo</td>
		</tr>
		<tr>
			<td class="c">C. Macbeth</td> 
			<td class="d">D. Darren</td><!--Correct-->
		</tr>
	</table>
	<form action="q8.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="false">--</option>
				<option value="false">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="true">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
		
	</form>
</body>


</html>