<?php
include_once "../conexao.php";
include_once "email.php";
include_once "PHPMailer/EMAIL.php";
//Validando a existência dos dados

$nomealuno = $_POST['nomealuno'];
$nomeresp = $_POST['nomeresp'];
$telefone = $_POST['telefone'];
$turma = $_POST['turma'];
$email = $_POST['email'];
$login = $_POST['login'];
date_default_timezone_set('America/Fortaleza');
$data =  date("d/m/Y H:i:s");

//Inserindo dados
$cadsoli = $con->prepare("INSERT INTO solicite_senha SET nomealuno=:nomealuno, nomeresp=:nomeresp, telefone=:telefone, turma=:turma, email=:email, login=:login, data=:data");
$cadsoli->bindParam(':nomealuno', $nomealuno);
$cadsoli->bindParam(':nomeresp', $nomeresp);
$cadsoli->bindParam(':telefone', $telefone);
$cadsoli->bindParam(':turma', $turma);
$cadsoli->bindParam(':email', $email);
$cadsoli->bindParam(':login', $login);
$cadsoli->bindParam(':data', $data);
$cadsoli->execute();
?>
<html>

<body>
  <form action="../../view/solici-senha.php" method="POST" name="enviar">
    <?php
    if ($cadsoli) {
      emailsolici($arquivo, $email);
      emailenvi($nomealuno,$nomeresp, $telefone, $turma, $email, $login);
    ?>
      <input type="hidden" value="s" name="verificacao">

    <?php
    } else {
    ?>
      <input type="hidden" value="n" name="verificacao">

    <?php
    }
    ?>
  </form>
  <script type="text/javascript">
    document.enviar.submit();
  </script>
</body>

</html>
<?
exit;
