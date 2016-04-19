<?php
	
	include("inc/config.php");

	$destinatarios	= "";

	$sqlEmail = "SELECT * FROM emailsformularios WHERE nome = 'Vendas'";
	$resultEmail = consulta_db($sqlEmail);
	$consultaEmail = mysql_fetch_object($resultEmail);

	$destinatarios = $consultaEmail->email;

	$nome		= protecao($_REQUEST["nome"]);
    $email		= protecao($_REQUEST["email"]);
    $telefone	= protecao($_REQUEST["telefone"]);
	$cidade		= protecao($_REQUEST["cidade"]);
    $estado		= protecao($_REQUEST["estado"]);
    $cep		= protecao($_REQUEST["cep"]);
    $mensagem	= protecao($_REQUEST["mensagem"]);

    /*echo $nome."<br />";
    echo $email."<br />";
    echo $telefone."<br />";
	echo $cidade."<br />";
    echo $estado."<br />";
    echo $cep."<br />";
    echo $mensagem."<br />";*/

    function insereContato($nome, $email, $telefone, $cidade, $estado, $cep, $mensagem){
		$sqlInsereContato = "INSERT INTO vendas (nome, email, telefone, cidade, estado, cep, mensagem, data_contato) VALUES ('$nome', '$email', '$telefone', '$cidade', '$estado', '$cep', '$mensagem', NOW());";
		//exit();
		return insert_db($sqlInsereContato);
	}

    /*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/
	include_once("inc/phpmailer/class.smtp.php");
	include_once("inc/phpmailer/class.phpmailer.php");

	$To = $destinatarios;
	$Subject = utf8_decode("Vendas - Joelini");
	$bodyMensagem = "";
	$bodyMensagem .= "<strong>Nome:</strong> ".$nome." <br />";
	$bodyMensagem .= "<strong>E-mail:</strong> $email <br />";
	$bodyMensagem .= "<strong>Telefone:</strong> $telefone <br />";
	$bodyMensagem .= "<strong>Cidade:</strong> $cidade <br />";
	$bodyMensagem .= "<strong>Estado:</strong> $estado <br />";
	$bodyMensagem .= "<strong>CEP:</strong> $cep <br />";
	$bodyMensagem .= "<strong>Mensagem:</strong> ".$mensagem." <br />";
	$Message = $bodyMensagem;

	/*$Host = "mx1.weblink.com.br";
	$Username = "no-reply@joelini.com.br";
	$Password = "AnA4ipixTgR69gped8";
	$Port = "587";*/

	$Host = "smtp.live.com";
	$Username = "damasio.rafael@outlook.com";
	$Password = "Danzinho.131285";
	$Port = "587";

	$mail = new PHPMailer();
	$body = $Message;
	//$mail->IsHtml(); // telling the class to use HTML
	$mail->IsSMTP();
	$mail->Host = $Host; // SMTP server
	$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
	// 1 = errors and messages
	// 2 = messages only
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "tls";	// SSL REQUERIDO pelo GMail
	$mail->Port = $Port; // set the SMTP port for the service server
	$mail->Username = $Username; // account username
	$mail->Password = $Password; // account password

	//$mail->Sender='cristina1@unopar.br';
	$mail->SetFrom("contato@joelini.com.br", "Contato");
	$mail->Subject = $Subject;
	$mail->MsgHTML($body);
	$mail->AddAddress($To, 'Vendas');
	$mail->AddBcc('damasio_damasio@hotmail.com', 'Rafael Damasio'); // Cópia Oculta

	//echo $body;

	if(insereContato($nome, $email, $telefone, $cidade, $estado, $cep, $mensagem)){
		if(!$mail->Send()) {
			echo '<script type="text/javascript">alert("Erro ao enviar e-mail: '.print($mail->ErrorInfo).'"); history.back();</script>';
		} else {
			echo '<script type="text/javascript">alert("Mensagem enviada com sucesso!"); history.back();</script>';
		}
	}

    //$scriptVolta = "<script type='text/javascript'>history.back();</script>";

    //echo $scriptVolta;

?>