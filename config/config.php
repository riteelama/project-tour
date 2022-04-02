<?php
ob_start(); //Turns on output buffering

session_start();

$timezone = date_default_timezone_set("Asia/Kathmandu");

$con = mysqli_connect("localhost","root","","project_tour");
if(!$con){
    echo("Failed to connect" .mysqli_connect_errno());
}