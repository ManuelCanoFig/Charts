	<?php
		header('Content-Type: application/json');
		include 'config.php';
		//para consulta
		$consulta = ("SELECT * FROM ejemplo");
		$result = $conex -> query($consulta);
		$data = array();
		foreach ($result as $row) {
			$data[] = $row;
		}
		$result -> close();
		$conex -> close();
		print json_encode($data);
	?>
