<?php 

function requireValidSession($requiresAdmin = false) {
    $user = $_SESSION['user'];
    if (!isset($user)) {
        header ("Location: " . BASE_URL . '/login');
        exit();
    } elseif ($requiresAdmin && !$user->is_admin) {
        addErrorMsg("Acesso negado!");
        header ("Location: " . BASE_URL . '/day_records');
        exit();
    }

}