# Identificação da Palavra-chave SELECT sem Expressões Regulares

A maioria das linguagens de programação são sensíveis a maiúsculas e minúsculas, o que significa que palavras-chave devem ser escritas de uma forma específica. No entanto, algumas linguagens, como SQL, são insensíveis a maiúsculas e minúsculas, permitindo que palavras-chave como `SELECT` possam ser escritas em diferentes combinações de maiúsculas e minúsculas, como `select`, `Select`, `sElEcT`, etc.

## Objectivo

Criar um algoritmo para identificar a palavra-chave `SELECT` em SQL de maneira insensível a maiúsculas e minúsculas, permitindo que a palavra seja escrita em qualquer mistura de letras maiúsculas e minúsculas.

### Requisitos:
- Não utilizar bibliotecas ou funções nativas de expressões regulares.
- Não utilizar funções nativas para transformação de caracteres (ex: `lower()`, `upper()`).

## 🔹 Fluxograma

Um fluxograma será elaborado para representar o algoritmo que realiza essa correspondência, garantindo que ele percorra a string corretamente e identifique a palavra `SELECT` independentemente da forma como foi escrita.

## 🔹 Implementação

Será desenvolvido um código em **PHP** (ou outra linguagem de programação) para encontrar a palavra-chave `SELECT` em uma string, seguindo os critérios estabelecidos.

## 🔹 Como Executar

1. Clone este repositório:
   ```sh
   git clone https://github.com/mariomelembe98/analise-lexica-php.git
   cd analise-lexica-php
   ```
2. Execute o código em PHP:
   ```sh
   php select.php
   ```

## 🔹 Contribuição

Sinta-se à vontade para contribuir com melhorias no código, otimizando a lógica de busca ou sugerindo abordagens diferentes para resolver o problema sem o uso de funções nativas proibidas.

## 🔹 Licença

Este projeto está licenciado sob a licença MIT. Sinta-se livre para usá-lo e modificá-lo conforme necessário.

