<?php

function popularArrayMultidimensional() {
  $nomesProfissoes = [
    "João" => "Desenvolvedor de Software",
    "Maria" => "Engenheira de Software",
    "Pedro" => "Engenheiro Elétrico",
    "Ana" => "Designer Gráfico",
    "Carlos" => "Médico"
  ];

  return $nomesProfissoes;
}

$dados = popularArrayMultidimensional();

echo "Meu nome é João e a profissão que gostaria de exercer é: " . $dados["João"];

?>
