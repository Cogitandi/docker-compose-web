# Aplikacja kontenerowa docker-compose

Aplikacja stworzona w celach badawczych 

## Po uruchomieniu aplikacji, możemy się komunikować z serwerem za pomocą portu 6666

<img src="https://github.com/Cogitandi/docker-compose-web/result.png">

## Graficzna reprezentacja projektu

<img src="https://github.com/Cogitandi/docker-compose-web/docker-compose.png">

## Instalacja

Należy pobrać pliki z repozytorium
```
$ curl -L https://github.com/Cogitandi/docker-compose-web/archive/main.zip -o zadanie.zip
```
Zmieniamy katalog roboczy
```
$ cd zadanie
```
Przydzielamy uprawnienia do prawidłowego funkcjonowania
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