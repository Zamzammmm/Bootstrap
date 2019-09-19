<?php
session_start();
if (isset($_SESSION['Login'])) {
    unset($_SESSION);
    session_destroy();
    header("Location: loginfor.php");
}               