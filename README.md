# BriskMeal

## Установка

-   Склонировать репозиторий `git clone git@github.com:natalya-vd/BriskMeal.git`
-   В корне проекта создать файл `.env` (согласно примеру `.env.example`). Заполнить своими данными.
-   Далее продолжить установку либо через OpenServer либо через docker

---

### Установка через OpenServer:

-   Скачать Open Server Panel
-   Установить зависимости бэка: `composer install`
-   Сгенерировать APP_KEY: `php artisan key:generate`
-   Установить зависимости фронта: `npm i`
-   Создать локально БД и засидить данными

### Команды при работе через OpenServer

-   Сбросить БД и запустить сидеры: `php artisan migrate:fresh --seed`
-   Запустить миграции `php artisan migrate`

---

### Установка через docker:

-   Поднять докер `docker-compose up -d`
-   Установить папку vendor `docker exec -it brisk-meal-app composer install`
-   Опустить докер `docker-compose down`
-   Поднять докер `./vendor/bin/sail up -d`
-   Сгенерировать APP_KEY: `./vendor/bin/sail artisan key:generate`

### Команды при работе через docker:

-   Поднять докер `./vendor/bin/sail up -d`
-   Остановить докер `./vendor/bin/sail down`
-   Сбросить БД и запустить сидеры: `./vendor/bin/sail artisan migrate:fresh --seed`
-   Запустить миграции БД `./vendor/bin/sail artisan migrate`
