<!---->
<!--// Ligação à BD -->
<!--require_once('../connections/connection.php');-->
<!---->
<!--$query = "DELETE FROM Clubes WHERE idClubes=?";-->
<!--$stmt = mysqli_prepare($link, $query);-->
<!--mysqli_stmt_bind_param($stmt, 'i', $idClubes);-->
<!---->
<!--$idClubes = $_GET["id"]; // Falta validação!-->
<!---->
<!--mysqli_stmt_execute($stmt);-->
<!---->
<!--mysqli_stmt_close($stmt);-->
<!---->
<!--header('Location: index.php');-->