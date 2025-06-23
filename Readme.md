
# 🎮 Projeto: Jogo de Adivinhação (PHP CLI)

## 🧠 Objetivo
Criar um jogo simples de adivinhação que roda no terminal (linha de comando), onde o jogador tenta acertar um número aleatório escolhido pelo sistema. O número estará entre 1 e 100, e o jogador terá um número limitado de tentativas, baseado na dificuldade escolhida.

---

## 🎯 Funcionalidades

1. **Boas-vindas e nome do jogador**
   - O sistema pergunta o nome do jogador e o cumprimenta.

2. **Escolha de dificuldade**
   - O jogador escolhe o nível de dificuldade:
     - `1 - Fácil` (20 tentativas)
     - `2 - Médio` (10 tentativas)
     - `3 - Difícil` (5 tentativas)

3. **Número aleatório**
   - O sistema escolhe aleatoriamente um número entre 1 e 100.

4. **Tentativas**
   - O jogador tenta adivinhar o número.
   - A cada tentativa, o sistema responde:
     - “🔺 O número é maior!”
     - “🔻 O número é menor!”
     - “✅ Parabéns! Você acertou!”

5. **Fim do jogo**
   - Se o jogador acertar, o jogo termina com uma mensagem de sucesso.
   - Se as tentativas acabarem, o jogo termina mostrando o número correto.

---

## 📌 Regras

- O jogador **só pode chutar números entre 1 e 100**.
- Caso o jogador digite algo inválido (ex: letra, número fora do intervalo), o sistema deve avisar e **não contar a tentativa**.
- O número de tentativas depende da dificuldade escolhida.

---

## 💡 Dicas para Implementação

- Use `readline()` para receber entradas do usuário no terminal.
- Use `rand(1, 100)` para gerar o número secreto.
- Use um `while` para controlar as tentativas.
- Use `if/else` para comparar os palpites com o número secreto.
- Comece pequeno e vá testando parte por parte.
- Use `echo` para imprimir mensagens.

---

## 🛠 Estrutura esperada

Arquivo único chamado:

```
jogo.php
```

---

## ✅ Exemplo de Execução

```
Olá! Qual é o seu nome?
> Jean

Olá, Jean! Escolha a dificuldade:
1 - Fácil (20 tentativas)
2 - Médio (10 tentativas)
3 - Difícil (5 tentativas)
> 2

Beleza! Pensei em um número de 1 a 100. Tente adivinhar!

Tentativa 1 de 10: 
> 50
🔺 O número é maior!

Tentativa 2 de 10: 
> 75
🔻 O número é menor!

Tentativa 3 de 10: 
> 63
✅ Parabéns, Jean! Você acertou em 3 tentativas!
```

---

## 🚀 Extras (opcional, só se quiser ir além)

- Mostrar todos os palpites feitos ao final do jogo
- Permitir que o jogador jogue novamente sem reiniciar o script
- Mostrar o tempo total da partida
- Adicionar sons ou emojis para enriquecer a experiência 😄

---

Boa sorte e divirta-se programando! 🎉
