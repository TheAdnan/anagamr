<?php 

	if(isset($_POST['submit']) && isset($_POST['three'])){
		$result = $_POST['one'] + $_POST['two'] + $_POST['three'] + $_POST['four'] + $_POST['five'] + $_POST['six']; 
		echo "pre"; var_dump($result); die;
	}
?>