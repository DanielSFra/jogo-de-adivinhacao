<?php
$facil = 1;
$medio = 2;
$dificil = 3;

$nome = readline("Digite seu nome: ");
  echo "Olá, " . $nome . "!\n";
 
$dificuldade = readline("Escolha a dificuldade");
if($facil){
  echo "`1 - Fácil` (20 tentativas)";
   if($medio){
    echo "`2 - Médio` (10 tentativas)";
   }
   if($dificil){
    echo "`3 - Médio` (5 tentativas)";
   }
}
echo ", " . $dificuldade . "!\n";

  ?>