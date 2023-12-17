# Deployment Website Edugot ke Dalam Kontainer

## Instalasi
1. Docker Engine

## Struktur Folder
 ├── Deployment
    ├── src
      ... (kode laravel)
    ├── php
      local.ini
    └── mysql
      my.cnf
    ├── nginx
Dockerfile
docker-compose.yml

## Cara Penggunaan
1. docker compose build
2. docker compose up -d
3. docker-compose exec  php /bin/bash
   3.1  composer install / update
   3.2 cp .env.example .env
        ubah pada file .env dibawah ini:
        DB_CONNECTION=mysql
        DB_HOST=db
        DB_PORT=3306
        DB_DATABASE=edugot_db
        DB_USERNAME=root
        DB_PASSWORD=admin
       
    3.4 php artisan key:generate
    3.5 php artisan storage:link
    3.5 php artisan cache:clear
4. untuk menjalankan website pada browser:
       http://localhost:1011
