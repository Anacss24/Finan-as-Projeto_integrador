


# 💻 Finanças  

Projeto integrador de um site de finanças


## 🚀 Pré-Requisitos 

Software necessários para a instalação:

<ul>
 <li>PHP 7.1 ou superior</li>
 <li>Composer</li>
 <li>MySql</li>
 <li>WampServer</li>
</ul>

## 🔧 Instalação

### Clonar o projeto
```
git clone https://github.com/Anacss24/Financas-Projeto_integrador.git 
```
### Entrar no diretório criado 
```
cd Sistema_de_Login
```
### Instalar as dependências do projeto
```
composer install
composer update
```

### Crie o Arquivo .env
```
cp .env.example .env
```
### Atualize as variáveis de ambiente do arquivo .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= ""
DB_USERNAME=root
DB_PASSWORD= ""
```

### Gerar a key do projeto Laravel
```
php artisan key:generate
```

### Migrar as tabelas 
```
php artisan migrate
```
### Instalar npm
```
npm install
npm run build
npm run dev
```

### Iniciar o servidor
```
php artisan serve
```
 
 








