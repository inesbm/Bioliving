<?php
session_start();

//Destruir a sessão
unset($_SESSION['user']);
header('Location: info_bioliving.php');