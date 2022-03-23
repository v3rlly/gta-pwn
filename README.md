# Aplicações web vulneraveis para estudos

## Dependencias
- docker
- docker-compose

## Implantação e uso
```sh
git clone --depth 1 github.com/v3rlly/gta-pwn && cd gta-pwn;
docker-compose up -d;
```

## Aplicações
- sqli-01
    * Vulnerabilidade: SQL Injection (Método GET)
- sqli-02
    * Vulnerabilidade: SQL Injection (Método POST)


## Util (dev)
```sh
# limpa todos os containers/vNICS/volumes criados pelo docker
docker container prune -f; docker network prune -f; docker volume prune -f;

# mesmo que o anterior porem tambem limpa as imagens intermediarias usadas pelo docker
docker container prune -f; docker network prune -f; docker volume prune -f; docker image prune -f;

# reinicia o somente container `app`. (util para nao precisar reiniciar o mysql)
docker restart TEMPLATE; # trocar `TEMPLATE` pelo nome do container da Branch atual.
```
