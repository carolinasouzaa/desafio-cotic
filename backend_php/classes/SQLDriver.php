<?php
 // aqui são os dados de acesso
    $dbHost = 'localhost';
	
	$dbUser = 'root';
	$dbPass = '';
	
	$dbName = 'desafio';

	$con= new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);

	
	if(isset($_POST['botao']))
	{
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$ator = $_POST['ator'];
		$alinhamento = $_POST['alinhamento'];
		$biografia = $_POST['biografia'];
		
		
		//  se o botão do formulário for submetido, realiza a preparação para a conexão e através query é inserido os dados na tabela personagens.
		
		$stmt = $con->prepare("INSERT INTO personagens (nome, idade, ator, alinhamento, biografia) VALUES (:nome, :idade, :ator, :alinhamento, :biografia)");
		
		$stmt->bindParam(":nome", $nome);
		$stmt->bindParam(":idade", $idade);
		$stmt->bindParam(":ator", $ator);
		$stmt->bindParam(":alinhamento", $alinhamento);
		$stmt->bindParam(":biografia", $biografia);
	
		if (!$stmt->execute()){
			$con->rollBack();
		}
// após o envio do formulário, se der certo, exibe um alerta de "formulário enviado!"

		header('Location: '.'./../../pages/enviado.html');
	}
?>
