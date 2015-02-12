<?php

if(isset($_POST['name'])){
	$name = $_POST['name'];
	if(!empty($name)){
		$handle = fopen("names.txt",'a');
		fwrite($handle,$name."\n");
		fclose($handle);
		
		$readin = file("names.txt");
		foreach($readin as $fname){
			echo $fname.',';
		}
		
	}else{
		echo 'Insira um nome.';
	}
}

?>

<form action="file2.php" method="POST">
	Name: <br>
	<input type="text" name="name"><br>
	<input type="submit" value="Submit">
</form>