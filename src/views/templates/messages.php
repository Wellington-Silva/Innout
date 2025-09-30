<?php
$errors = [];

if ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if (get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

$alertType = '';

if ($message && is_array($message)) {
    if ($message['type'] === 'error') {
        $alertType = 'danger';
    } else {
        $alertType = 'success';
    }
}
?>

<?php if ($message && is_array($message)): ?>
    <div
        role="alert" 
        class="my-3 alert alert-<?= $alertType ?>">
        <?= $message['message'] ?>
    </div>
<?php endif; ?>