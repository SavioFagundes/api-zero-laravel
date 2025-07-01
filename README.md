# API Zero Laravel

Uma API REST básica desenvolvida em Laravel para demonstrar operações CRUD e funcionalidades essenciais de uma API moderna.

## 📋 Índice

- [Sobre o Projeto](#sobre-o-projeto)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Configuração](#configuração)
- [Uso](#uso)
- [Endpoints da API](#endpoints-da-api)
- [Exemplos de Requisições](#exemplos-de-requisições)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Contribuição](#contribuição)
- [Licença](#licença)

## 🎯 Sobre o Projeto

Este projeto é uma API REST básica construída com Laravel que fornece:

- ✅ Operações CRUD completas para usuários
- ✅ Validação de dados
- ✅ Respostas JSON padronizadas
- ✅ Estrutura MVC organizada
- ✅ Migrations e Models configurados

## 🚀 Tecnologias Utilizadas

- **PHP** 8.1+
- **Laravel** 10.x
- **MySQL** / **SQLite**
- **Composer**
- **Artisan CLI**

## 📋 Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina:

- [PHP](https://www.php.net/) (versão 8.1 ou superior)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou usar SQLite

## 🔧 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/api-zero-laravel.git
cd api-zero-laravel
```

2. Instale as dependências:
```bash
composer install
```

3. Copie o arquivo de configuração:
```bash
cp .env.example .env
```

4. Gere a chave da aplicação:
```bash
php artisan key:generate
```

## ⚙️ Configuração

### Configuração do Banco de Dados

#### Opção 1: SQLite (Recomendado para desenvolvimento)
```env
DB_CONNECTION=sqlite
# Comente as outras linhas DB_*
```

Crie o arquivo do banco:
```bash
touch database/database.sqlite
```

#### Opção 2: MySQL
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project
DB_USERNAME=root
DB_PASSWORD=sua_senha
```

### Execute as Migrações

```bash
php artisan migrate
```

### Limpe o Cache

```bash
php artisan config:clear
php artisan config:cache
```

## 🏃‍♂️ Uso

1. Inicie o servidor de desenvolvimento:
```bash
php artisan serve
```

2. A API estará disponível em: `http://localhost:8000`

3. Acesse a rota de teste: `http://localhost:8000/api/hello`

## 🛠 Endpoints da API

### Rota de Teste
- `GET /api/hello` - Retorna uma mensagem de teste

### Gerenciamento de Usuários
- `GET /api/users` - Lista todos os usuários
- `POST /api/users` - Cria um novo usuário
- `GET /api/users/{id}` - Retorna um usuário específico
- `PUT /api/users/{id}` - Atualiza um usuário
- `DELETE /api/users/{id}` - Remove um usuário

## 📝 Exemplos de Requisições

### 1. Teste da API
```http
GET /api/hello
```

**Resposta:**
```json
{
    "message": "Hello from API!",
    "status": "success",
    "timestamp": "2025-07-01T18:30:00.000000Z"
}
```

### 2. Listar Usuários
```http
GET /api/users
```

**Resposta:**
```json
{
    "data": [
        {
            "id": 1,
            "name": "João Silva",
            "email": "joao@example.com",
            "created_at": "2025-07-01T18:30:00.000000Z",
            "updated_at": "2025-07-01T18:30:00.000000Z"
        }
    ],
    "message": "Users retrieved successfully"
}
```

### 3. Criar Usuário
```http
POST /api/users
Content-Type: application/json

{
    "name": "Maria Santos",
    "email": "maria@example.com",
    "password": "123456789"
}
```

**Resposta:**
```json
{
    "data": {
        "id": 2,
        "name": "Maria Santos",
        "email": "maria@example.com",
        "created_at": "2025-07-01T18:35:00.000000Z",
        "updated_at": "2025-07-01T18:35:00.000000Z"
    },
    "message": "User created successfully"
}
```

### 4. Atualizar Usuário
```http
PUT /api/users/2
Content-Type: application/json

{
    "name": "Maria Santos Silva",
    "email": "maria.silva@example.com"
}
```

### 5. Deletar Usuário
```http
DELETE /api/users/2
```

**Resposta:**
```json
{
    "message": "User deleted successfully"
}
```

## 📁 Estrutura do Projeto

```
laravel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Api/
│   │       │   └── UserController.php
│   │       └── HelloWorldController.php
│   └── Models/
│       └── User.php
├── database/
│   └── migrations/
├── routes/
│   ├── api.php
│   └── web.php
├── .env
└── README.md
```

## 🎨 Funcionalidades

- **Validação de Dados**: Validação automática dos dados de entrada
- **Respostas Padronizadas**: Todas as respostas seguem um padrão JSON
- **Tratamento de Erros**: Respostas de erro adequadas
- **Operações CRUD**: Create, Read, Update, Delete para usuários
- **Estrutura MVC**: Organização clara do código

## 🧪 Testando a API

Você pode testar a API usando:

- **Postman**
- **Insomnia**
- **cURL**
- **VS Code REST Client**

### Exemplo com cURL:
```bash
# Testar rota hello
curl http://localhost:8000/api/hello

# Listar usuários
curl http://localhost:8000/api/users

# Criar usuário
curl -X POST http://localhost:8000/api/users \
  -H "Content-Type: application/json" \
  -d '{"name":"Teste","email":"teste@example.com","password":"12345678"}'
```

## 🤝 Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 🆘 Problemas Comuns

### Erro de Conexão com Banco
- Verifique as configurações no arquivo `.env`
- Use SQLite para desenvolvimento mais simples

### Erro de Chave da Aplicação
```bash
php artisan key:generate
```

### Limpar Cache
```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
```

## 📧 Contato

Sávio Fagundes Marques - [seu-email@example.com](mailto:saviofagundesmrq@gmail.com)

Link do Projeto: [https://github.com/seu-usuario/api-zero-laravel](https://github.com/SavioFagundes/api-zero-laravel)