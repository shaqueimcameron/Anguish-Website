<?php
$servername = "localhost";
$username = "root";
$password = "rJCa!#7@mgq82hNS";
$dbname = "testDB";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$navigation = array(
//array(name, url)
array("products", "http://anguish.com/website/donationpage.php"),
array("Forum", "#"),
array("", "#"),
array("Vote", "#"),
array("HiScores", "#"),
);

$staff_ranks = array(4,7,6);

?>