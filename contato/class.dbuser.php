<?php

/*
*******************************************************************
ARQUIVO SIMPLES PARA VALIDAÇÃO DE USUÁRIO NOS SISTEMAS
AUTOR: 	MICHEL PEREIRA
FUNÇÃO: DATA SCIENTIST | DEVELOPER | DEV WEB BACKEND | DBA DEV
*******************************************************************
*/

class dbuser{

	// DECLARANDO AS VARIÁVEIS
	private $iduser;
	private $user;
	private $senha;

	// PREPARANDO PARA O RECEBIMENTO DSA INFORMAÇÕES
	// ORIENTADO A OBJETOS

	function setIduser($iduser){
		$this->iduser = $iduser;
	}

	function setUser($user){
		$this->user = $user;
	}

	function setSenha($senha){
		$this->senha = $senha;
	}


	//NESTA FUNÇÃO ABAIXO, COLOQUE SOMENTE O NOME DA TABELA,COLUNA DO USUARIO E DA SENHA DO SEU BANCO DE DADOS
	public static function valida_usuario($tabela = "db_user", $col_id =  "db_id_usuario", $col_usuario = "db_nome_usuario", $col_senha="db_senha_usuario"){ 

		$sql = "SELECT ".$col_id.", ".$col_usuario.", ".$col_senha." FROM ".$tabela." 
		WHERE 
		".$col_usuario."='".$this->user."' AND 
		".$col_senha."='".$this->senha."'
		";

		try{
			$this->conectaBanco(); //CHAMANDO A CONEXÃO AO BANCO


			$result =  mysqli_query($sql); // EXECUTA A VARIÁVEL SQL

			$rows_count = mysqli_num_rows($result); //PERGUNTA AO MYSQL QUANTOS USUÁRIO TÊM

			if($rows_count  === 1){ //SE HOUVER 1,LOCALIZOUO USUÁRIO, ENTÃO
				$ident = mysqli_fetch_array($result); //CAPTURA AS INFORMAÇÕES INDIVIDUALMENTE, GERANDO UM VETOR

				session_start(); // LIBERA O SESSION

				$_SESSION['id_usuario'] 		= $ident['id_usuario']; //PEGA O ID DO USUÁRIO DENTRO DO IDENT E COLOCA NO SESSION
				$_SESSION['nome_usuario'] 		= $ident[$col_usuario]; //PEGA  NOME DO USUÁRIO
				$_SESSION['acesso_liberado'] 	= true;// LIBERAO ACESSO AO SISTEMA

				return true;// RETORNA TRUE,DIZENDO QUE ESTÁ TUDO CERTO


			}else{

				echo "Usuário ou senha inválido(s)";
			}
		}catch(Exception $e){
			echo "Erro na consultado SQL. Descrição: ".$e->getMessage();
		}
		return false; // RETORNA FALSO CASO QUALQUER ERRO

	} 

	public function conectaBanco(){

		$servidor 	= "" // SERVIDOR. NORMALMENTE LOCALHOST(PADRÃO)
		$usuario 	= "" // USUÁRIO DOBANCO DEDADOS. NORMALMENTE, ROOT.
		$senha 		= "" // SENHA DE ACESSO AO BANCO DE DADOS
		$database 	= "" // DATABASE OU SCHEMA (NÃO É TABELA) DO BANCO DE DADOS

		try{

			// PREPARANDO O BANCO DE DADOS, COM AS INFORMAÇÕES DE ACESSO

			$conexao 	= mysqli_connect($servidor, $usuario, $senha, $database); // MYSQL
	
			if(!$conexao){
				echo "Acesso inválido";
			}

			return $conexao;

		}catch(Exception $e){
			echo "Houve um  problema de conexão ao banco. Confirmesuas informações de acesso. Mensagem: ".$e->getMessage();
		}

	}



}

