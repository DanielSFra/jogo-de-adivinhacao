<?php
$facil = 1;
$medio = 2;
$dificil = 3;

//usuário digita o nome
$nome = readline("Olá ! Qual o seu  nome? ");
  echo "Olá " . $nome . "!\n";
 
  //Solicita ao usuário o nível de dificuldade
  
echo"\nEscolha a dificuldade:\n";
echo "1 - Fácil - (20 tentativas)\n";
echo "2 - Médio - (10 tentativas)\n";
echo "3 - Difícil - (5 tentativas)\n";

$tentativas = 0; // inicio de tentativas

// loop para validar a dificuldade ou tentativa escolhida

while ($tentativas === 0){
   $dificuldade = readline("Digite o número da dificuldade: ");

if($dificuldade == $facil ){
   echo "voce escolheu o nível fácil\n";
   $tentativas = 20;
   
}
elseif($dificuldade == $medio){
  echo "voce escolheu o nível médio\n";
   $tentativas = 10;
}
elseif($dificuldade == $dificil){
  echo "voce escolheu o nível difícil\n";
   $tentativas = 5;
} else{
 echo "opção inválida. Por favor escolha um dos níveis de dificuldade\n";
 continue;
}

} 


 // funçao pricipal do jogo
function jogarAdivinhacao($nome_jogador, $limite_tentativas_jogo){


// pegar o numero escolhido pela máquina usarei a funçao rand

$numero_secreto = rand(1,100); // gera um número aleatório entre 1 e 100
$tentativas_feitas = 0; // contar as tentativas
$acertou = false; // para saber se o jogador acertou 
/* adicionado histórico de palpites */
$palpites_historico = []; // array para armazenar os palpites, tentarei mostrar os os palpites

//mensagem com o objetivo do jogo!

echo "\n Pensei em um  número entre  1 e 100. Tente adivinhar!\n\n";

// tentativas
while ($tentativas_feitas < $limite_tentativas_jogo && !$acertou){
  echo "Tentativa " . ($tentativas_feitas + 1) . " de {$limite_tentativas_jogo}:\n";
  $palpite_input = readline("Seu palpite:  ");

  // regra para validar se o palpite é um número entre 1 e 100

  if (!is_numeric($palpite_input) || $palpite_input < 1 || $palpite_input > 100){
    echo " Entrada inválida por favor digite um número entre 1 e 100. \n";
    
  continue; // continua o loop para pedir um novo palpite  
  }

  

  $palpite = (int)$palpite_input; // converte o palpite para um número inteiro
  $palpites_historico[] = $palpite;
  $tentativas_feitas++; // incrementa o contador de tentativas

  // compara o palpite com o número secreto

  if ($palpite == $numero_secreto){
      $acertou = true;
    echo " Parabéns, {$nome_jogador}! Você acertou em  {$tentativas_feitas} tentativas!\n";

}elseif ($palpite < $numero_secreto){
  echo " O número é maior!\n\n";
  
}else{ //palpite > $numero_secreto
  echo " O número é menor!\n\n";

}

}


// verifica se o jogador não acertou o número aós o número de tentativas
if(!$acertou){
  echo "Suas tentaivas acabaram {$nome_jogador}! O Número correto é {$numero_secreto}.\n"; 
}
 echo "/nObrigado por ter jogado {$nome_jogador}/n";

}

// mostrar os palpites do jogador
if (!empty($palpites_historico)) {
    echo "\nSeus palpites foram: " . implode(", ", $palpites_historico) . "/n";

}

// temos um  número, e fazer  com que esse número seja capturado e salvo e baseada na dificuldade, escolhida
 // vamos será feito um looping while para determinada dificuldade ...

 
// chama a função principal do jogo com o nome do jogador e o limte de tentativas escolhida

jogarAdivinhacao($nome, $tentativas); // aqui estava errado, só podem 2 parametros, estava utilizando 3

  ?> 