<?php

function atividadesLazerFavoritas() {
  $atividades = [
    "Passear" => "Gosto de dar passeios no parque.",
    "Assistir Filme" => "Adoro assistir filmes, especialmente os de ficção científica.",
    "Jogar Futebol" => "Jogar futebol é o meu esporte favorito.",
    "Ler Livros" => "Ler livros é uma ótima forma de relaxar.",
    "Cozinhar" => "Gosto de cozinhar e experimentar novas receitas."
  ];

  return $atividades;
}

$minhasAtividadesFavoritas = atividadesLazerFavoritas();

foreach ($minhasAtividadesFavoritas as $atividade => $descricao) {
  echo "$atividade: $descricao\n";
}

?>
