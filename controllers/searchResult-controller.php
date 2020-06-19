<?php
		require_once ('../models/connect_db.php');


		$from = $_POST['from'];
		$to = $_POST['to'];

		$sql2= "SELECT * from vols WHERE departure='$from' AND arrival='$to'";
		/* Crée une requête préparée */
		$prep_request =$con->prepare($sql2);
		/* Exécution de la requête */
		$prep_request->execute();
		$result=$prep_request->get_result();

	?>