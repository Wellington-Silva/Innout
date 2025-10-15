<?php
session_start();
requireValidSession();

$exception = null;
$userData = []; 
$errors = [];

if (count($_POST) === 0 && isset($_GET['update'])) {
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->getValues();
    $userData['password'] = null;
} elseif (count($_POST) > 0) {
    $userData = $_POST; 
    
    try {
       $dbUser = new User($_POST);
       if ($dbUser->id) {
            $dbUser->update();
            addSuccessMsg("Usuário atualizado com sucesso");
            header("Location: " . BASE_URL . "/Users");
            exit();
       } else {
            $dbUser->id = null;
            $dbUser->insert();
            addSuccessMsg("Usuário cadastrado com sucesso");
        }
        $userData = []; 
    } catch (ValidationException $e) { 
        $exception = $e;
        $errors = $e->getErrors(); 
    } catch (Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
}

loadTemplateView('save_user', $userData + [
    "exception" => $exception,
    "errors" => $errors
]);