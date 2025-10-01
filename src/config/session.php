<?php 

function requireValidSession() {
    $user = $_SESSION['user'];
    if (!isset($user)) {
        header ("Location: " . BASE_URL . '/login');
        exit();
    }

}