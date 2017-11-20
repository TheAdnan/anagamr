<?php 

	require("anagram.php");
	$word = Anagram();
	$anagram = str_split($word);
	//$word = $anagram;
	shuffle($anagram);
	$ag = implode("", $anagram);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Anagamr - anagram game</title>
	<script type="text/javascript" src="components/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="container">
		<?php foreach ($anagram as $letter): ?>
			<div class="letter"><?= $letter ?></div>			
		<?php endforeach ?>
	</div>
	<br>
	<div class="enter">
		<form name="entry">
		<input type="text" name="one" maxlength="1">
		<input type="text" name="two" maxlength="1">
		<input type="text" name="three" maxlength="1">
		<input type="text" name="four" maxlength="1">
		<input type="text" name="five" maxlength="1">
		<input type="text" name="six" maxlength="1">
		<br>
		<br>
		<input id="entry" type="submit" name="submit" value="Check">
	</form>
	</div>
</body>
</html>