<?php
require_once "banco.php";
if (isset($_POST['email_excluir'])){
  $email_excluir = $_POST['email_excluir'];
  try{
    $sql = "DELETE FROM usuarios WHERE email = :email";
    $stmt = getConnection()->prepare($sql);
    $stmt->bindParam(':email', $email_excluir);
    if ($stmt->execute())
      echo "Tudo certo";

    else
      echo "Falhou";
  }catch(PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
  }

}

?>
