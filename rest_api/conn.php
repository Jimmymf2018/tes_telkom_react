<?php
define('HOST','localhost');
define('USER','root');
define('DB','telkom_tes');
define('PASS','');
$conn = new mysqli(HOST,USER,PASS,DB) or die('Connetion error to the database');