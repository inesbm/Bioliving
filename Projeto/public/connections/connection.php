<?php
//	Define	as variáveis
// $hostname = "localhost";
$hostname = "labmm.clients.ua.pt";
$username =	"deca_16L4_03_dbo";
$password =	"oHFyoM";
$dbname = "deca_16L4_03";

//	Estabelece	a ligação	ao	MySQL	e	BD
$link = mysqli_connect($hostname, $username, $password, $dbname) or die("Erro na ligação..." . mysqli_connect_error());
mysqli_set_charset($link, "utf8");