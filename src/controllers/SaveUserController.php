<?php
session_start();
requireValidSession();

$exception = null;
$userData = []; 
$errors = [];

if (count($_POST) > 0) {
    $userData = $_POST; 
    
    try {
       $newUser = new User($_POST);
       $newUser->insert();
       addSuccessMsg("Usuário cadastrado com sucesso");
       $userData = []; 
    } catch (ValidationException $e) { 
        $exception = $e;
        $errors = $e->getErrors(); 
    } catch (Exception $e) {
        $exception = $e;
    }
}

loadTemplateView('save_user', $userData + [
    "exception" => $exception,
    "errors" => $errors
]);