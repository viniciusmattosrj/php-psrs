# Instalação

Faça um git clone do projeto php-psrs:

```
git clone git@github.com:viniciusmattosrj/php-psrs.git
```

## Encoding

Todos os arquivos estão em **UTF-8**.

#### Importante para que o git não considere alterações de permissão como modificações a serem rastreadas

```
git config core.fileMode false
```

#### Arquivos de Configuração

```
cp -v docker-compose.yml.example docker-compose.yml

cp -v .env.example .env
```

&nbsp;

#### Configurações do .env:

|     Valor     | O que é?                              |   Exemplos de Parâmetros    |
| :-----------: | ------------------------------------- | :-------------------------: |
| DB_CONNECTION | Nome adapter da base de dados         |         ex: 'mysql'         |
|    DB_HOST    | Ip ou nome contaienr da base de dados | ex: '10.11.0.11' ou 'mysql' |
|    DB_PORT    | Port de conexão com base de dados     |         ex: '3306'          |
|  DB_DATABASE  | Nome da base dados                    |       ex: 'php_ajax'        |
|  DB_USERNAME  | Usuário de conexão com base de dados  |         ex: 'root'          |
|  DB_PASSWORD  | Senha de conexão com base de dados    |       ex: '123Mudar'        |

&nbsp;

#### Subir o container

Executar o seguinte comando no diretório do **php-psrs**:

```
docker-compose up -d
```

Ele fará com que os container específico do php-psrs sejam iniciado.

Execução fora container:

```
docker-compose exec php Makefile"
```

Execução dentro container:

```
docker-compose exec php bash -c "php -S 10.11.0.11:8008 -t public"
```

#### Instalando as dependências via composer

No projeto **php-psrs** execute o comando abaixo:

```
docker run --rm -v $(pwd):/app -v ~/.ssh:/root/.ssh composer install -vvv
```

#### Somente em ambiente de dev deve ser concedido a permissão nas pastas:

```
sudo chmod 777 -R keys vendor
```

#### Usando o php-psrs

Adicionar o ip do php-psrs no arquivo **/etc/hosts**:

```
10.11.0.11  php-psrs
```

O IP está definido no **docker-compose.yml** do php-psrs.

Se conectar, pelo navegador a:

```
http://php-psrs
```

#### Executar os testes

Se conecte ao container **php-psrs** e execute o seguinte comando:

```
./vendor/bin/phpunit
```

Para rodar o teste em classes/métodos específicos:

```
./vendor/bin/phpunit --filter testNomeDaClasse
```
