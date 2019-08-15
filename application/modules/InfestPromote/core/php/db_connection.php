<?php
function OpenCon()
{
	$dbhost = "localhost";
	$dbuser = "fake";
	$dbpass = "fake";
	$db = "fake";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

	return $conn;
}

function CloseCon($conn)
{
	$conn->close();
}
