<?php 
session_start();

$exception = null;
$message = null; 

requireValidSession();

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

loadTemplateView('day_records', [
    'today' => $today,
    'exception' => $exception,
    'message' => $message
]);

?>