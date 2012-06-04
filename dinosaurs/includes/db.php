<?php

//Opens a connection to the MySQL database
//Shared Between all the PHP files in our application


//Our username and password are kept in a Environment Variables
$user=getenv('DB_USER');//The mY SQl username
$pass=getenv('DB_PASS'); //The MYSQL password
$data_source=getenv('DATA_SOURCE');

//PDO:PHP Data Objects
//Allows us to connect to many different kinds of database
$db=new PDO($data_source,$user,$pass);

//Force the connection to communicate in UTF-8
//and support many human languages
$db->exec('SET NAMES utf8');
