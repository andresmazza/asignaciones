asignaciones
============

A Symfony project created on February 27, 2016, 3:59 pm.

Symfony
Linux and Mac OS X Systems
Open your command console and execute the following commands:
1 $ sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
2 $ sudo chmod a+x /usr/local/bin/symfony


Creating the Symfony Application
Once the Symfony Installer is available, create your first Symfony application with the new command:( Linux, Mac OS X)
 $ symfony new <project_name> <symfony_version>


Run
php app/console server:run
Stop
php app/console server:stop

3. Using ACL on a system that does not support chmod +a
Some systems don't support chmod +a, but do support another utility called setfacl. You may
need to enable ACL support6 on your partition and install setfacl before using it (as is the case with
Ubuntu). This uses a command to try to determine your web server user and set it as HTTPDUSER:
g 3-13
  HTTPDUSER=`ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx'
 | grep -v root | head -1 | cut -d\ -f1`
3 $ sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs
$ sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs


$ php app/console security:check
--------------------

Busca las diferencias con mis schemmas y la base actual
# php app/console doctrine:schema:update --dump-sql --em=dynamic



https://asignaciones-andresmazza.c9users.io/phpmyadmin/

https://asignaciones-andresmazza.c9users.io/web/app_dev.php


<<<<<<< HEAD
=======
Creacion de la entidad
======================

# php app/console doctrine:generate:entity

--->voy agregando los campos y sus tipos

 una vez generada la entidad cambio en el annotation a que tabla hace referencia

 /* @ORM\Table(name="users")

retoco algunos annotations, por ejemplo en role.Agrego un Enum

* @ORM\Column(name="role", type="string", columnDefinition="ENUM('ROLE_ADMIN','ROLE_USER')", length=50)

Luego con la entidad ya creada genero la tabla mysql

# php app/console doctrine:schema:update --force

Forms
=====
Crear un formulario de una Entidad
php app/console doctrine:generate:form AndresMazzaUserBundle:User
  me genera el file src/AndresMazza/UserBundle/Form/UserType.php
>>>>>>> 927e629ea867f4f88cffb15fc1fa0a156a89dbde
