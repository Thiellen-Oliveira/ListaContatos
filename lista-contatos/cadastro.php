<?php
require_once "banco.php";

// var_dump($_GET);
// die;

$email = $_POST['email'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telefone = $_POST['telefone'];

if (empty($email)) {
  die("E-mail obrigatório");
}
if (empty($nome)) {
  die("Nome obrigatório");
}

if (empty($telefone)) {
  die("Telefone obrigatório");
}


try{
  $sql = "INSERT INTO usuarios(nome, apelido, email, telefone) VALUES (:nome, :apelido, :email,:telefone)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':apelido', $apelido);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':telefone', $telefone);
  if ($stmt->execute())
    echo "Tudo certo";

  else
    echo "Falhou";
}catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}

?>
