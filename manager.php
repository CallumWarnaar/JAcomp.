<?php
	$mysql = new mysqli("localhost","root","");
	$mysql->query("CREATE DATABASE evanescent");
	$mysql = new mysqli("localhost","root","","evanescent");
	$mysql->query("CREATE TABLE Email (
		number SMALLINT NOT NULL,
		name TINYTEXT NOT NULL,
		email TINYTEXT NOT NULL,
		subject VARCHAR(200) NOT NULL,
		message VARCHAR(800) NOT NULL,
		PRIMARY KEY(number)
	)");
	
	$mysql->query("CREATE TABLE Bag (
		number SMALLINT NOT NULL,
		price DECIMAL(7,2) NOT NULL,
		PRIMARY KEY(number)
	)");
	
	for($i = 0; $i < 2; $i++) {
		$mysql->query("INSERT INTO Bag(number, price)
		VALUES(".($i + 1).", ".(12.00 - ($i * 2)).")");
	}
	$mysql->query("INSERT INTO Bag(number, price)
	VALUES(3, 3.00)");
	
	$mysql->close();
	echo "sSUCCESS!";
?>