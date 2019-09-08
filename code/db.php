<?php
$mysqli = new mysqli("mariadb", "testuser", "cNHppY7Kf7tuTAec", "testdb");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Let's go!";
}