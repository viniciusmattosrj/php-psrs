# PHP PSRs

 - <a href="https://www.youtube.com/playlist?list=PLVSNL1PHDWvRP0Udzif5LssOZZWUoAoq0">Curso PHP PSR's (Boas Práticas)</a> - Carlos Ferreira da Especializa TI


## Requerimentos

- Install <a href="https://docs.docker.com/install/">Docker</a>

- Install <a href="https://docs.docker.com/compose/install/">docker-compose</a>

- PHP >= 7.1

- Postgres >= 11 ou Mysql >= 5.7


## Instalação
Para o correto funcionamento dos serviços base na rede do docker, execute o comando para clonar o projeto:
```bash
git clone git@github.com:viniciusmattosrj/projetos.git
```

Para que o git não considere alterações de permissão como modificações a serem rastreadas, execute:
```
git config core.fileMode false
```

Para subir os containers docker execute:
```
docker-compose up -d
```

Navege até dentro da pasta projetos e realize o git clone do projeto:
```bash
cd projetos && git clone git@github.com:viniciusmattosrj/PHP-PSRs.git
```

Para que o git não considere alterações de permissão como modificações a serem rastreadas, execute:
```
git config core.fileMode false
```

Na pasta do projeto através do terminal execute:
```
cp -v ./docker-compose-example.php  ./docker-compose.php
```

Suba os containers docker executando:
```
docker-compose up -d
```

Em outra aba do terminal se conecte no container do php e inicie um servidor built in do PHP:
```
docker exec -it php bash
php -S 10.11.0.11:8008 -t .
```

No browser digite http://10.11.0.11:8008


## Contribuições
Caso identifique pontos
que possam ser aprimorados envie o seu PR. ;-)


## License
[MIT](https://choosealicense.com/licenses/mit/)
