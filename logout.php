<?php
session_start();
unset($_SESSION['sess_username']);
header('Location:index.php');

