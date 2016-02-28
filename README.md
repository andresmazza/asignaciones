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


