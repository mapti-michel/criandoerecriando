<?php



class sendmessage{
	
	private $nome;
	private $email;
	private $motivo;
	private	$mensagem;

    private $navegador;
    private $ip;
    private $dataEnvio;

    private $mail;
    private $code;

    function setDataEnvio($dataEnvio){
        $this->dataEnvio = $dataEnvio;
    }
    function getDataEnvio(){
        $this->dataEnvio;
    }

    function setMail($mail){
        $this->mail = $mail;
    }
    function getMail(){
        $this->mail;
    }

    function setCode($code){
        $this->code = $code;
    }
    function getCode(){
        $this->code;
    }

	function setNome($nome){
		$this->nome = $nome;
	}
	function getNome(){
		$this->nome;
	}

    function setEmail($email){
        $this->email = $email;
    }
    function getEmail(){
        $this->email;
    }

    function setMotivo($motivo){
        $this->motivo = $motivo;
    }
    function getMotivo(){
        $this->motivo;
    }
    function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }
    function getMensagem(){
        $this->mensagem;
    }
    function setNavegador($navegador){
        $this->navegador = $navegador;
    }
    function getNavegador(){
        $this->navegador;
    }

    function setIp($ip){
        $this->ip = $ip;
    }
    function getIp(){
        $this->ip;
    }


function envia_msg_prof($data_envio, $ip_envio, $nav_envio, $nome_envio, $email_envio, $motivo_envio, $mensagem_envio, $e, $code, $profissional, $email_prof){
// function enviaMensagem(){

    $email_mask = "";

    switch ($email_prof) {
        case 'renataneumannpsico@gmail.com':
            $email_mask = "renataneumann@criandoerecriando.com.br";
            break;
        case 'psibrunalauria@gmail.com':
            $email_mask = "brunalauria@criandoerecriando.com.br";
            break;
        
        default:
            $email_mask = "contato@criandoerecriando.com.br";
            break;
    }
    // ENMVIANDO A MENSAGEM APÓS A CONFIRMAÇÃO

        require_once "../phpmailer/src/PHPMailer.php";
        require_once "../phpmailer/src/Exception.php";
        require_once "../phpmailer/src/OAuth.php";
        require_once "../phpmailer/src/SMTP.php";
        require_once "../phpmailer/src/POP3.php";


        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $to                 = $email_mask; //seu e-mail
        //$to                 = 'contato@criandoerecriando.com.br'; //seu e-mail
        $mail->SetLanguage("pt_br", "../phpmailer/language/phpmailer.lang-pt_br.php");
        $mail->CharSet      = "UTF-8";
        $mail->IsSMTP();

        $mail->From         = $to;  //email do remetente
        $mail->Sender       = $to;  //email do remetente
        $mail->FromName     = "CRIANDO E RECRIANDO *** ATENDIMENTO ELETRÔNICO :) ***";   //Nome de formatado do remetente

        $mail->Host         = "mail.criandoerecriando.com.br"; //Seu servidor SMTP
        $mail->Mailer       = "smtp";     //Usando protocolo SMTP
        $mail->Port         = 587;
        $mail->Secure       = "tls";

        $mail->SMTPAuth     = "true";
        $mail->Username     = "auto-reply@criandoerecriando.com.br";
        $mail->Password     = "4.br1nc4d31r4.3st4.4c4b4nd0";

//        $mail->AddAddress($to);     //O destino do email
//        $mail->AddBCC($email_envio);      //Envio com cópia oculta

        $mail->addReplyTo('contato@criandoerecriando.com.br');
        $mail->addAddress($email_prof);
//        $mail->addAddress($email_envio, $nome_envio);
//        $mail->addCC($email_envio, 'Cópia');

        $mail->IsHTML(true);

        $mail->Subject = "CRIANDO E RECRIANDO"; //Assunto do email
        $font = "arial";
        $tamanho = 2;
        $imagem = "https://www.criandoerecriando.com.br/img/logomarcaCR.png";
        $mail->Body = "<br>";
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "<font face=$font size='3'><b>CRIANDO E RECRIANDO *** CONTATO ***</b></font>";
        $mail->Body .= "<br><hr>";
        $mail->Body .= "<div align='right'><label style='font-size: 12px; font-weight: bold;'>IP: ".$ip_envio." | Navegador: ".$nav_envio." | Data: ".$data_envio."</label></div>";
        $mail->Body .= "<hr>";
        $mail->Body .= "<br><br>";
//        $mail->Body .= "Prezado Sr(a) ".$nome_envio;
//        $mail->Body .= "<br><br>";
        $mail->Body .= "O formulário no site foi preenchido. Segue abaixo os dados informados: ";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Nome</b>: ".$nome_envio. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>E-mail</b>: ".$email_envio. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Profissional</b>: ".$profissional. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Motivo do contato</b>: ".$motivo_envio. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Mensagem</b>: <br/>".$mensagem_envio. "</font><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Equipe Criando e Recriando</font><br>";

        $mail->Body .= "<br><hr>";
        $mail->Body .= "<br>";
        $mail->Body .= "<label style='font-size: $tamanho;'>Não foi você ? Não se preocupe, talvez alguém tenha colocado seu e-mail por engano. Desconsidere esta mensagem.</label>";
        $mail->Body .= "<br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.criandoerecriando.com.br' target='_blank' title='Acesse o site'><img src='http://www.criandoerecriando.com.br/img/logomarcaCR.png' width='130' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <font color='#333333'><br>Criando e Recriando</font><br><br>";
        $mail->Body .= "        <font size='$tamanho'>Telefone: (21) 99723-2497</font><br>";
//        $mail->Body .= "        <font size='$tamanho'>Telefone: (21) 2404-3473</font><br>";
        $mail->Body .= "        <a href='http://www.criandoerecriando.com.br' target='_blank'><font size='2'>http://www.criandoerecriando.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:contato@criandoerecriando.com.br' target='_blank'><img src='http://www.criandoerecriando.com.br/img/email.png'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/criandoerecriando' target='_blank'><img src='http://www.criandoerecriando.com.br/img/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/CriandoReriando' target='_blank'><img src='http://www.criandoerecriando.com.br/img/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';



        if(!$mail->Send()){
            echo "<meta http-equiv='refresh' content='0;url=contato?send=".base64_encode("merr")."&c=".base64_encode($mail->ErrorInfo)."'>";
//            echo "<meta http-equiv='refresh' content='0;url=confirm.php?mail=".$email_envio."&a=".$code."&send=".base64_encode("merr")."&c=".base64_encode($mail->ErrorInfo)."'>";
        }else{
//            $this->
            
            echo "<meta http-equiv='refresh' content='0;url=../contato/?send=".base64_encode("mok")."'>";
        }


        $mail->ClearAllRecipients();


}

function envia_sucesso($nome_envio, $email){

        require_once "../phpmailer/src/PHPMailer.php";
        require_once "../phpmailer/src/Exception.php";
        require_once "../phpmailer/src/OAuth.php";
        require_once "../phpmailer/src/SMTP.php";
        require_once "../phpmailer/src/POP3.php";


        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $to                 = "contato@criandoerecriando.com.br"; //seu e-mail
        //$to                 = 'contato@criandoerecriando.com.br'; //seu e-mail
        $mail->SetLanguage("pt_br", "../phpmailer/language/phpmailer.lang-pt_br.php");
        $mail->CharSet      = "UTF-8";
        $mail->IsSMTP();

        $mail->From         = $to;  //email do remetente
        $mail->Sender       = $to;  //email do remetente
        $mail->FromName     = "CRIANDO E RECRIANDO *** CONFIRMAÇÃO :) ***";   //Nome de formatado do remetente

        $mail->Host         = "mail.criandoerecriando.com.br"; //Seu servidor SMTP
        $mail->Mailer       = "smtp";     //Usando protocolo SMTP
        $mail->Port         = 587;
        $mail->Secure       = "tls";

        $mail->SMTPAuth     = "true";
        $mail->Username     = "auto-reply@criandoerecriando.com.br";
        $mail->Password     = "4.br1nc4d31r4.3st4.4c4b4nd0";

        $mail->AddAddress($to);     //O destino do email
        $mail->AddBCC($email);      //Envio com cópia oculta

        $mail->addReplyTo('contato@criandoerecriando.com.br');
        $mail->addAddress($email, $nome_envio);
        $mail->addCC($email, 'Cópia');

        $mail->IsHTML(true);

        $mail->Subject = "CRIANDO E RECRIANDO"; //Assunto do email
        $font = "arial";
        $tamanho = 2;
        $imagem = "https://www.criandoerecriando.com.br/img/logomarcaCR.png";
        $mail->Body = "<br>";
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "<font face=$font size='3'><b>CRIANDO E RECRIANDO *** CONFIRMAÇÃO DE CONTATO ***</b></font>";
        $mail->Body .= "<br><hr>";
//        $mail->Body .= "<div align='right'><label style='font-size: 12px; font-weight: bold;'>IP: ".$ip_envio." | Navegador: ".$nav_envio." | Data: ".$data_envio."</label></div>";
//        $mail->Body .= "<hr>";
//        $mail->Body .= "<br><br>";
        $mail->Body .= "<br>";
        $mail->Body .= "Prezado Sr(a) ".$nome_envio;
        $mail->Body .= "<br><br>";
        $mail->Body .= "Sua mensagem foi confirmada e enviada com  sucesso. Tão breve retornaremos o seu contato.";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Equipe Criando e Recriando</font><br>";

        $mail->Body .= "<br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.criandoerecriando.com.br' target='_blank' title='Acesse o site'><img src='http://www.criandoerecriando.com.br/img/logomarcaCR.png' width='130' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <font color='#333333'><br>Criando e Recriando</font><br><br>";
        $mail->Body .= "        <font size='$tamanho'>Telefone: (21) 99723-2497</font><br>";
//        $mail->Body .= "        <font size='$tamanho'>Telefone: (21) 2404-3473</font><br>";
        $mail->Body .= "        <a href='http://www.criandoerecriando.com.br' target='_blank'><font size='2'>http://www.criandoerecriando.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:contato@criandoerecriando.com.br' target='_blank'><img src='http://www.criandoerecriando.com.br/img/email.png'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/criandoerecriando' target='_blank'><img src='http://www.criandoerecriando.com.br/img/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/CriandoReriando' target='_blank'><img src='http://www.criandoerecriando.com.br/img/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';



        if(!$mail->Send()){
            echo "<meta http-equiv='refresh' content='0;url=?send=".base64_encode("merr")."&c=".base64_encode($mail->ErrorInfo)."'>";
        }else{
            
            echo "<meta http-equiv='refresh' content='0;url=../contato/?send=".base64_encode("mcok")."'>";
        }

        $mail->ClearAllRecipients();
    
}


// ********************************************

function envia_confirm($number_captcha, $link, $dataEnvio, $email, $motivo, $mensagem, $falarcom){

        require_once "../phpmailer/src/PHPMailer.php";
        require_once "../phpmailer/src/Exception.php";
        require_once "../phpmailer/src/OAuth.php";
        require_once "../phpmailer/src/SMTP.php";
        require_once "../phpmailer/src/POP3.php";


        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $to                 = "contato@criandoerecriando.com.br"; //seu e-mail
        //$to                 = 'contato@criandoerecriando.com.br'; //seu e-mail
        $mail->SetLanguage("pt_br", "../phpmailer/language/phpmailer.lang-pt_br.php");
        $mail->CharSet      = "UTF-8";
        $mail->IsSMTP();

        $mail->From         = $to;  //email do remetente
        $mail->Sender       = $to;  //email do remetente
        $mail->FromName     = "CRIANDO E RECRIANDO *** CONFIRMAÇÃO DE ENVIO ***";   //Nome de formatado do remetente

        $mail->Host         = "mail.criandoerecriando.com.br"; //Seu servidor SMTP
        $mail->Mailer       = "smtp";     //Usando protocolo SMTP
        $mail->Port         = 587;
        $mail->Secure       = "tls";

        $mail->SMTPAuth     = "true";
        $mail->Username     = "auto-reply@criandoerecriando.com.br";
        $mail->Password     = "4.br1nc4d31r4.3st4.4c4b4nd0";

        $mail->AddAddress($email);     //O destino do email

        $mail->addReplyTo('contato@criandoerecriando.com.br');

        $mail->IsHTML(true);

        $mail->Subject = "CRIANDO E RECRIANDO"; //Assunto do email
        $font = "arial";
        $tamanho = 5;
        $imagem = "http://www.criandoerecriando.com.br/img/logomarcaCR.png";
        $mail->Body = "<br>";
        $mail->Body .= "<font face=$font size='$tamanho'>";
//        $mail->Body .= "<font face=$font size='3'><b>Porto Bellas - ".$this->motivo." - *** RESPOSTA AUTOMÁTICA ***</b></font>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Prezado Sr(a) ".$this->nome;
        $mail->Body .= "<br><br>";
        $mail->Body .= "Este é um e-mail de confirmação do preenchimento do nosso contato. Se foi você, confirme no link abaixo, por favor:";

        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Falar com</b>: ".$falarcom. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Nome</b>: ".$this->nome. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Seu e-mail</b>: ".$email. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Estamos falando sobre</b>: ".$motivo. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Sua mensagem</b>: <br/>".$mensagem. "</font><br>";
//        $mail->Body .= "<br><br>";

        $mail->Body .= "<br><br>";
        $mail->Body .= "Esta mensagem não foi enviada ainda.<a href='".$link."'>Clique aqui para confirmar o envio. :)</a><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<label>Se preferir, cole isso no seu navegador: ".$link."</label><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<label>Se Se não foi você, não precisa fazer nada, e pedimos desculpas, talvez alguém mencionou o e-mail ".$email." por engano. :/</label><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Lembramos que este formulário estará disponível poe 24 horas. Após isso, será descartada.";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
//        $mail->Body .= "<font face=$font size='$tamanho'>Renata Neumann</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Equipe Criando e Recriando :)</font><br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.criandoerecriando.com.br' target='_blank' title='Acesse o site'><img src='http://www.criandoerecriando.com.br/img/logomarcaCR.png' width='130' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <font color='#333333'><br>Criando e Recriando</font><br><br>";
//        $mail->Body .= "        <font size='$tamanho'>Telefone: (21) 2404-3473</font><br>";
        $mail->Body .= "        <a href='http://www.criandoerecriando.com.br' target='_blank'><font size='2'>http://www.criandoerecriando.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:contato@criandoerecriando.com.br' target='_blank'><img src='http://www.criandoerecriando.com.br/img/email.png'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/criandoerecriando' target='_blank'><img src='http://www.portobellas.com.br/img/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/criandoerecriando' target='_blank'><img src='http://www.criandoerecriando.com.br/img/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';



        if(!$mail->Send()){ //Check for result of sending mail
            echo "<meta http-equiv='refresh' content='0;url=?send=".base64_encode("merr")."&c=".base64_encode($mail->ErrorInfo)."'>";

        }else{
            echo "<meta http-equiv='refresh' content='0;url=?send=".base64_encode("mok")."'>";
        }

        $mail->ClearAllRecipients();


    }

    function geraLink($cod_form, $email){
        //Pegaremos a data e o e-mail

        $site   = "http://www.criandoerecriando.com.br/contato/confirma.php";
        $result = "";
        $dt     = date("Y-m-d");

        $result = $site."?m=".$email."&a=".base64_encode($cod_form);

        return $result;

    }   

    function criaXML($cod_form, $dataEnvio, $horaEnvio, $falarcom, $email_prof, $nome, $email, $motivo, $mensagem, $ip, $navegador){

        //date_default_timezone_set("America/Sao_Paulo");
//        $agora      = new DateTime('now', $timezone);        

        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->preserveWhiteSpaces   = false;
        $dom->formatOutput          = true;
        //Criação do elemento root (elemento pai)
        $root                       = $dom->createElement('contato');
        //Vamos criar o elemento nodeOne, conforme o exemplo anterior
        $campo_codigo               = $dom->createElement('codigo');
        $campo_data                 = $dom->createElement('data_envio');
        $campo_hora                 = $dom->createElement('hora_envio');
        $campo_ip                   = $dom->createElement('ip');
        $campo_navegador            = $dom->createElement('navegador');
        $campo_falarcom             = $dom->createElement('falarcom');
        $campo_email_prof           = $dom->createElement('email_prof');
        $campo_nome                 = $dom->createElement('nome');
        $campo_email                = $dom->createElement('email');
        $campo_motivo               = $dom->createElement('motivo');
        $campo_mensagem             = $dom->createElement('mensagem');
        //criados os elementos, vamos adicionar um valor para cada um deles
        $campo_codigo_txt           = $dom->createTextNode($cod_form);
        $campo_data_txt             = $dom->createTextNode($dataEnvio);
        $campo_hora_txt             = $dom->createTextNode($horaEnvio);
        $campo_ip_txt               = $dom->createTextNode($ip);
        $campo_navegador_txt        = $dom->createTextNode($navegador);
        $campo_falarcom_txt         = $dom->createTextNode($falarcom);
        $campo_email_prof_txt       = $dom->createTextNode($email_prof);
        $campo_nome_txt             = $dom->createTextNode($nome);
        $campo_email_txt            = $dom->createTextNode($email);
        $campo_motivo_txt           = $dom->createTextNode($motivo);
        $campo_mensagem_txt         = $dom->createTextNode($mensagem);
        //Pronto! Elementos criados, o próximo passo é organizar essa bagunça, para isso, usaremos o método appendChild() e diremos quem é elemento pai e quem é elemento filho
        $campo_codigo->appendChild($campo_codigo_txt);
        $campo_data->appendChild($campo_data_txt);
        $campo_hora->appendChild($campo_hora_txt);
        $campo_ip->appendChild($campo_ip_txt);
        $campo_navegador->appendChild($campo_navegador_txt);
        $campo_falarcom->appendChild($campo_falarcom_txt);
        $campo_email_prof->appendChild($campo_email_prof_txt);
        $campo_nome->appendChild($campo_nome_txt);
        $campo_email->appendChild($campo_email_txt);
        $campo_motivo->appendChild($campo_motivo_txt);
        $campo_mensagem->appendChild($campo_mensagem_txt);

        $root->appendChild($campo_codigo);
        $root->appendChild($campo_data);
        $root->appendChild($campo_hora);
        $root->appendChild($campo_ip);
        $root->appendChild($campo_navegador);
        $root->appendChild($campo_falarcom);
        $root->appendChild($campo_email_prof);
        $root->appendChild($campo_nome);
        $root->appendChild($campo_email);
        $root->appendChild($campo_motivo);
        $root->appendChild($campo_mensagem);

        $dom->appendChild($root);
        //Para imprimir na tela, utilizamos o método saveXML()
//      $dom->saveXML();
         
        //Por fim, para salvarmos o documento, utilizamos o método save()
        $dom->save($cod_form.".xml");
        //unset($xml->data); // remove o elemento
    }



}