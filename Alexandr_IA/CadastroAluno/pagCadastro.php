<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../ArquivosStyle/CeSS.css">
    <title> Cadastrar </title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Biblioteca CPII - Caxias</h1>
    <?php print_r($_REQUEST); ?>
    <p id="subtitulo">Aluno e Professor</p>
      <center>
      <form method="post" action="cadastraUsuario.php">
        <table>
          <tr>
            <td>
              <div class="linha"><label>Matrícula:</label> <input class="caixa" type="text"><br></div>
              <div class="linha"><label>Nome:</label> <input class="caixa" type="text"><br></div>
              <div class="linha"><label>Email:</label> <input class="caixa" type="email"><br></div>
              <div class="linha"><label>Senha:</label> <input class="caixa" type="password"><br></div>
              <div class="linha"><label>Confirmar senha:</label> <input class="caixa" type="password"><br></div>
            </td>
          </tr>
        </table>
        <input id="submito2018" type="submit" value = "Cadastrar"><br>
      </form>
    </center>
  </body>
</html>