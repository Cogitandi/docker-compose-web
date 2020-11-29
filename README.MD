# Apache / MySQL / PHP skonteryzowane za pomocą Dockera

Projekt pozwala na zbudowaniu usługi LAMP, składającej się z trzech oddzielnych serwerów- Apache, PHP oraz MySQL. <br />
PHP wraz MySQL znajdują się w jednej sieci - backend<br />
Apache ma dostęp do sieci backend oraz frontend<br />
Na serwerze apache skonfigurowane jest proxy, które współpracuje z serwerem PHP<br />

#### Po uruchomieniu aplikacji, możemy się komunikować z zewnątrz za pomocą portu 6666

<img src="https://github.com/Cogitandi/docker-compose-web/blob/main/result.png">

## Graficzna reprezentacja projektu

<img src="https://github.com/Cogitandi/docker-compose-web/blob/main/docker-compose.png">

## Instalacja

Należy pobrać pliki z repozytorium
```
$ git clone https://github.com/Cogitandi/docker-compose-web.git
```
Zmieniamy katalog roboczy
```
$ cd docker-compose-web
```
Przydzielamy uprawnienia do prawidłowego funkcjonowania aplikacji
```
$ chmod -R 755 public_html
```
Uruchamiamy
```
$ docker-compose up
```

### Wykorzystano
Graficzny schemat wygenerowany za pomocą narzędzia `docker-compose-viz`
```
docker container run --rm -it --name dcv -v $(pwd):/input pmsipilot/docker-compose-viz render -m image docker-compose.yml
```
