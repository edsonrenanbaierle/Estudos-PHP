Comandos docker

(vale resaltar que os só ira subir ou descer os containers se você tiver na mesma pasta)
(vale resaltar também em caso de erro de digito do docker-compose.yml, você deve usar o down e up -d novamente)

docker-compose up -d -> comando para subir os container em modo de background

docker-compose down -> comando que ira eliminará os containers(cuidado com esse comando)

docker-compose stop -> parar os conteiners

docker-compose start -> startar os containers(não se usa o up -d dnv, pois ele recria os containers)

docker ps -> comando para ver os containers subidos

run -> comando para rodar o container

docker-compose exec php docker-php-ext-install pdo pdo_mysql mysqli -> comando para executa algo, no caso php é o nome do container que quero baixar e pdo ... nome da extensao

