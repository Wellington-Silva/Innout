<?php 
session_start();
requireValidSession();
loadModel("WorkingHours");

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

$date = new DateTime(); 
$timeToSave = $date->format('H:i:s'); 

$records->innout($timeToSave);

header("Location: day_records");