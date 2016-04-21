<?php 

require 'joeliniadmin/util/connect.php';
require 'joeliniadmin/util/appvars.php';
require 'joeliniadmin/funcoes.php';

?>

<?php $title = 'Fale Conosco - Joelini Ferragens para Móveis'; ?>
<?php require 'header.php'; ?>

<body>

	<?php $menuFaleconosco = 'active' ?>
	<?php require 'cabecalho.php'; ?>
    
    
    <section id="all">
    
 
  <div class="back_conteudo">
  
  	<section id="conteudo">
 
    
    
    
    	<section id="fale_conosco">
        	
            
        	<h1>Fale Conosco</h1>
            
            <a href="#" title="">Regras para Assistência Técnica</a>
            
            
            <div class="end_e_mapa">
    
        
    	<span>Joelini - Componentes para Móveis</span>
        <p>Rua Arapaçu-Listrado, 260 - Parque Industrial</p>
        <p>CEP: 86703-295</p>
        <p>Arapongas - PR - Brasil</p>
        <p>Fone: (43) 3172-4359</p>
        <p>E-mail: joelini@joelini.com.br</p>
        
        
        <iframe style="margin-top:-50px;" width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Arapac%C3%BA+Listrado,260,+Arapongas+-+Paran%C3%A1,+Rep%C3%BAblica+Federativa+do+Brasil&amp;aq=t&amp;sll=-23.391796,-51.430467&amp;sspn=0.005751,0.010568&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Arapac%C3%BA+Listrado,+260,+Arapongas+-+Paran%C3%A1,+86703-295,+Rep%C3%BAblica+Federativa+do+Brasil&amp;t=m&amp;ll=-23.391934,-51.42962&amp;spn=0.007878,0.012918&amp;z=15&amp;iwloc=A&amp;output=embed&amp;amp;wmode=transparent"></iframe>
    
    
    
    
    
    
    
    
    
    
    
    
    
		<!--<table style="float: left;" width="500" border="0" style="height: 425px; font-family: 'Myriad Pro', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif; color: #666;">
  <tbody><tr>
    <td height="190" colspan="2" align="left">
    <p><font style="font-weight:bold;">Joelini - Componentes para Móveis</font><br>
    Rua Arapaçu-Listrado, 260 - Parque Industrial<br>
    CEP:86703-295<br>
    Arapongas - PR - Brasil<br>
    Fone: (43)3172-4359<br>
    E-mail:joelini@joelini.com.br
    <br>
    </p></td>
  </tr>
  <tr><td><iframe style="margin-top:-50px;" width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Arapac%C3%BA+Listrado,260,+Arapongas+-+Paran%C3%A1,+Rep%C3%BAblica+Federativa+do+Brasil&amp;aq=t&amp;sll=-23.391796,-51.430467&amp;sspn=0.005751,0.010568&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Arapac%C3%BA+Listrado,+260,+Arapongas+-+Paran%C3%A1,+86703-295,+Rep%C3%BAblica+Federativa+do+Brasil&amp;t=m&amp;ll=-23.391934,-51.42962&amp;spn=0.007878,0.012918&amp;z=15&amp;iwloc=A&amp;output=embed&amp;amp;wmode=transparent"></iframe><br></td></tr>
</tbody></table>-->

</div><!--fale_conosco-->
            
            
            
            
            
            
            <div class="form_contato">
    
    <?php 
		if(isset($_POST['submit'])) {
		
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$telefone = $_POST['telefone'];
			$departamento = $_POST['departamento'];
			$mensagem = $_POST['mensagem'];
			$anexo = $_FILES['anexo']['name'];
			$anexo = str_replace(" ", "", $anexo);
			$anexo = str_replace("(", "", $anexo);
			$anexo = str_replace(")", "", $anexo);
			$anexo = str_replace("-", "", $anexo);
			$anexo = str_replace("ê", "", $anexo);
			$anexo_type = $_FILES['anexo']['type'];
			$anexo_size = $_FILES['anexo']['size'];
			
			switch($departamento) {
			
				case "rh";
					$para = 'rh@joelini.com.br';
				break;
				
				case "financeiro";
					$para = 'financeiro@joelini.com.br';
					break;
					
				case "compras";
					$para = 'compras@joelini.com.br';
				break;
				case "vendas";
					$para = 'vendas@joelini.com.br';
				break;
				case "assistencia";
					$para = 'vendas@joelini.com.br';
				break;
				case "marketing";
					$para = 'marketing@joelini.com.br';
				break;
			
				}
	
			
			define('JOELINI_UPLOADPATH_ANEXO', 'uehuifheuwhfifpeufhaewufhuaefeuhfe645386573-5692iyfghysfgsiy/');
			define('JOELINI_MAXFILESIZE_ANEXO', 2000000);
		
		
		

if(!empty($anexo)) {

	if(!empty($nome) && !empty($email) && !empty($cidade) && !empty($estado) && !empty($telefone) && !empty($departamento) && !empty($anexo)) {
		
		if(($anexo_size > 0) && ($anexo_size <= JOELINI_MAXFILESIZE_ANEXO)) {
	
	$target = JOELINI_UPLOADPATH_ANEXO . $anexo;
	if(move_uploaded_file($_FILES['anexo']['tmp_name'], $target)) {
		
		
		
	$from = 'Agência HRS';
	$to = $para;
	$subject = 'Contato Agência HRS';
	$msg = "Formulário de Contato do Site: $from \n" .
	        "Nome: $nome \n" .
	        "Email: $email \n" .
			"Cidade: $cidade \n" .
			"Estado: $estado \n" .
			"Fone: $telefone \n" .
			"Departamento: $departamento \n" .
			"Link do arquivo: http://hrsweb.com.br/joelini_novo/uehuifheuwhfifpeufhaewufhuaefeuhfe645386573-5692iyfghysfgsiy/".$anexo." \n" . 
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
			echo '<p class="sucesso">Mensagem enviada com sucesso!</p>';
		
		
			$nome = '';
			$email = '';
			$cidade = '';
			$estado = '';
			$telefone = '';
			$departamento = '';
			$mensagem = '';
		
	}//if move
	
		}// anexo size
		else {
			echo '<p class="error">O arquivo deve ser menor que 2MB</p>';
		}
		
		
	}//campos vazio
	else {
		echo '<p class="error">Por favor, preencha todos os campos!</p>';
	}

}// (!empty($anexo




else {
	if(!empty($nome) && !empty($email) && !empty($cidade) && !empty($estado) && !empty($telefone) && !empty($departamento) && !empty($mensagem)) {
		
		
		
	$from = 'Agência HRS';
	$to = $para;
	$subject = 'Contato Agência HRS';
	$msg = "Formulário de Contato do Site: $from \n" .
	        "Nome: $nome \n" .
	        "Email: $email \n" .
			"Cidade: $cidade \n" .
			"Estado: $estado \n" .
			"Fone: $telefone \n" .
			"Departamento: $departamento \n" .
			"Link do arquivo: Não há arquivo anexado  \n" .
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
			echo '<p class="sucesso">Mensagem enviada com sucesso!</p>';
		
		
		
			$nome = '';
			$email = '';
			$cidade = '';
			$estado = '';
			$telefone = '';
			$departamento = '';
			$mensagem = '';
	}
	else {
		echo '<p class="error">Por favor, preencha todos os campos!</p>';
	}
}
				
		
		}//isset
	
	
	?>
    
    
    
    <form action="" method="post" enctype="multipart/form-data">
    
    	<table border="0">
        <tr>
        	<td colspan="2">
    	<label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" size="74" value="<?php if(!empty($nome)) echo $nome ?>">
        	</td>
        </tr>
        
        
        <tr>
        	<td colspan="2">
        <label for="nome">E-mail:</label>
        <input type="text" id="email" name="email" size="74" value="<?php if(!empty($email)) echo $email ?>">
        	</td>
        </tr>
        
        
        <tr>
        	<td>
        <label for="nome">Cidade:</label>
        <input type="text" id="cidade" name="cidade" size="42" value="<?php if(!empty($cidade)) echo $cidade ?>">
        	</td>
            
            <td>
        <label for="nome">Estado:</label>
        <input type="text" id="estado" name="estado" size="26" value="<?php if(!empty($estado)) echo $estado ?>">
            </td>
        </tr>
        
        <tr>
        	<td colspan="2">
        <label for="nome">Telefone:</label>
        <input type="text" id="telefone" name="telefone" size="74" value="<?php if(!empty($telefone)) echo $telefone ?>"> 	
            </td>
        </tr>
        
         <tr>
        	<td colspan="2">
        <label for="nome">Escolha o departamento:</label>
        <select id="departamento" name="departamento">
        
        	<option value="" selected>Escolha um Departamento</option>
        	<option value="rh">RH</option>
            <option value="financeiro">Financeiro</option>
            <option value="compras">Compras</option>
            <option value="vendas">Vendas</option>
            <option value="assistencia">Assistência</option>
            <option value="marketing">Marketing</option>
        
        </select>	
            </td>
        </tr>
        
        <tr>
        	<td colspan="2">
        <label for="nome">Anexar Arquivo:</label>
       	<input type="file" id="anexo" name="anexo">
            </td>
        </tr>
        
        <tr>
        	<td colspan="2">
        <label for="nome">Mensagem:</label>
       	<textarea id="mensagem" name="mensagem"><?php if(!empty($mensagem)) echo $mensagem ?></textarea>
            </td>
        </tr>
        
        
        <tr>
        	<td colspan="2">
        <input type="submit" id="submit" name="submit" value="ENVIAR">
            </td>
        </tr>
        
        
        </table>
        
    
    
    </form>
    	
    
    </div><!--form_contato-->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
               
        
        </section><!--news-->
    
    
    
    
    
    
    
    
    	
    
    
    </section><!--conteudo-->
    
  </div><!--back_conteudo-->
  
    	
    
    
    
  <?php require 'footer.php'; ?>
    
    </section><!--/all-->
    
  
  
    
    


</body>
</html>