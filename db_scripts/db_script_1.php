<?php

// Create "language_units" table.

$tableName = "language_units";

$sql = "
CREATE TABLE " . $tableName . " (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	language_name TEXT NOT NULL,
	language_type VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)):
	echo "Created table " . $tableName . "\n\n";
else:
	echo "Error creating table: " . mysqli_error($conn) . "\n\n";
endif;