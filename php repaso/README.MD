# Ejemplo PHP ,OOP, MVC

El mini proyecto de repaso , hice un proyecto semilla.
En este ejemplo construimos un marco de trabajo, donde tenemos control y conocimiento absoluto de lo que pasa por debajo.

Ahora el siguiente paso es limpiar la URL mediante .htacces y seguir dándole funcionalidades , añadiendo nuestras propias librerías para toda la clase de tareas o de terceros, si queremos un motor de plantillas poderoso como twing o incluso Active Record para darle más potencia.
La idea es ver un ejemplo de php utilizando OOP y MVC con un controlador frontal.


# Estructura de directorios

Explicaremos un poco como lo organizamos:
creamos 4 carpetas:

```Config```: donde van los ficheros de configuración de la BD, globales, etc.

```Controller```: como sabemos en MVC los controladores se encargan de recibir y filtrar datos que le llegan a las vistas.
Llamar a los modelos y pasar los datos que le llegan a las vistas.

```Core```: aquí colocamos las clases base de las que heredarán por ejemplo: los controllers y modelos y también podríamos poner librerías propias. Esto sería el núcleo.

```Model``` : aquí van los modelos , en OOP tenemos una clase por cada table o entidad de la BD (excepto las private) y estás clases servirán para crear objetos de ese tipo de entidad (ejemplo: crear un objeto user para crear usuarios en la BD).
También tendremos modelos de consulta de la BD que tendrán consultas más complejas que estén relacionadas a una o varias entidades.


```View``` : Las vistas donde se imprimen los datos que ve el usuario


-Index.php es el controller frontal por donde pasa todo de la aplicación







### Pasos :
* Crear ficheros de configuración, en el que irán la configuración de la base de datos
  y crearemos un fichero global.php donde irán constantes que luego nos servirán, para establecer controladores y acciones por defecto

* Crearemos las clases del núcleo.
* Crearemos la clase Connect que nos servirá para poder conectarnos a la base de datos también nos servirá para  conectar la base de datos a un constructor de consultas,
también crearemos el fichero EntityCore de está clase heredarán los modelos que representan entidades, en el constructor le pasamos el nombre de la tabla y tendremos tantos métodos como queramos , para ayudar a las peticiones de la BD, a través de los objetos que iremos creando.
*Lo bueno que tiene es que estos métodos pueden ser reutilizados en otras clases.

* Crearemos la clase ModelCore que heredará de la clase EntityCore y a su vez heredada por los modelos de consulta.

* ModelCore nos permite utilizar el constructor de consultas que hemos incluido y también los métodos de EntityCore, así como otros métodos que agreguemos dentro de la clase.


* Crearemos el ControllerCore de la cual heredarán los controladores, está clase carga EntityCore, ModelCore y todos los modelos que creemos dentro del directorio model.

* Crearemos la clase HelpView que puede contener diversos helpers (pequeños métodos que ayuden en pequeñas tareas dentro de la vista).

* Crearemos el fichero ControllerFront, que tiene las funciones que se encarga de cargar un controller u otro , en función de lo que se diga por la url.
* El ControllerFront se encarga de todos los ficheros de la aplicación  y por lo tanto es la única página que visita el usuario.

## Modelos y Objetos
Si queremos seguir el OOP teóricamente deberíamos tener una clase por cada table de la BD que haga referencia a un objeto. En este caso el objeto que creemos sería el User , con sus distintas columnas para establecer el valor de las propiedades y para conseguir el valor de cada atributo. Está clase hereda de EntityCore y tiene un método save para guardar el usuarios en la BD.


En la clase UserCore que ectiende de ModelCore pondremos las consultas completas en lugar de utilizar los métodos que tenemos en el modelo de entidad, aunque también podríamos acceder desde este modelo

## Controllers
Los crearemos dentro del directorio de Controllers, en este caso tenemos creado UserControlers.

## Vistas:
En este caso hicimos IndexView.

## Refactor
* El primer refactor va a ser modificar el ControllerCore para hacer que el fichero Connect esté disponible en todo el código.

* Ahora lo que vamos hacer es pasarle un parámetro al constructor EntityCore, le vamos a pasar directamente la conexión a la BD con el parámetro $adapter.

* También modificaremos el modelo base para pasarle la conexión.

    en las entidades recibiremos la conexión como parámetro.

* Creará una nueva entidad Producto para ver cómo se usa, ahora el constructor de cada uno de nuestros controladores tendremos que instanciar la conexión y utilizar la propiedad adapter para pasar la conexión a los modelos y entidades.

* En la vista podemos añadir para que nos muestre un listado de productos.



