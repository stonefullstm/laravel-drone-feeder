# Drone Feeder

O objetivo do projeto é desenvolver uma API de um CRUD para gerenciar uma startup de entregas utilizando drones, utilizando princípios de Programação Orientada a Objetos (POO). Isso será feito utilizando o banco de dados MySQL através do framework Laravel/PHP, gerenciador de dependências Composer.

## Status do projeto

<p align="center">
<img src="https://img.shields.io/badge/STATUS-EM DESENVOLVIMENTO-blue"/>
</p>

## Para instalar e executar a aplicação

0. Pré-requisitos: ter o *PHP* e *Composer* instalados.
1. Inicialmente, clone o repositório com o comando `git clone git@github.com:stonefullstm/laravel-drone-feeder.git`
2. Na raiz do repositório clonado, execute `composer install` a fim de instalar as dependências
3. Utilize o arquivo `.env.example` para configurar o seu próprio `.env` com as configurações necessárias, principalmente `APP_KEY`, `JWT_SECRET` e as configurações do banco de dados
4. Execute `php artisan serve` para iniciar a aplicação
5. A aplicação deve executar no navegador em `http://localhost:8000/`

## Funcionalidades

- Endpoint para criar um drone (POST `/api/drones`)
- Endpoints para ler todos os drones (GET `/api/drones`) e para ler um único drone pelo id (GET `/api/drones/id`)
- Endpoint para remover um drone pelo id (DELETE `/api/drones/id`)
- Endpoint para atualizar os dados de um drone pelo id (PUT `/api/drones/id`)
- Endpoint para inserir uma entrega em um drone existente (POST `/api/drones/id/entrega`)
- A documentação completa da API pode ser acessada em `http://localhost:8000/api/documentation`

## Tecnologias utilizadas
 
<div display="inline-block">
<img width="" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
<img width="" src="https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=Composer&logoColor=white">
<img width="" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
<img width="" src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white">
<img width="" src="https://img.shields.io/badge/Swagger-85EA2D?style=for-the-badge&logo=Swagger&logoColor=white">
</div>