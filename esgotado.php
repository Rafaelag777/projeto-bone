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
  <title>Produto Esgotado</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="pagina-mensagem">
    <div>
      <h1 class="erro">Produto Esgotado ❌</h1>
      <p>
        Todos os <strong><?php echo ESTOQUE_INICIAL; ?></strong> bonés exclusivos já foram vendidos.<br>
        Fique ligado nas próximas edições e novidades do Código Fonte!
      </p>
      <a href="index.php"><button class="btn">Voltar para a Página Inicial</button></a>
    </div>
  </div>
</body>
</html>
