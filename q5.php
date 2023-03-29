<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 5;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 10000;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$20,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">In which of these films does Whoopi Goldberg dress up as a nun?</td>
		</tr>
		<tr>
			<td class="a">A. Sister Act</td><!--Correct-->
			<td class="b">B. Ghost</td>
		</tr>
		<tr>
			<td class="c">C. The Color Purple</td> 
			<td class="d">D. How Judas Got His Groove Back</td>
		</tr>
	</table>
	<form action="q6.php" method="post">
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