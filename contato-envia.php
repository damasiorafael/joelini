<?php
	
	include("inc/config.php");

	$destinatarios	= "";

	$sqlEmail = "SELECT * FROM emailsformularios WHERE nome = 'Contato'";
	$resultEmail = consulta_db($sqlEmail);
	$consultaEmail = mysql_fetch_object($resultEmail);

	$destinatarios = $consultaEmail->email;

	$nome			= protecao($_REQUEST["nome"]);
    $email			= protecao($_REQUEST["email"]);
    $cidade			= protecao($_REQUEST["cidade"]);
    $estado			= protecao($_REQUEST["estado"]);
    $telefone		= protecao($_REQUEST["telefone"]);
    $departamento	= protecao($_REQUEST["departamento"]);
    $mensagem		= protecao($_REQUEST["mensagem"]);
    $arquivo		= $_FILES["arquivo"];

    /*echo $nome."<br />";
    echo $email."<br />";
    echo $telefone."<br />";
	echo $cidade."<br />";
    echo $estado."<br />";
    echo $cep."<br />";
    echo $mensagem."<br />";*/

    function pegaNome($arquivo){
        
        $nome_arquivo    = $arquivo['name'];
            
        /* pega a extensão do arquivo */
        $ext = strtolower(strrchr($nome_arquivo,"."));

        $nome_atual = md5($nome_arquivo).$ext;

        return $nome_atual;
    }

    function upload($arquivo){

        $pasta = "contato/";
        
        //FAZ O UPLOAD DAS IMAGENS ENQUANTO EXISTIREM
        $nome_arquivo    = $arquivo['name'];
        $tamanho_arquivo = $arquivo['size'];
            
        /* pega a extensão do arquivo */
        $ext = strtolower(strrchr($nome_arquivo,"."));

        /* converte o tamanho para KB */
        $tamanho = round($tamanho_arquivo / 1024);
           
        //testa o tamanho em pixels da imagem
        if($tamanho < 1024){ //se imagem for até 500KB envia
            $nome_atual = md5($nome_arquivo).$ext; //nome que dará a imagem
            $tmp = $arquivo['tmp_name']; //caminho temporário da imagem

            if(move_uploaded_file($tmp,$pasta.$nome_atual)){
                //ACAO PARA SALVAR NO BANCO
                return $nome_atual;
            } else {
                //Falha no UPLOAD;
                echo "<script type='text/javascript'>alert('Ocorreu um erro ao enviar a mensagem! Tente novamente'); history.back();</script>";
                exit();
            }
        } else {
        	//Falha no UPLOAD;
            echo "<script type='text/javascript'>alert('O arquivo deve ter no máximo 1MB!'); history.back();</script>";
            exit();
        }
    }

    function insereContato($nome, $email, $cidade, $estado, $telefone, $departamento, $mensagem, $arquivo){
		$sqlInsereContato = "INSERT INTO contato (nome, email, cidade, estado, telefone, departamento, mensagem, arquivo, data_contato) VALUES ('$nome', '$email', '$cidade', '$estado', '$telefone', '$departamento', '$mensagem', '$arquivo', NOW());";
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
	$bodyMensagem .= "<strong>Cidade:</strong> $cidade <br />";
	$bodyMensagem .= "<strong>Estado:</strong> $estado <br />";
	$bodyMensagem .= "<strong>Telefone:</strong> $telefone <br />";
	$bodyMensagem .= "<strong>departamento:</strong> $departamento <br />";
	$bodyMensagem .= "<strong>Mensagem:</strong> ".$mensagem." <br />";
	$bodyMensagem .= "<strong>Arquivo:</strong> <a href='http://www.joelini.com.br/v1/contato/".pegaNome($arquivo)."'>".pegaNome($arquivo)."</a> <br />";

	$Message = $bodyMensagem;

	$Host = "mx1.weblink.com.br";
	$Username = "no-reply@joelini.com.br";
	$Password = "AnA4ipixTgR69gped8";
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
	$mail->SetFrom("no-reply@joelini.com.br", $destinatario);
	$mail->Subject = $Subject;
	$mail->MsgHTML($body);
	$mail->AddAddress($To, 'Contato');
	$mail->AddBcc('damasio_damasio@hotmail.com', 'Rafael Damasio'); // Cópia Oculta

	//echo $body;

	if(insereContato($nome, $email, $cidade, $estado, $telefone, $departamento, $mensagem, upload($arquivo))){
		if(!$mail->Send()) {
			echo '<script type="text/javascript">alert("Erro ao enviar e-mail: '.print($mail->ErrorInfo).'"); history.back();</script>';
		} else {
			echo '<script type="text/javascript">alert("Mensagem enviada com sucesso!"); history.back();</script>';
		}
	}

    //$scriptVolta = "<script type='text/javascript'>history.back();</script>";

    //echo $scriptVolta;

?>