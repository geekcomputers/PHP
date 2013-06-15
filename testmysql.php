<?php 

# Script Name		: testmysql.php
# Author				: Craig Richards
# Created				: 10th May 2012
# Last Modified		: 
# Version				: 1.0

# Modifications		: 

# Description			: This script will carry out a basic connection test to a MySQL database

$link = mysql_connect('hostname','dbuser','dbpassword'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 
?> 