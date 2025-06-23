<?php
$facil = 1;
$medio = 2;
$dificil = 3;
//usuário digita o nome
$nome = readline("Digite seu nome: ");
  echo "Olá, " . $nome . "!\n";
 
  //Solicita ao usuário o nível de dificuldade

echo "1 - Fácil` (20 tentativas)\n";
echo "2 - Médio` (10 tentativas)\n";
echo "3 - Dificil` (5 tentativas)\n";
$dificuldade = readline("Escolha a dificuldade:");
if($dificuldade == $facil ){
   echo "voce escolheu o nível fácil\n";
   
}
elseif($dificuldade == $medio){
  echo "voce escolheu o nível médio\n";
}
elseif($dificuldade == $dificil){
  echo "voce escolheu o nível difícil\n";
} else{
 echo "opção inválida\n";
 return 1;
}


echo ", " . $dificuldade . "!\n";

  ?>