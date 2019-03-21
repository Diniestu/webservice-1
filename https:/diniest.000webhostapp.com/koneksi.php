  //koneksi
<?php
	$server = "localhost";
	$user = "id8972261_id8972197_akademik";
	$pass = "111111";
	$db = "id8972261_id8972197_akademik";

	$koneksi =mysqli_connect($server, $user, $pass, $db);

		if (!$koneksi)
		{
		die('Could not connect: ' . mysql_error());
		}
	?>
