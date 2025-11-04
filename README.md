# 💻 Projeto CRUD PHP

Este projeto é um sistema web simples desenvolvido em PHP com MySQLi que implementa operações CRUD (Create, Read, Update, Delete), além de uma interface pública estilizada.

## ✨ Funcionalidades Principais

* **Front-end (Site Público):** Páginas estáticas (`Home`, `Quem Somos`, `Fale Conosco`) e listagem pública de dados (`Clientes`, `Produtos`).
* **Back-end (Painel Administrativo):** Área restrita para gerenciamento dos dados do sistema.
* **Módulos CRUD:**
    * **Clientes:** Cadastro, listagem, alteração e exclusão de clientes.
    * **Produtos:** Cadastro, listagem, alteração e exclusão de produtos (adicionado recentemente).
* **Estrutura Dinâmica:** Utilização de um roteador simples (`index.php`) para inclusão de páginas via parâmetro `?pg=`.

## ⚙️ Tecnologias Utilizadas

* **Linguagem:** PHP 
* **Banco de Dados:** MySQL
* **Extensão PHP:** MySQLi
* **Front-end:** HTML/CSS
