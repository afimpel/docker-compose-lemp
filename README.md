# LEMP stack built with Docker Compose

## docker / Nginx / MariaDB / Redis / PHP / Composer / Adminer
----

A basic LAMP stack environment built using Docker Compose. It consists of the following:

- PHP
- Nginx
- MariaDB
- Adminer
- Redis
- Composer

## Installation

- Clone this repository on your local computer
- configure .env as needed
- Run the `docker-compose up -d`.

```shell
git clone https://github.com/afimpel/docker-compose-lemp.git
cd docker-compose-lemp/
cp sample.env .env
// modify .env as needed
docker-compose up -d
// visit localhost
```
Your LAMP stack is now ready!! You can access it via `http://localhost`.

access to php composer:
 - Open terminal (ej: xterm, gnome-terminal)
 - paste, this command: `docker exec -it phpFPM8 bash`
 - exit: `exit` o **ctrl+d**



