# Arthur Lib Config Middleware


[![Packagist](https://img.shields.io/packagist/v/arthur/lib-config-middleware.svg?style=flat-square)](https://packagist.org/packages/arthur/lib-config-middleware)
[![License](https://img.shields.io/packagist/l/arthur/lib-config-middleware.svg?style=flat-square)](https://packagist.org/packages/arthur/lib-config-middleware)

A Laravel middleware library that applies configuration rules to all routes consuming the configuration module API.

---

## Descrição

Esta biblioteca oferece um middleware que pode ser utilizado para adicionar regras específicas de configuração para todas as rotas de um aplicativo que consomem o módulo de configuração da API. O middleware pode ser facilmente integrado aos projetos Laravel e permite o controle de acesso e status do tenant de acordo com as configurações no banco de dados.

---

## Requisitos

- Laravel 11.x
- PHP 8.1 ou superior
- [Stancl/Tenancy](https://github.com/stancl/tenancy) (versão 3.8 ou superior)

---

## Instalação

Adicione o pacote ao seu projeto Laravel via Composer:

```bash
composer require arthur/lib-config-middleware
