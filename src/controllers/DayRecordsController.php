<?php 
session_start();

$exception = null;
$message = null; 

requireValidSession();

loadModel('WorkingHours');

$date = new DateTime();
$formatter = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::LONG,
    IntlDateFormatter::NONE,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN,
    "d 'de' MMMM 'de' yyyy"
);
$today = $formatter->format($date);

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', [
    'today' => $today,
    'records' => $records,
    'exception' => $exception,
    'message' => $message
]);

?>