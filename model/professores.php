<?php
	require('../config/database.php');
		$query_prof = "SELECT * FROM radcheck";
		$result_prof=mysqli_query($db_link, $query_prof);
?>