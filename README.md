# 📦 Trabalho PHP

Sistema web de cadastro e busca de dados com separação entre camada de apresentação e camada de acesso ao banco de dados.

## 🛠️ Tecnologias

- PHP
- MySQL
- HTML5
- MySQLi

## 📋 Funcionalidades

- Cadastro de registros no banco de dados via formulário
- Busca de dados por nome/campo
- Separação entre lógica de apresentação (`buscar.php`) e acesso ao banco (`buscarDados.php`, `cadastraBanco.php`)

## 🗄️ Banco de Dados

- **Banco:** `escola_db` (ou conforme configurado)
- Conexão via MySQLi com tratamento de erros

## 📁 Estrutura

```
trabalho-php/
├── index.php         # Página inicial
├── buscar.php        # Interface de busca
├── buscarDados.php   # Lógica de consulta ao banco
└── cadastraBanco.php # Persistência de novos registros
```

## ▶️ Como executar

1. Importe o banco de dados no MySQL
2. Configure as credenciais de conexão nos arquivos PHP
3. Sirva o projeto em um servidor local (XAMPP, Laragon, etc.)
4. Acesse `index.php` no navegador

## 👤 Autor

Mauá Giunco — [github.com/porteiro1](https://github.com/porteiro1)
