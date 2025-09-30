<?php 
loadModel('Login');

$exception = null;
$email = '';

if (count($_POST) > 0) {
    $login = new Login($_POST);
    $email = $_POST['email']; // pra manter o campo preenchido

    try {
        $user = $login->checkLogin();

        header('Location: ' . BASE_URL . '/day_records');
    } catch (ValidationException $e) {
        $exception = $e;
    } catch (Exception $e) {
        $exception = $e;
    }
}

loadView('login', [
    'exception' => $exception,
    'email' => $email
]);
