# BriskMeal

## Установка

-   Склонировать репозиторий `git clone git@github.com:natalya-vd/BriskMeal.git`
-   В корне проекта создать файл `.env` (согласно примеру `.env.example`)
-   Поднять докер (первый раз может долго запускаться) `./vendor/bin/sail up -d`
-   Запустить миграции БД `./vendor/bin/sail artisan migrate`

## Команды

-   Поднять докер `./vendor/bin/sail up -d`
-   Остановить докер `./vendor/bin/sail down`
