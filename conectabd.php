<?php

	//mysql_connect("host", "user", "senha")
	$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
	//mysql_select_db("nomeBD")
	mysql_select_db("pass", $conecta) or print(mysql_error());

?>