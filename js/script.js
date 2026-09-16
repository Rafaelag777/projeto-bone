// script.js
// Controla o carrossel de imagens do produto na página index.php

const imagens = [
  "https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1200",
  "https://images.unsplash.com/photo-1516820580870-3f66c730d990?q=80&w=1200",
  "https://images.unsplash.com/photo-1507838153414-b4b713384a76?q=80&w=1200"
];

let indice = 0;

function nextSlide() {
  indice = (indice + 1) % imagens.length;
  document.getElementById('carrossel-img').src = imagens[indice];
}

function prevSlide() {
  indice = (indice - 1 + imagens.length) % imagens.length;
  document.getElementById('carrossel-img').src = imagens[indice];
}

// A lógica de compra NÃO fica em JavaScript.
// O formulário de compra é enviado via POST para o próprio index.php,
// que usa a sessão PHP ($_SESSION['estoque']) para controlar o estoque
// no servidor e redireciona para obrigado.php ou esgotado.php.
