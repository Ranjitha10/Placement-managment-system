<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
unset($_SESSION['username']);
unset($_SESSION['password']);
header('Location: home.html');
//header('Location: localhost/pi/home.html');

?>