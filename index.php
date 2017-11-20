<!DOCTYPE html>
<html>
<head>
	<title>Anagamr - anagram game</title>
</head>
<body>
	<?php 
		require("anagram.php");
		$word = Anagram();
		$anagram = str_split($word);
		shuffle($anagram);
	 ?>

</body>
</html>