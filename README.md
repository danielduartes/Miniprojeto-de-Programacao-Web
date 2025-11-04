# 💻 Projeto CRUD PHP com Múltiplos Módulos

Este projeto é um sistema web simples desenvolvido em PHP com MySQLi (paradigma procedural) que implementa operações CRUD (Create, Read, Update, Delete) para múltiplos módulos, além de uma interface pública estilizada.

## ✨ Funcionalidades e Escopo do Projeto

Este projeto cumpre o objetivo de estender a base de código do CRUD de Clientes, conforme os requisitos do projeto.

### Módulo Implementado

* **Tema Escolhido para o Novo CRUD:** **Produtos**.

### Escopo da Implementação

* **Front-end (Site Público):** Páginas estáticas (`Home`, `Quem Somos`, `Fale Conosco`) com conteúdo completo e estilização aprimorada (`style.css`).
* **Back-end (Painel Administrativo):** Área de gerenciamento estilizada, incluindo links para os novos módulos.
* **Módulos CRUD:**
    * **Clientes:** Cadastro, listagem, alteração e exclusão.
    * **Produtos:** Implementação completa de CRUD (Criação, Leitura, Atualização e Exclusão) usando a estrutura do módulo de Clientes como base.
* **Tecnologias:** PHP (MySQLi) e HTML/CSS.

## ⚙️ Tecnologias Utilizadas

* **Linguagem:** PHP (Procedural)
* **Banco de Dados:** MySQL/MariaDB
* **Extensão PHP:** MySQLi
* **Front-end:** HTML e CSS Customizado

## 🚀 Como Rodar o Projeto

### 1. Requisitos

Ambiente de servidor web configurado (XAMPP/WAMP/MAMP) com PHP e MySQL.

### 2. Configuração do Banco de Dados

1.  Crie o banco de dados com o nome: **`techsolutions_db`**.
2.  Execute os comandos SQL abaixo para criar as tabelas `clientes` e `produtos`:

    ```sql
    -- Tabela Clientes
    CREATE TABLE clientes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        cliente VARCHAR(255) NOT NULL,
        cidade VARCHAR(100),
        estado VARCHAR(2)
    );

    -- Tabela Produtos (Novo Módulo)
    CREATE TABLE produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        descricao TEXT,
        preco DECIMAL(10, 2) NOT NULL
    );
    ```

> **Nota:** O arquivo de conexão (`admin/config.inc.php`) deve ser verificado para garantir que os dados de acesso ao MySQL (usuário, senha, etc.) correspondam ao seu ambiente local.

### 3. Acesso ao Sistema

Assumindo que o projeto esteja no diretório `miniprojeto1` no seu servidor local:

* **Site Público (Front-end):**
    * Acesso via: `http://localhost/miniprojeto1/`
* **Painel Administrativo (Back-end):**
    * Acesso via: `http://localhost/miniprojeto1/admin/`
