<?php

class CCQFinderHelper
{
	// Returns the database connection.
	public static function connectToDB($dbConfig) {
		$conn = mysqli_connect(
			$dbConfig['host'],
			$dbConfig['user'],
			$dbConfig['pass'],
			$dbConfig['db']
		);

		if ($conn->connect_error):
			die("Connection failed: " . $conn->connect_error);
		endif;

		return $conn;
	}
}