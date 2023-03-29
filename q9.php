<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 10;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 250000;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$500,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">Who is the President of America?</td>
		</tr>
		<tr>
			<td class="a">A. Joe Biden</td> <!--Correct-->
			<td class="b">B. Donald Trump</td>
		</tr>
		<tr>
			<td class="c">C. Barack Obama</td>
			<td class="d">D. George Washington</td>
		</tr>
	</table>
	<form action="q10.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="false">--</option>
				<option value="true">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
		
	</form>
</body>


</html>