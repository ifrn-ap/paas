<?phpinclude 'conectabd.php';session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];
$comando = "select * from tabelausuario where email = '" . $email . "' and senha = '".$senha."'";$resultado = mysql_query($comando);$atributo=mysql_fetch_array($resultado);
if(mysql_num_rows($resultado) > 0){	$_SESSION['nome'] = $atributo['nome'];	$_SESSION['email'] = $email;	$_SESSION['senha'] = $senha;	header('Location:gerenciamento.php');
}else{	header('Location:index.php?erro=1');
}
?>
