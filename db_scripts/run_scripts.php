<?php

require "../db_config.php";

$baseFileName = "db_script_";
$fileNumber = 1;
$completedFiles = array();

// Run each script that exists and then stop.
while (true):
	$targetFileName = $baseFileName . $fileNumber . ".php";
	if (!file_exists($targetFileName)):
		//echo "File: " . $targetFileName . " does not exist.\n";
		break;
	endif;

	include $targetFileName;

	$fileNumber++;
	$completedFiles[] = $targetFileName;
endwhile;

// Output files which were run, for debugging.
echo "\n\n";
echo "Ran files:\n";
print_r($completedFiles);