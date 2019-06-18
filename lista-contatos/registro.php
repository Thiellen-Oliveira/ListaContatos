<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaClone - Registro</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto:400,700" rel="stylesheet">
  </head>
  <body class="back-photo">
    <main>
      <section class="panel main-panel">
        <header>
          <h1 class="title">
            <i class="fas fa-book"></i>
            Lista<span class="clone">Contatos</span>
          </h1>
          <h3 class="message">Cadastrar contato</h3>
        </header>
        <div class="form-panel">
          <form method="POST" action="cadastro.php">
            <div>
              <input type="text" name="nome" required="true"  placeholder="Nome completo" class="input-control">
            </div>
            <div>
              <input type="text" name="apelido"  placeholder="Apelido" class="input-control">
            </div>
            <div>
              <input type="email" name="email" required="true" placeholder="E-mail" class="input-control">
            </div>

            <div>
              <input type="text" name="telefone" required="true"  placeholder="Telefone" class="input-control">
            </div>


            <div>
              <input type="submit" value="Cadastrar contato" class="button button-register" >
            </div>
          </form>
          <div class="form-panel">
            <form action= "listar.php" method="POST">
              <input type="submit" value = "Listar Contatos" class="button nutton-register">
            </form>
          </div>
        </div>
      </section>

    </main>
  </body>
</html>
