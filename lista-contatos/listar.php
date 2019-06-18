<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Usuários</title>

  </head>
  <body>

<table border="1">
  <thead>
    <th>Nome</th><th>Apelido</th><th>E-mail</th><th>Telefone</th>
  </thead>
  <tbody>
    <?php
    require_once "banco.php";
    $sql = "select nome, apelido, email, telefone from usuarios";

    foreach (getConnection()->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['apelido']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['telefone']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
<form action= "excluir.php" method="POST">
  <div>
    <input type="text" name="email_excluir" required="true"  placeholder="Insira um email para excluir" class="input-control">
    <input type="submit" value = "Excluir contato" class="button nutton-register">
  </div>
</form>



  </body>
</html>
