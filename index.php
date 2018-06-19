<!DOCTYPE html>
<html>
<head>
	<title>Curriculo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
    <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
</head>
<body>
	<h1 style="text-align: center">Curriculo online</h1>
 <div class="container-fluid">
 <form action="index.php" method="post" enctype="multipart/form-data">
 	<div class="row">
   	  <div class="col-md-10 col-md-offset-1">
        <h3>DADOS PESSOAIS</h3>
        <label for="nome">NOME: </label>
        <input type="text" size="40" placeholder="Digite seu nome" required name="nome"><br>
        Anexar Foto: <input type="file" name="arquivo">
		<br>
		<b> ESTADO CIVIL:</b>
       <select name="est" required>
       <option value="Solteiro"> Solteiro</option>
       <option value="Casado"> Casado</option>
       <option value="Divorciado"> Divorciado</option>
       <option value="União Estavel"> União Estavel</option></select><br>
        <label for="sexo"> SEXO:</label>
        Masc.<input type="radio" name="sexo" value="Masculino">        
        Femi.<input type="radio" name="sexo" value="Feminino">
        <br> 
        <label for="datan"> DATA DE NASCIMENTO:</label>
        <input type="date" name="datan" required><br>
        <label for="email">E-MAIL: </label>
        <input type="mail" name="email"  size="40" required><br>
        <label for="tel_fix"> TELEFONE FIXO </label>
        <input type="tel" name="tel_fix" maxlength="12" OnKeyPress="formatar('##-####-####', this)" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="cel">CELULAR:</label>
			<input type="tel" name="cel" maxlength="14" OnKeyPress="formatar('(##)#####-####', this)" ><br>
            <label for="log"> LOGRADOURO:</label>
			<select name="log">
				<option value="Rua">Rua</option>
				<option value="Avenida">Avenida</option>
				<option value="Viela">Viela</option>			
			</select>
      <label for="rua"></label>
			<input type="text" name="rua" size="60" placeholder="NOME DA RUA" required>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<label for="n"> Nº:</label>
			<input type="number" name="n" size="4" required><br>
			<label for="bai"> BAIRRO:</label>
			<input type="text" name="bai" size="40" placeholder="NOME DO BAIRRO" required>&nbsp;&nbsp;&nbsp;&nbsp; <label for="cid"> CIDADE: </label>
		<input type="text" name="cid"  placeholder="DIGITE SUA CIDADE" required><br>
            <label for="estado"> ESTADO: </label>
	<select name="estado" required="Por favor escolha seu Estado"> 
		<option value="estado">Selecione o Estado</option> 
		<option value="AC">Acre</option> 
		<option value="AL">Alagoas</option> 
		<option value="AM">Amazonas</option> 
		<option value="AP">Amapá</option> 
		<option value="BA">Bahia</option> 
		<option value="CE">Ceará</option> 
		<option value="DF">Distrito Federal</option> 
		<option value="ES">Espírito Santo</option> 
		<option value="GO">Goiás</option> 
		<option value="MA">Maranhão</option> 
		<option value="MT">Mato Grosso</option> 
		<option value="MS">Mato Grosso do Sul</option> 
		<option value="MG">Minas Gerais</option> 
		<option value="PA">Pará</option> 
		<option value="PB">Paraíba</option> 
		<option value="PR">Paraná</option> 
		<option value="PE">Pernambuco</option> 
		<option value="PI">Piauí</option> 
		<option value="RJ">Rio de Janeiro</option> 
		<option value="RN">Rio Grande do Norte</option> 
		<option value="RO">Rondônia</option> 
		<option value="RS">Rio Grande do Sul</option> 
		<option value="RR">Roraima</option> 
		<option value="SC">Santa Catarina</option> 
		<option value="SE">Sergipe</option> 
		<option value="SP">São Paulo</option> 
		<option value="TO">Tocantins</option>
	</select>
        </div></div>
     <div class="row">
    	<div class="col-md-10 col-md-offset-1">
        <h3> CONHECIMENTOS E HABILIDADES</h3>
        <br>
        <h5> IDIOMAS:</h5>
        <label for="ing"> Inglês: </label>
        Nenhum Conhecimento:<input type="radio" name="ing" value="Nenhum Conhecimento">&nbsp;&nbsp;&nbsp;&nbsp;
        Básico: 
        <input type="radio" name="ing" value="Básico"> &nbsp;&nbsp;&nbsp;&nbsp;  
        Intemdiário:<input type="radio" name="ing" value="Intemdiário">&nbsp;&nbsp;&nbsp;&nbsp;
        Avançado:<input type="radio" name="ing" value="Avançado"><br>
        <label for="esp"> Espanhol: </label>
        Nenhum Conhecimento:<input type="radio" name="esp" value="Nenhum Conhecimento">&nbsp;&nbsp;&nbsp;&nbsp;
        Básico:<input type="radio" name="esp" value="Básico"> &nbsp;&nbsp;&nbsp;&nbsp;  
        Intemdiário:<input type="radio" name="esp" value="Intemdiário">&nbsp;&nbsp;&nbsp;&nbsp;
        Avançado:<input type="radio" name="esp" value="Avançado"><br>
        <label for="mand"> Mandarim: </label>
        Nenhum Conhecimento:<input type="radio" name="mand" value="Nenhum Conhecimento">&nbsp;&nbsp;&nbsp;&nbsp;
        Básico:<input type="radio" name="mand" value="Básico"> &nbsp;&nbsp;&nbsp;&nbsp;  
        Intemdiário:<input type="radio" name="mand" value="Intemdiário">&nbsp;&nbsp;&nbsp;&nbsp;
        Avançado:<input type="radio" name="mand" value="Avançado"><br>
        <h5><label for="cnh"> HABILITAÇÃO:</label></h5>
        A:<input type="radio" name="cnh" value="A"><br>
        B:<input type="radio" name="cnh" value="B"><br>
        A/B:<input type="radio" name="cnh" value="A/B"><br><br>
<label for="ensino"><h5>GRAU DE ENSINO</h5></label><br>
 Fundamental: <input type="radio" name="ensino" value="Fundamental"><br>
 Médio: <input type="radio" name="ensino" value="Médio"><br>
 Técnico:<input type="radio" name="ensino" value="Técnico"><br>
 Superior:<input type="radio" name="ensino" value="Superior"><br><br>
  </div></div>
         <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h3> CONHECIMENTOS PROFISSIONAIS E TECNOLOGIAS</h3>
<input type="checkbox" name="HTML" value="HTML"> <label for="HTML"> HTML</label><br>
<input type="checkbox" name="CSS" value="CSS"> <label for="CSS"> CSS</label><br>
<input type="checkbox" name="JAVASCRIPT" value="JAVASCRIPT"> <label for="JAVASCRIPT"> JAVASCRIPT</label><br>
<input type="checkbox" name="PHP" value="PHP"> <label for="PHP"> PHP</label><br>
<input type="checkbox" name="CORELDRAW" value="CORELDRAW"> <label for="CORELDRAW"> CORELDRAW</label><br>
<input type="checkbox" name="PHOTOSHOP" value="PHOTOSHOP"> <label for="PHOTOSHOP"> PHOTOSHOP</label><br>
<input type="checkbox" name="FLASH" value="FLASH"> <label for="FLASH"> FLASH</label><br>
<input type="checkbox" name="FIREWORKS" value="FIREWORKS"> <label for="FIREWORKS"> FIREWORKS</label><br>
<input type="checkbox" name="JQUERY" value="JQUERY"> <label for="JQUERY"> JQUERY</label><br>
<input type="checkbox" name="MySQL" value="MySQL"> <label for="MySQL"> MySQL</label><br>
<input type="checkbox" name="UML" value="UML"> <label for="UML"> UML</label><br>
<input type="checkbox" name="CANVAS" value="CANVAS"> <label for="CANVAS"> CANVAS</label><br>
<input type="checkbox" name="DELPHI" value="DELPHI"> <label for="DELPHI"> DELPHI</label><br>
<input type="checkbox" name="JAVA" value="JAVA"> <label for="JAVA"> JAVA</label><br>
<input type="checkbox" name="COBOL" value="COBOL"> <label for="COBOL"> COBOL</label><br>
<input type="checkbox" name="WORD" value="WORD"> <label for="WORD"> WORD</label><br>
<input type="checkbox" name="EXCEL" value="EXCEL"> <label for="EXCEL"> EXCEL</label><br>
<input type="checkbox" name="POWERPOINT" value="POWERPOINT"> <label for="POWERPOINT"> POWERPOINT</label><br>
<input type="checkbox" name="MICROSOFT FORMS" value="MICROSOFT FORMS"> <label for="MICROSOFT FORMS"> MICROSOFT FORMS</label><br>
    	</div></div>
        <div class="row">
    	<div class="col-md-10 col-md-offset-1">
        <h3>ULTIMAS EXPERIÊNCIAS</h3>
        <p style=" border: 3px solid blue; margin: 2px; padding: 5px;"> <b><i>1º Experiência</i></b> <br>
           <label for="empresa"> EMPRESA:</label><input type="text" name="empresa"><br>
           <label for="dataina"> DATA DE INÍCIO:</label><input type="date" name="dataina"> <label for="datatea"> E TÉRMINO:</label><input type="date" name="datatea"><br>
        <label for="cargo"> CARGO/FUNÇÃO:</label><input type="text" name="cargo"><br>
        <label for="rotina"> DESCRIÇÃO DA ROTINA:</label> <br><textarea rows="5" cols="20" maxlength="500" name="rotina" placeholder="Resuma sua rotina na empresa"></textarea></p>
         <p style=" border: 3px solid blue; margin: 2px; padding: 5px;"> <b><i>2º Experiência</i></b><br>
          <label for="empresab"> EMPRESA:</label><input type="text" name="empresab"><br>
          <label for="datainb"> DATA DE INÍCIO:</label><input type="date" name="datainb"> <label for="datateb"> E TÉRMINO:</label><input type="date" name="datateb"><br>
        <label for="cargob"> CARGO/FUNÇÃO:</label><input type="text" name="cargob"><br>
        <label for="rotinab"> DESCRIÇÃO DA ROTINA:</label> <br><textarea rows="5" cols="20" maxlength="500" name="rotinab" placeholder="Resuma sua rotina na empresa"></textarea></p>
        <p style=" text-align: center;"><input type="submit" name="Enviar"></p></div>
    </form></div>
 </div>
<?php 

if ($_POST) {
	$nome=$_POST['nome'];
	$estado_civ=$_POST['est'];
	$sexo=$_POST['sexo'];
	$datanasc=$_POST['datan'];
	$email=$_POST['email'];
	$tel=$_POST['tel_fix'];
	$cel=$_POST['cel'];
	$log=$_POST['log'];
	$log2=$_POST['rua'];
	$n=$_POST['n'];
	$bairro=$_POST['bai'];
	$cidade=$_POST['cid'];
	$estado=$_POST['estado'];
	$ingles=$_POST['ing'];
	$espanhol=$_POST['esp'];
	$mandarim=$_POST['mand'];
	$cnh=$_POST['cnh'];
	$ensino=$_POST['ensino'];
	$empresa=$_POST['empresa'];
	$dataina=$_POST['dataina'];
	$datatea=$_POST['datatea'];
	$empresab=$_POST['empresab'];
	$cargo=$_POST['cargo'];
	$rotina=$_POST['rotina'];
	$datainb=$_POST['datainb'];
	$datateb=$_POST['datateb'];
	$cargob=$_POST['cargob'];
	$rotinab=$_POST['rotinab'];
	
	$destino="img/".$_FILES['arquivo']['name'];
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino)){
			$foto='<img src="'.$destino.'" id="perfil"><br>';
			
			}

	$datanasc = date( 'd/m/Y', strtotime($datanasc));
	$dataina = date( 'd/m/Y', strtotime($dataina));
	$datainb = date( 'd/m/Y', strtotime($datainb));
	$datatea = date( 'd/m/Y', strtotime($datatea));
	$datateb = date( 'd/m/Y', strtotime($datateb));

 	$arquivo = fopen($nome.".html", "a");
	$texto ='<!DOCTYPE html>
<html>
<head>
	<title>Curriculo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 col-md-offset-1">';
	$texto.= "<h1>$nome</h1> <br><br><br><br><h3>DADOS PESSOAIS</h3> 
	<p>$foto	<b>Data de Nascimento:</b> $datanasc, <b>Estado Civil:</b> $estado_civ, <b>Sexo:</b> $sexo<br>
	<b>Endereço:</b> $log $log2, nº $n <br> <b>Bairro:</b> $bairro, <b>Cidade:</b> $cidade/$estado<br>
	<b>Telefone:</b> $tel<br>
	<b>Celular:</b> $cel<br></p>
	<br><h3>CONHECIMENTOS E HABILIDADES</h3> 
	Inglês: $ingles <br>
	Espanhol: $espanhol <br>
	Mandarim: $mandarim<br>
	CNH: $cnh<br>
	GRAU DE ENSINO: $ensino <br><br>
	<br><br><br><br><h3>CONHECIMENTOS PROFISSIONAIS E TECNOLOGIAS</h3> 
		";
		if (isset($_POST['HTML'])) {
		$texto.="HTML<br>";
	}
	if (isset($_POST['CSS'])) {
		$texto.="CSS<br>";
	}
		if (isset($_POST['JAVASCRIPT'])) {
		$texto.="JAVASCRIPT<br>";
	}
	if (isset($_POST['PHP'])) {
		$texto.="PHP<br>";
	}
	if (isset($_POST['CORELDRAW'])) {
		$texto.="CORELDRAW<br>";
	}
	if (isset($_POST['PHOTOSHOP'])) {
		$texto.="PHOTOSHOP<br>";
	}
	if (isset($_POST['FLASH'])) {
		$texto.="FLASH<br>";
	}
	if (isset($_POST['FIREWORKS'])) {
		$texto.="FIREWORKS<br>";
	}
	if (isset($_POST['JQUERY'])) {
		$texto.="JQUERY<br>";
	}
	if (isset($_POST['MySQL'])) {
		$texto.="MySQL<br>";
	}
	if (isset($_POST['UML'])) {
		$texto.="UML<br>";
	}
	if (isset($_POST['CANVAS'])) {
		$texto.="CANVAS<br>";
	}
	if (isset($_POST['DELPHI'])) {
		$texto.="DELPHI<br>";
	}
	if (isset($_POST['JAVA'])) {
		$texto.="JAVA<br>";
	}
	if (isset($_POST['COBOL'])) {
		$texto.="COBOL<br>";
	}
	if (isset($_POST['WORD'])) {
		$texto.="WORD<br>";
	}
	if (isset($_POST['EXCEL'])) {
		$texto.="EXCEL<br>";
	}
	if (isset($_POST['POWERPOINT'])) {
		$texto.="POWERPOINT<br>";
	}
	if (isset($_POST['MICROSOFT FORMS'])) {
		$texto.="MICROSOFT FORMS<br>";
	}
	$texto.="<br><br><br><br><h3>ÚLTIMAS EXPERIÊNCIAS</h3>
	<b>Empresa:</b> $empresa de $dataina á $datatea<br>
	<b>Cargo/Funçao:</b> $cargo <br>
	<b>Rotina:</b> $rotina <br>
	<br>
	<b>Empresa:</b> $empresa de $datainb á $datateb<br>
	<b>Cargo/Funçao:</b> $cargob <br>
	<b>Rotina:</b> $rotinab <br>
	</div>
	</div>
	</div>
	</body>
</html>";
	fwrite($arquivo, $texto);

echo '<a href="'.$nome.'.html"> <center><img src="img/botao.png" width="250px" height="150px" ></center></a>';
}
?>

</body>
</html>
