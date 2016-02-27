asignaciones
============

A Symfony project created on February 27, 2016, 3:59 pm.

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
