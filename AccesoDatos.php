<?php
$BaseDeDatos= new PDO('mysql:host=localhost;dbname=parkingdb;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	