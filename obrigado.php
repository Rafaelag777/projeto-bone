<?php
// O PHP e a Sessão DEVEM ser iniciados na primeira linha do arquivo
session_start();
require_once __DIR__ . '/config.php';

if (!isset($_SESSION['estoque'])) {
    $_SESSION['estoque'] = ESTOQUE_INICIAL;
}

$estoque = $_SESSION['estoque'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Obrigado pela sua compra!</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="pagina-mensagem">
    <div>
      <h1>Obrigado pela sua compra! 🎉</h1>
      <p>
        Assim que o pagamento for confirmado, por favor envie um e-mail para
        <strong>contato@codigofonte.tv</strong> com seus dados para envio.<br>
        Restam <strong><?php echo $estoque; ?></strong> unidade(s) em estoque.
      </p>
      <a href="index.php"><button class="btn">Voltar para a Página Inicial</button></a>
    </div>
  </div>
</body>
</html>
