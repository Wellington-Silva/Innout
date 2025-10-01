<?php 
session_start();

$exception = null;
$message = null; 

requireValidSession();

loadTemplateView('day_records', [
    'exception' => $exception,
    'message' => $message
]);

?>