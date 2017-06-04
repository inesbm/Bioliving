<?php
// Ligação à BD 
require_once('../connections/connection.php');
require_once('../pages/admin_area.php');


$query = "DELETE FROM users WHERE id_user=".$id_user;
$stmt = mysqli_prepare($link, $query);
//mysqli_stmt_bind_param($stmt, 'i', $idClubes);

$id_user = (int) $_GET["id_user"];

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

header('Location: ../pages/admin_area.php');