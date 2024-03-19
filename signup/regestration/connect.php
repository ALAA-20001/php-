<!-- to connect php -->

<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'signup';


$con=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con){
    die(mysqli_connect_error($con));
}