version: "3.7"
services:
  apache:
    build:
      context: './apache/'
    depends_on:
      - php
      - mysql
    networks:
      - frontend
      - backend
    ports:
      - "6666:80"
    volumes:
      - ./public_html:/var/www/html/
    container_name: apache
  php:
    build: 
      context: './php/'
    networks:
      - backend
    volumes:
      - ./public_html:/var/www/html/
    container_name: php
  mysql:
    image: mysql
    command: --default-authentication-plugin=mysql_native_password 
    restart: always
    networks:
      - backend
    environment:
      MYSQL_ROOT_PASSWORD: "root"
      MYSQL_USER: "user"
      MYSQL_PASSWORD: "secret"
    container_name: mysql
networks:
  frontend:
  backend: