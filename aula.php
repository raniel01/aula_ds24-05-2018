<!DOCTYPE html>
<html>
<head>
	<title>aula</title>
	<meta charset="utf-8">
</head>
<body>
<form action="aula.php" method="post">
Seu nome: <input type="text" name="nome"><br>
Seu email: <input type="email" name="email"><br>
Assunto: 
<select name="assunto">
	<option value="Dúvida">Dúvida</option>
	<option value="Reclamação">Reclamação</option>
	<option value="Elogi"> Elogio</option>
	
</select><br>
Mensagem:<br>
<textarea name="msg"></textarea><br>
<input type="submit" value="Enviar">
</form> 

<?php 
 if (isset($_POST['email'])) {
 	$para = "ranielsnts@hotmail.com";
	$nome = $_POST['nome'];
 	$de = $_POST['email'];
 	$assunto= $_POST['assunto'];
 	$msg = $nome."enviou: <br>".$_POST['msg'];

 	if (mail($para, $assunto, $msg, "From: ".$de)) {
 		echo "Aguarde que em breve retornaremos!";
 	}else{
 		echo "E-mail não enviado. Tente novamente.";
 	}
 }
 ?>
</body>
</html>

