<?php
function debug_log($str)
{
	echo "<p>" . $str . "</p>";
}

debug_log("post contents: " . print_r($_POST, true));
debug_log("file contents: " . print_r($_FILES, true));
debug_log("# of files: " . count($_FILES));
debug_log("tmp_name: " . $_FILES['myFile2a']['tmp_name']);

$result = move_uploaded_file($_FILES['myFile2a']['tmp_name'], "uploadedOutFile.txt");
debug_log("move file result: " . $result);

echo "<p> currently showing process.php page </p>";
?>