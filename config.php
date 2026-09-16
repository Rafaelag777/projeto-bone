<?php
// config.php
// Configurações compartilhadas entre index.php, obrigado.php e esgotado.php

// Quantidade inicial de itens em estoque.
// Alterar esse valor aqui reflete automaticamente em todas as páginas,
// pois elas leem a partir da sessão (que é inicializada com este valor).
define('ESTOQUE_INICIAL', 20);

// Preço do produto (usado no index.php)
define('PRECO_PRODUTO', 'R$ 99,00');
