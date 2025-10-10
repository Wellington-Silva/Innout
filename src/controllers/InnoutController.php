<?php 
session_start();
requireValidSession();

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

try {
    $date = new DateTime(); 
    $timeToSave = $date->format('H:i:s');
    
    if ($_POST['forcedTime']) {
        $timeToSave = $_POST['forcedTime'];
    }

    $records->innout($timeToSave);
    addSuccessMsg('Ponto inserido com sucesso');
} catch (AppException $e) {
    addErrorMsg($e->getMessage());
}

header("Location: day_records");