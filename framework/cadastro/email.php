<?php
require_once('PHPMailer/PHPMailer.php');
require_once('PHPMailer/SMTP.php');
require_once('PHPMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function emailsolici($arquivo, $email)
{
	$mail = new PHPMailer(true);

	try {
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'solicitesenha@salesianojuazeiro.com.br';
		$mail->Password = 'salejua2101';
		$mail->Port = 587;

		$mail->setFrom('solicitesenha@salesianojuazeiro.com.br');
		$mail->addAddress($email);
		//$mail->addAddress('didy95gatao@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'Senha do portal Salesiano Juazeiro';
		$mail->Body = $arquivo;
		$mail->AltBody = 'Foi solicitado a senha do portal do o seu pedido sera respondido em 2 dias úteis.';

		if ($mail->send()) {
			//echo 'Email enviado com sucesso';
		} else {
			echo 'Erro!';
		}
	} catch (Exception $e) {
		echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
	}
}

function emailenvi($nomealuno,$nomeresp, $telefone, $turma, $email, $login)
{
	$mail = new PHPMailer(true);

	try {
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'solicitesenha@salesianojuazeiro.com.br';
		$mail->Password = 'salejua2101';
		$mail->Port = 587;

		$mail->setFrom('solicitesenha@salesianojuazeiro.com.br');
		$mail->addAddress('solicitesenha@salesianojuazeiro.com.br');
		//$mail->addAddress('didy95gatao@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'Senha do portal Salesiano Juazeiro';
		$mail->Body = '<b>Aulno:</b>'.$nomealuno.'<br><b>Responsavel:</b>'.$nomeresp.'<br><b>Celular:</b>'.$telefone.'<br><b>Turma:</b>'.$turma.'<br><b>Email:</b>'.$email.'<br><b>Tipo:</b>'.$login;
		$mail->AltBody = 'Aulno:'.$nomealuno.'Responsavel:'.$nomeresp.'Celular'.$telefone.'Turma:'.$turma.'Email:'.$email.'Tipo:'.$login;

		if ($mail->send()) {
			//echo 'Email enviado com sucesso';
		} else {
			echo 'Erro!';
		}
	} catch (Exception $e) {
		echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
	}
}