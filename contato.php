<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teclivre: Portal de Oportunidades de renda extra e Marketing Multi-nível!</title>
<meta name="description" content="Teclivre: Está apresentando diversas formas de renda extra e marketing multi-nivel!"/>
<meta name="keywords" content="Renda extra, markenting multi-nível, multi-nível, imagem folheados, folheados a ouro e prata. folheados, ouro, prata, serviços gráficos, 
cartões de visitas, panfletos, imãs para geladeira, cartazes, fachadas de lojas, banners, convites para casamentos e 
aniversários, convites, aniversários, casamentos, sandãlias personalizadas com miçangas e tecidos, sandálias, micangas, 
tecidos, adesivos para unhas, adesivos, unhas, perfumes e cosméticos, avon, natura, jequiti, hermes"/>

<script type="text/javascript" src="js/jquery.js" /></script>
<script type="text/javascript" src="js/cycle.all.min.js" /></script>
 <script type="text/javascript">
        $(function(){
		$('#slides ul').cycle({
			fx: 'fade',
			speed: 2000,
			timeout: 3000,
			next: '#próximo',
			prev: '#anterior',
			pager: '#pager'							
			})				  
		 })
</script>
<link href="css/con_estilo.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="box">
 		  <div id="header">
        <div id="header_logo">
      <a href="index.html"><img src="imagens/logo_teclivre.png" border="0" alt="" /></a>
      </div><!--logo-->
      
       <div id="topo24horas">
     <!--topo24horas--> 
     
    </div><!--header-->
    
    <div id="menu">
    <a href="index.html">Principal</a><img src="imagens/div_menu.png" />
    <a href="galeria.html">Galeria</a><img src="imagens/div_menu.png" />
	<a href="folheados.html">Renda Extra</a><img src="imagens/div_menu.png" />
    <a href="#">Contato</a>
    </div><!--menu-->
    
    <div id="money">
   <div id="slides">
    <ul>
    <li>
     <a href="http://www.frpromotora.com/arlindoaraujo679032 "><img src="imagens/banner-frpromotora.jpg" alt="" border="0"/></a>
    <h1></h1>
    <p>
    </p>
    </li>
    
    <li>
    <a href="galeria.html"><img src="imagens/banner_eloisa.jpg" alt="" border="0"/></a>
    <h1></h1>
    <p>
    </p>
    </li>
    
    <li>
     <a href="http://www.frpromotora.com/arlindoaraujo679032 "><img src="imagens/banner-frpromotora.jpg" alt="" border="0"/></a>
    <h1></h1>
    <p>
    </p>
    </li>
    
    <li>
     <a href="#"><img src="imagens/bann_criatech.jpg" alt="" border="0"/></a>
    <h1></h1>
    <p>
    </p>
    </li> 
    </ul>
    </div><!--slides-->
    <p>
  <a href="#" id="anterior">Anterior</a>
  <span id="pager"></span>
  <a href="#" id="próximo">Próximo</a>
  </p>
      </div><!--money-->
     
      <div id="contato_content">
      <div id="contato_contato">
       <img src="imagens/imgtopo_gal_divcentro.png" alt="" />
        <div id="contato_contato_int">
        
        <div id="contato_contato_fone">
		<h1>Fale Conosco</h1>
        <p>
        (61) 3434 1054 - (61) 8611 5778	   
		</p>
        <div id="formulario">
<form action="" method="post" enctype="multipart/form-data">
 <fieldset>

<?php
if (isset($_POST['enviar']) && $_POST['enviar'] == 'send') {

 $nome =     strip_tags(trim($_POST['nome']));
 $email =    strip_tags(trim($_POST['email']));
 $assunto =  strip_tags(trim($_POST['assunto']));
 $mensagem = strip_tags(trim($_POST['mensagem']));

 if(empty($nome)) {
 $retorno = '<span>Informe seu nome</span>';
 }elseif (empty($email)) {
 $retorno = '<span>Informe seu e-mail</span>';
 }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $retorno = '<span>Informe um e-mail válido</span>';
 }elseif (empty($assunto)) {
 $retorno = '<span>Digite o assunto!</span>';
 }elseif (empty($mensagem)) {
 $retorno = '<span>Digite a mensagem</span>';
 }if (empty($retorno)) {

//<input type="hidden" name="enviar" value="send" />

$date = date("d/m/Y h:i");

// ****** ATENO ********
// ABAIXO EST A CONFIGURAO DO SEU FORMULRIO.
// ****** ATENO ********

//CABEALHO - ONFIGURAES SOBRE SEUS DADOS E SEU WEBSITE
$nome_do_site="Teclivre";
$email_para_onde_vai_a_mensagem = "criatech@teclivre.com.br";
$nome_de_quem_recebe_a_mensagem = "Arlindo";
$exibir_apos_enviar='';

//MAIS - CONFIGURAOES DA MENSAGEM ORIGINAL
$cabecalho_da_mensagem_original="From: $name <$email>\n";
$assunto_da_mensagem_original="Fale com Teclivre";

// FORMA COMO RECEBER O E-MAIL (FORMULRIO)
// ******** OBS: SE FOR ADICIONAR NOVOS CAMPOS, ADICIONE OS CAMPOS NA VARIVEL ABAIXO *************
$configuracao_da_mensagem_original="

ENVIADO POR:\n
Nome: $nome\n
E-mail: $email\n
Assunto: $assunto\n\n\n
Mensagem: $mensagem\n\n

ENVIADO EM: $date";

//CONFIGURAES DA MENSAGEM DE RESPOSTA
// CASO $assunto_digitado_pelo_usuario="s" ESSA VARIAVEL RECEBERA AUTOMATICAMENTE A CONFIGURACAO
// "Re: $assunto"
$assunto_da_mensagem_de_resposta = "Confirmação";
$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_do_site\n\nEnviado em: $date";

// ****** IMPORTANTE ********
// A PARTIR DE AGORA RECOMENDA-SE QUE NO ALTERE O SCRIPT PARA QUE O  SISTEMA FINCIONE CORRETAMENTE
// ****** IMPORTANTE ********

//ESSA VARIAVEL DEFINE SE  O USUARIO QUEM DIGITA O ASSUNTO OU SE DEVE ASSUMIR O ASSUNTO DEFINIDO
//POR VOC CASO O USUARIO DEFINA O ASSUNTO PONHA "s" NO LUGAR DE "n" E CRIE O CAMPO DE NOME
//'assunto' NO FORMULARIO DE ENVIO
$assunto_digitado_pelo_usuario="s";

//ENVIO DA MENSAGEM ORIGINAL
$headers = "$cabecalho_da_mensagem_original";
if ($assunto_digitado_pelo_usuario=="s")
{
$assunto = "$assunto_da_mensagem_original";
};
$seuemail = "$email_para_onde_vai_a_mensagem";
$mensagem = "$configuracao_da_mensagem_original";
mail($seuemail,$assunto,$mensagem,$headers);

//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA
$headers = "$cabecalho_da_mensagem_de_resposta";
if ($assunto_digitado_pelo_usuario=="s")
{
$assunto = "$assunto_da_mensagem_de_resposta";
}
else
{
$assunto = "Re: $assunto";
};
$mensagem = "$configuracao_da_mensagem_de_resposta";
mail($email,$assunto,$mensagem,$headers);

/*echo "<script>window.location='$exibir_apos_enviar'</script>";*/
echo "<span class=\"yes\">Sua mensagem foi enviada com suscesso, Estaremos respondendo o mais breve possivel!</span>";
} else {
 echo "$retorno";
 }
}
?>
 <label>
 <span>Nome</span>
 <input type="text" name="nome" />
 </label>

 <label>
 <span>E-mail</span>
 <input type="text" name="email" />
 </label>

 <label>
 <span>Assunto</span>
 <input type="text" name="assunto" />
 </label>

 <label>
 <span>Mensagem</span>
 <textarea cols="31" rows="5" name="mensagem"></textarea>
 </label>
 <input type="hidden" name="enviar" value="send" />
 <input type="submit" name="Enviar" class="send"/>

 </fieldset>
</form>
</div><!--formulario-->           
        </div><!--contato_contato_fone-->



              
                           
      </div><!--contato_contato_int-->
     </div><!--contato_contato-->
     
       <div id="contato_dir">
       <img src="imagens/imgtopo_gal_divdir.png" alt="" />
        <div id="contato_dir_int">
      
     </div><!--contato_dir_int-->
     </div><!--contato_dir-->
    
    </div><!--content-->  
     </div><!--box-->
     <div id="clear"></div><!--clear-->
     
     <div id="footer">
     <div id="logo_footer">
    <img src="imagens/logo_footer.png" border="0"/>
    <p>Todos os Direitos Reservados</p>
    </div><!--logo_footer-->
   </div><!--footer-->

      
      
</body>
</html>
