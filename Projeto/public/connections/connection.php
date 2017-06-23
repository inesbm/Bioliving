<?php
//	Define	as variáveis


//$hostname = "localhost";
$hostname = "labmm.clients.ua.pt";

//$username =	"deca_16L4_03_dbo";
//$username =	"deca_16L4_04_dbo";
$username =	"deca_16L4_09_dbo";

//$password =	"oHFyoM";
//$password =	"ikSg3I";
$password =	"RCh5qO";

//$dbname = "deca_16L4_03";
//$dbname = "deca_16l4_04";
$dbname = "deca_16l4_09";

//	Estabelece	a ligação	ao	MySQL	e	BD
$link = mysqli_connect($hostname, $username, $password, $dbname) or die("Erro na ligação..." . mysqli_connect_error());
mysqli_set_charset($link, "utf8");