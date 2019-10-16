<?php


class send{

	private $nome;
	private $email;
    private $titulo;
    private $msg;


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

    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function getTitulo(){
        $this->titulo;
    }

	function setMsg($msg){
		$this->msg = $msg;
	}
	function getMsg(){
		$this->msg;
	}


function enviaMensagem(){

        $to = 'naoresponder@mapti.com.br'; //seu e-mail

//        $pop = new POP3();
//        $pop->authorise("mail.mapti.com.br", 110, 30, "naoresponda.spam@mapti.com.br", "bjQwcjNzcDBuZDNyU1A0TVdmZHB2MHV0M3AzZzRy", 1);


        $mail = new PHPMailer();
        
        $mail->SetLanguage("br");
        $mail->isSMTP();
        $mail->IsHTML(true);
//		$mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->Username = "naoresponder@mapti.com.br";
        $mail->Password = "bjQwcjNzcDBuZDNyU1A0TVdmZHB2MHV0M3AzZzRy";
        
        $mail->setFrom($to, "Criando e Recriando - ".utf8_decode("Consultório")." de Psicologia e Psicoterapia");  //email do destinatário
        
        $mail->Host = "mail.mapti.com.br"; //Seu servidor SMTP
        $mail->Mailer = "smtp";     //Usando protocolo SMTP
        $mail->Port = 587;
//        $mail->Port = 465;
        
        $mail->AddAddress($this->email);     //O destino do email
        $mail->AddBCC($this->email);      //Envio com cópia oculta
        $mail->Subject = "Criando e Recriando - ".utf8_decode("Consultório")." de Psicologia e Psicoterapia"; //Assunto do email

        $font = "arial";
        $tamanho = 2;
//        $imagem = "http://jmc.mapti.com.br/images/JMC.png";
        $mail->Body = "<br>"; //Body of the message
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "<font face=$font size='3'><b>JMC - " . utf8_decode($this->titulo) . "</b></font>";
        $mail->Body .= "<br><hr>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Prezado Sr(a) " . utf8_decode($this->nome);
        $mail->Body .= "<br><br>";
        $mail->Body .= "Criando e recriando agradece o seu contatoe retornaremos em breve. Segue as ".utf8_decode("informações").":";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<table border='0' style='border-color: #C0C0C0;'>";
        $mail->Body .= "    <tr>";
        $mail->Body .= "        <td>";
        $mail->Body .= "            <font face=$font size='$tamanho'><b>Nome</b>: " . utf8_decode($this->nome). "</font><br>";
        $mail->Body .= "            <font face=$font size='$tamanho'><b>E-mail:</b>: " . $this->email."</font><br>";
        $mail->Body .= "            <font face=$font size='$tamanho'><b>Nome</b>: " . utf8_decode($this->msg). "</font><br>";
        $mail->Body .= "        </td>";
        $mail->Body .= "    </tr>";
        $mail->Body .= "</table>";
        $mail->Body .= "</div>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Criando e Recriando - ".utf8_decode("Consultório")." de Psicologia e Psicoterapia</font><br>";
        $mail->Body .= "<br><hr size='2'>";
//        $mail->Body .= "<tr>";
//        $mail->Body .= "    <td valign='top'>";
//        $mail->Body .= "        <a href='http://jmc.mapti.com.br' target='_blank' title='Acesse o site'><img src='http://jmc.mapti.com.br/images/iconetejm.png' width='130' height='100'></a>";
//        $mail->Body .= "    </td>";
//        $mail->Body .= "    <td valign='top'>";
//        $mail->Body .= "        <font color='#333333'><br>Criando e Recriando - ".utf8_decode("Consultório")." de Psicologia e Psicoterapia</font><br><br>";
//        $mail->Body .= "        <font size='$tamanho'>Telefones: (21) 3159-1391 / (21) 98243-1674</font><br>";
//        $mail->Body .= "        <a href='http://jmc.mapti.com.br' target='_blank'><font size='2'>http://jmc.mapti.com.br</font></a><br>";
//        $mail->Body .= "    </td>";
//        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:napresponder@gmail.com' target='_blank'><img src='http://jmc.mapti.com.br/img/email.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';

        if(!$mail->Send()){ //Check for result of sending mail
//		        echo "<div class='col-sm-12'>";
//		        echo "	<div class='col-sm-6'>";
				echo "		<div class='alert alert-danger' role='alert'>";
//				echo "			<h4 class='alert-heading'>Erro!</h4>";
//				echo "			<hr>";
				echo "				<p class='mb-0'>Foi constatado erro no envio da mensagem. Erro: ".$mail->ErrorInfo."</p>";
//				echo "			<hr>";
				echo "		</div>";
//		        echo "	</div>";
//		        echo "</div>";
		        return false;

        }else{
//            $this->enviandoRespostaAutomatica("tejmweb.contato@gmail.com", $this->email, $this->nome);
/*
            if(enviandoRespostaAutomatica("tejmweb.contato@gmail.com", $this->email, $this->nome)){
                return true;
            }else{
                return false;
            }*/ // Inválido
            return true;
        }

}


    public function enviandoRespostaAutomatica($e_mailDest, $e_mailOrig, $n_ome){

        $font = "arial";
        $tamanho = 2;
        $tamanhoSub = 1;

        $pop = new POP3();
        $pop->authorise("mail.mapti.com.br", 110, 10, "naoresponder@mapti.com.br", "bjQwcjNzcDBuZDNyU1A0TVdmZHB2MHV0M3AzZzRy", 1);


        $mail = new PHPMailer();
        
        $mail->SetLanguage("br");
        $mail->isSMTP();
        $mail->IsHTML(true);
//        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->Username = "naoresponder@mapti.com.br";
        $mail->Password = "bjQwcjNzcDBuZDNyU1A0TVdmZHB2MHV0M3AzZzRy";
        
        $mail->Host = "mail.mapti.com.br"; //Seu servidor SMTP
        $mail->Mailer = "smtp";     //Usando protocolo SMTP
//        $mail->Port = "587";
        $mail->Port = 587;
        
        $mail->setFrom($e_mailOrig, $n_ome);  //email do destinatário // Está certo

        $mail->addAddress($e_mailDest, "Criando e Recriando WEB - ".utf8_decode("Consultório")." de Psicologia e Psicoterapia");     //O destino do email //e_mailDest
//        $mail->addReplyTo($e_mailDest, $n_ome);
        $mail->AddBCC($e_mailDest);      //Envio com cópia oculta

        $mail->Subject = "*** MENSAGEM ".utf8_decode("AUTOMÁTICA")." *** Não responder";// . $this->titulo; //Assunto do email
        $mail->CharSet = "UTF-8";
        
        $mail->Body .= "<br>";
        $mail->Body .= "<font face=$font size='3'><b>Assunto: ".$this->titulo."</b>";// . $this->titulo . "</b></font>";
        $mail->Body .= "<br/><hr>";
        $mail->Body .= "<div align='justify'><font face='$font' size='".$tamanho."'>".utf8_decode('Nome: ').utf8_decode($this->nome)."</font></div>";
//        $mail->Body .= "<br/>";
        $mail->Body .= "<div align='justify'><font face='$font' size='".$tamanho."'>E-mail: ".utf8_decode($this->email)."</font></div>";
        $mail->Body .= "<div align='justify'><font face='$font' size='".$tamanho."'>Mensagem: ".utf8_decode($this->msg)."</font></div>";
        $mail->Body .= "<br/>";

/*        $mail->Body .= "<table border='1' style='border-color: #C0C0C0;'>";
        $mail->Body .= "    <tr>";
        $mail->Body .= "        <td>";
        $mail->Body .= "<div align='center'><font face='$font' size='".$tamanho."'><b>".utf8_decode('Autenticação')."</b></font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->evento))."</font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->nome))."</font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->produto))."</font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->quant))."</font><br>";
        $mail->Body .= "        </td>";
        $mail->Body .= "    </tr>";
        $mail->Body .= "</table>";
        */
        $mail->Body .= "</div>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<font face=$font size='$tamanho'>Criando e Recriando - ".utf8_decode("Consultório")." de Psicologia e Psicoterapia WEB - Mensagem ".utf8_decode('Automática')."</font><br><br>";
//        $mail->Body .= "<br><hr size='2'>";
        $mail->Body.='</font>';

        if($mail->send()){
//            return true;
/*
                echo "<div class='col-sm-12'>";
                echo "  <div class='col-sm-6'>";
                echo "      <div class='alert alert-success' role='alert'>";
                echo "          <h4 class='alert-heading'>Sucesso!</h4>";
                echo "          <hr>";
                echo "              <p class='mb-0'>Foi encaminhado com sucesso.</p>";
                echo "          <hr>";
                echo "      </div>";
                echo "  </div>";
                echo "</div>";
                */
                return true;
                
        }else{
            
                echo "<div class='col-sm-12'>";
                echo "  <div class='col-sm-6'>";
                echo "      <div class='alert alert-danger' role='alert'>";
                echo "          <h4 class='alert-heading'>Erro!</h4>";
                echo "          <hr>";
                echo "              <p class='mb-0'>Foi constatado erro no envio da mensagem automática.</p>";
                echo "          <hr>";
                echo "      </div>";
                echo "  </div>";
                echo "</div>";
            return false;
        }
        $mail->ClearAllRecipients();
        die;
    }


}
