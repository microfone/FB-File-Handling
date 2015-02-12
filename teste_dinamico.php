<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>		
		<?php
			$url="http://127.0.0.1:8080/WebService1/random";
			echo file_get_contents($url)."<br />";
			echo $tempo_old = time()."<br />";
			sleep(4);
			echo $tempo_new = time()."<br />";
			$dif = $tempo_new - $tempo_new;
			echo $dif;
		?>
	</body>
</html>