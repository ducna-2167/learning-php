<?php

$h = new Helper();
$msg = '';
$username = '';

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    if ($h->isEmpty(array($username, $_POST['password']))) {
        $msg = "All fields are required.";
    } else {
        $admin = new Admin($username);
        if (!$admin->isValidLogin($_POST['password'])) $msg = "Wrong account or password";
        else {
            $username = $_SESSION['username'];
            $_SESSION['is_admin'] = true;
            header("Location: write.php");
        }
    }
}
