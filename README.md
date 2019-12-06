# Examen-Hipermedial
 Documento SRS

## Venta de libros


Solución para la venta de libros 
Especificación de Requerimientos
Versión 1.1


Historial de Revisiones


![image](https://user-images.githubusercontent.com/33675679/70324342-3fa27e80-17fd-11ea-91e7-89a7031c4c76.png)

			
 
Tabla de Contenido
1.    Introducción	

  1.1   Propósito	

  1.2   Alcance	

  1.3 Definiciones, siglas y abreviaturas	

  1.4     Referencias:

2.    Descripción general

  2.1     Perspectiva del producto

  2.1.2   Interfaces de hardware	

  2.2     Funciones del producto

  2.3   Características de usuario

  2.4 Restricciones	

  2.5 Documentación de usuario	

3. Interfaces de hardware	

  3.2 Requerimientos Funcionales	

  3.3 Restricciones de diseño	

  3.4 Requerimientos No Funcionales	
  
    3.4.2 Atributos del Sistema de Software	
    
      3.4.2.1 Fiabilidad

      3.4.2.2 Seguridad	

      3.4.2.3 Mantenibilidad	

4. Diagrama Entidad Relación

5. Diagramas de caso de uso

6. Entregable

7. Interfaz			

 
### 1.	Introducción 

Una librería virtual permite ofrecer a toda persona que busca satisfacer sus inquietudes intelectuales, la posibilidad de conocer interesantes materiales bibliográficos distribuidos en categorías y temas. Por tanto, se necesita de un software que abarque con estas necesidades, estas necesidades están presentes en este documento, el cual presenta los requerimientos de Software necesarios para el desarrollo de un Sistema de Venta de Libros (Librería virtual).

### 1.1	Propósito

La finalidad del documento es definir y describir los requerimientos de operaciones, desempeño y calidad del software del sistema para la venta de libros.

Este documento está dirigido a todos los involucrados en el desarrollo del proyecto, sirviendo como apoyo para dejar en claro los requerimientos funcionales, no funcionales y las diferentes condiciones que regirán el proyecto en todas las etapas de su desarrollo. Esta especificación permite definir un marco de trabajo para la realización del sistema propuesto. 

### 1.2	Alcance
En este documento se definen los requerimientos no funcionales del sistema, como usabilidad, confiabilidad, desempeño, entre otros, al igual que los requerimientos funcionales del mismo, necesarios para los usuarios.
### 1.3	Definiciones, siglas y abreviaturas

-	Requerimientos funcionales: describen las capacidades o funciones que el sistema será capaz de realizar. 

-	Requerimientos no funcionales: restricciones o características que de una u otra forma puedan limitar el sistema, como, por ejemplo, rendimiento, interfaces de usuario, fiabilidad, mantenimiento, seguridad, portabilidad, estándares, etc.

-	Documento: Es el relato que describe un proceso, un procedimiento, un manual, un formato sin diligenciar entre otros. 

-	Registro: Evidencia objetiva de que algo se está haciendo, lo cual no puede ser cambiado o actualizado una vez se realice. 

### 1.4	Referencias:
	Unidad_01_01_REQ_Intro

### 2.	Descripción general
### 2.1 Perspectiva del producto

Este sistema está enmarcado en un ambiente altamente competitivo, donde la funcionabilidad es muy determinante y los datos al igual a almacenas son de vital importancia para evaluar a sus clientes.

### 2.1.2 Interfaces de hardware

El usuario busca tener informacion de sus clientes consultando la información de la base de datos y realizando una presentación adecuada en una interfaz gráfica. Con una arquitectura en 3 capas: 

                  
-	Base de Datos: Repositorio de información, la cual deberá tener capacidad suficiente para albergar la información de todos los clientes con soporte a aplicativos de:
-	Búsqueda de información.
-	Acceso remoto a bases de datos.
-	Distribución multimedia.
-	Almacenamiento información
-	Eliminar información de base de datos
-	Actualización de Datos

### 2.2 Funciones del producto

El diseño del sistema que se presenta con este proyecto pretende establecer aquellas características fundamentales que debe tener el sistema para la Venta de libros que facilitan al usuario confiar en la empresa y la calidad de su servicio.

### 2.3 Características de usuario

Los usuarios del sistema son los responsables de las diferentes áreas como se especificó en el documento de visión.
-	Administrador del sistema: Es el encargado de dar soporte al sistema de gestión del conocimiento, así como apoyar a los demás usuarios en el uso del mismo.


### 2.4 Restricciones

![image](https://user-images.githubusercontent.com/33675679/70324436-75dffe00-17fd-11ea-833e-90e89980942a.png)

### 2.5 Documentación de usuario
En el desarrollo del proyecto del software, un requerimiento básico que se documenten cada una de las etapas del ciclo de vida del software. Para la empresa es necesario contar con los documentos de análisis, diseño, implementación, pruebas y entrega final. Estos documentos deben estar realizados bajo los parámetros de los estándares para construcción de software. Para efectos de mantenibilidad y escalabilidad los documentos proporcionan una base sobre la cual es posible realizar estos procesos. 


### 3 Interfaces de hardware	
Se tiene en cuenta la necesidad de que la información de la base de datos sea consistente y confiable. 

Es crucial tener un diseño eficaz de la base de datos para garantizar un tiempo de respuesta rápido por parte del empleado. Para diseñar una base de datos que sea adecuada, es necesario distribuir apropiadamente los datos entre la base de datos, crear índices suficientes para optimizar las consultas más frecuentes sin que se utilice una cantidad de espacio de disco excesiva, normalizar de forma razonable las tablas que no requieran combinaciones excesivas para responder a las consultas, y usar procedimientos almacenados para llevar a cabo operaciones de base de datos frecuentes o complejas.


### 3.2 Requerimientos Funcionales

En esta sección se busca describir los diferentes requerimientos funcionales de una manera fácil de entender para los interesados o Stakeholders del proyecto de software. 

-	El sistema de venta de libros deberá poder almacenar usuario con sus respectivos datos.
Requerimiento: Funcional

-	El sistema deberá mostrar una variedad de productos para todos los usuarios independientemente de que estas tengan una suscripción en el sistema de venta de libros.
Requerimiento: Funcional

-	El sistema deberá contar con una fácil navegabilidad para el usuario, es decir el usuario podrá intuitivamente manejar el sistema para explorar como también para realizar una compra.
Requerimiento: Funcional

-	El sistema deberá realizar el cobro de un producto mediante el ingreso de una tarjeta de crédito o débito.
Requerimiento: Funcional

-	El sistema deberá tener una sección de búsqueda.
Requerimiento: Funcional

-	El sistema deberá tener una sección de navegabilidad horizontal desplegable.
Requerimiento: Funcional

-	El sistema deberá generar un informe sobre las ventas realizadas por cada categoría existente. 
Requerimiento: Funcional

-	Cada usuario deberá tener un carrito donde se podrá almacenar productos que posteriormente pueda comprar.
Requerimiento: Funcional
### 3.3 Restricciones de diseño
El sistema debe impedir que el usuario índice más de una sesión a la vez. 

### 3.4 Requerimientos No Funcionales
-	El sistema ofrecerá disponibilidad de los productos para toda la comunidad.
Requerimiento: No funcional

-	El sistema deberá presentar la información de los productos de manera categórica, es decir deberá ser agrupada en secciones específicas.
Requerimiento: No funcional

-	La base de datos utilizada deberá ser de bajo costo, es decir los servicios y mantenimientos no deberán ser tan costosos. 
Requerimiento: No funcional

-	Los usuarios nada más podrán realizar una comprar una vez se hayan subscrito a la página.
Requerimiento:

-	Una vez realizada una compra el sistema deberá generar una factura electrónica que será enviada al correo electrónico vinculado.
Requerimiento: No funcional
 
### 3.4.2 Atributos del Sistema de Software

### 3.4.2.1 Fiabilidad

Debe ser un sistema supremamente confiable, ya que algún fallo, podría causar un error en el flujo de la información, muy perjudicial para la empresa y para el sistema de gestión de la venta de libros. Se garantiza la integridad de la información en la inserción y modificación de datos. 
	 

### 3.4.2.2 Seguridad

Se deben validar los clientes que ingresan al sistema, manejar métodos de encriptación de información, que proteja tanto la identidad como los recursos del cliente. Así como asegurar que cada usuario entre según un perfil de permisos establecido.		

### 3.4.2.3 Mantenibilidad

El software tendrá mantenimientos preventivos cada cierto período de tiempo, con el fin de asegurar que esté funcionando en forma correcta y ofreciendo los servicios requeridos de manera óptima. 

### 4.	Diagrama Entidad Relación

Empezaremos por modelar un diagrama de entidad y relación el cual nos ayudara al manejo de nuestros datos en una base, para este caso seria una base de datos MySQL.


 
### 5.	Diagrama de caso de Uso
Iniciar sesión:
El caso de uso de iniciar sesión refiere a que un usuario podrá acceder a la pagina como cliente con cuenta propia, si en un caso ya tenga su cuenta, podrá iniciar sesión ingresando sus credenciales, pero en el caso de ser nuevo, deberá registrarse llenando todos lo datos correspondientes para poder acceder a su cuenta nueva.

![image](https://user-images.githubusercontent.com/33675679/70324535-bccdf380-17fd-11ea-854c-4a025937b441.png)

![image](https://user-images.githubusercontent.com/33675679/70324560-d2dbb400-17fd-11ea-9acd-4dabbf5c30d9.png)

 
Buscar libro:
Este caso de uso permite que si un usuario que este utilizando el sistema quiera buscar algun libro en especifico, pueda hacerlo rapidamente, lo primero qye debe hacer es dar click en buscar libro, luego debera ingresar el nombre, codigo o ISBN del libro para buscar, y en caso de que lo quiera buscar por categoria, se pedira ingresar el nombre de la categoria deseada.

![image](https://user-images.githubusercontent.com/33675679/70324607-eedf5580-17fd-11ea-9e71-a32a6218c5f6.png)

![image](https://user-images.githubusercontent.com/33675679/70324646-0c142400-17fe-11ea-968d-1f0b09d8ccb7.png)


 
Realizar pedido:
Este caso de uso muestra la forma en la cual un usuario ya registrado puede realizar un pedido, al ingresar al carrito puede ver la lista de deseos o pedidos sin comfirmar, luego, podra seleccionar su pedido, luego de eso, el sistema le mostrara la informacion personal del usuario para confirmar sus datos, si el usuario lo desea modificar lo podra hacer, y si no, pues tambien funciona, una vez ya confirmado los datos, el sistema validara esos datos, luego pedira ingresar la tarjeta como forma de pago, una vez verificada los datos de la tarjeta, el sistema mostrara los detalles de su pedido, si todo es correcto, lo ultimo que queda es seleccionar en confirmar pedido.

![image](https://user-images.githubusercontent.com/33675679/70324706-32d25a80-17fe-11ea-8c98-0544bc9face4.png)

![image](https://user-images.githubusercontent.com/33675679/70324745-4f6e9280-17fe-11ea-8682-d2a49eae56c1.png)
 

Agregar al carrito:
Este caso de uso es muy simple, ya que enlaza dos casos de uso mas, el primero es buscar un libro, si no ha iniciado sesion si puede buscar un libro de forma libro, pero para agregar al carrito es necesario iniciar sesion, una vez hecho esto, ya puede agregar su producto a su carrito de compras.

![image](https://user-images.githubusercontent.com/33675679/70325017-fd7a3c80-17fe-11ea-8021-7c7ad6acecec.png)

![image](https://user-images.githubusercontent.com/33675679/70325057-14209380-17ff-11ea-8860-99658753aa8d.png)


Agregar libro
El administrador podra ingresar un nuevo libro, para ello debera ingresar los campos solisitados y posterior mente a guardarlo en la base de datos una vez aya pasado el filtro del sistema de la librería.

![image](https://user-images.githubusercontent.com/33675679/70325119-40d4ab00-17ff-11ea-8a78-55008a807d0d.png)

![image](https://user-images.githubusercontent.com/33675679/70325182-7083b300-17ff-11ea-8cbf-d7f49a801896.png)


De la misma manera se podrá modificar un libro.

![image](https://user-images.githubusercontent.com/33675679/70325231-8ee9ae80-17ff-11ea-8d35-c0ce5f49099f.png)
 

Borra libro
El administrador podrá borrar un libro asignándole un valor predeterminado el cual lo identificara como eliminado, sin embargo dicha tupla no será eliminada de la base de datos.


![image](https://user-images.githubusercontent.com/33675679/70325429-f273dc00-17ff-11ea-9d36-f03cb45081c2.png)
 
![image](https://user-images.githubusercontent.com/33675679/70325304-afb20400-17ff-11ea-8f82-157841cdda52.png)


Administrador

![image](https://user-images.githubusercontent.com/33675679/70325481-133c3180-1800-11ea-99c3-76902c92d4ba.png)
 
Cliente

![image](https://user-images.githubusercontent.com/33675679/70325544-37980e00-1800-11ea-8174-cc737f94ed5d.png)

 
6.	Entregable
La finalidad de un entregable consiste en mostrar al steckholder un boseto de como sera el sistema de venta de libros para la aprobacion y posteriormente el desarroyo del programa.

-	Logeo: el usuario debera realizar una validacion de cuenta para poder realizar una accion en la pagina web sin embargo esto no le impide navegar por la pagina.

![image](https://user-images.githubusercontent.com/33675679/70325593-572f3680-1800-11ea-8c8a-56296331c560.png)


-	Index: Esta página será el rostro de nuestro sistema de venta de libro, esta página deberá poder ser visualizada por cualquier usuario.

![index](https://user-images.githubusercontent.com/33675679/70325692-92ca0080-1800-11ea-8c59-0c69fe664277.jpg)
 
-	Facturas: Esta sección mostrara únicamente al administrador las facturas realizadas por la compra de los libros, 
 
![facturas](https://user-images.githubusercontent.com/33675679/70326066-927e3500-1801-11ea-93a3-abeb4ea10c7f.jpg)

-	Pedidos: Esta sección mostrara únicamente al administrador los pedidos realizados por los clientes, 

![pedidos](https://user-images.githubusercontent.com/33675679/70326071-9316cb80-1801-11ea-8f13-c1f4749d000e.jpg)


-	Productos: Esta sección mostrara únicamente al administrador los productos almacenados en la base de datos.

 ![productos](https://user-images.githubusercontent.com/33675679/70326072-9316cb80-1801-11ea-8cb4-c24fe6721a7c.jpg)

-	Usuarios: Esta sección mostrara únicamente al administrador los usuarios almacenados en la base de datos pudiéndoles modificar.

 ![usuarios](https://user-images.githubusercontent.com/33675679/70326075-9316cb80-1801-11ea-9269-34b763a6cc9d.jpg)


-	Index_admin: Esta sección será una página únicamente para los administradores.
![indexadmin](https://user-images.githubusercontent.com/33675679/70326068-927e3500-1801-11ea-8038-4ebada408172.jpg)

 
-	Crear_producto: Esta sección será una página únicamente para los administradores los cuales le permitirán agregar productos al sistema.
 
![crearproducto](https://user-images.githubusercontent.com/33675679/70326061-91e59e80-1801-11ea-995e-0ef9ea6629f1.jpg)


-	Estado_producto: Esta sección será una página únicamente para los administradores los cuales le permitirán agregar el estado de un pedido.
![estadoproducto](https://user-images.githubusercontent.com/33675679/70326065-91e59e80-1801-11ea-9379-a9dae1919a51.jpg)

 
-	Carrito: Esta sección mostrara a los clientes los productos seleccionador y el valor a pagar.

![carrito](https://user-images.githubusercontent.com/33675679/70326059-914d0800-1801-11ea-8622-96c94ba49356.jpg)

 
-	Quienes somos: Esta sección mostrara a los clientes la visión y misión de nuestro proyecto.

 ![qienessomos](https://user-images.githubusercontent.com/33675679/70326074-9316cb80-1801-11ea-882b-7c5b265c9dfb.jpg)

-	Crear usuario: Esta sección se mostrara a un usuario no registrado, este servirá para realizar acciones en la página web.
 
![crearusuario](https://user-images.githubusercontent.com/33675679/70326484-ad9d7480-1802-11ea-9b10-2c83f01383fb.jpg)

-	Categorías : Esta sección se mostrará a un usuario no registrado, este servirá para buscar libros según las categorías.

![categorias](https://user-images.githubusercontent.com/33675679/70326060-91e59e80-1801-11ea-81a5-250b9b1ba853.jpg)

 
-	Libro: Esta sección se mostrará a un usuario no registrado, este servirá para mostrar la información de los libros.
 
![libro](https://user-images.githubusercontent.com/33675679/70326069-927e3500-1801-11ea-9d0c-6535f24cca82.jpg)

-	Libros: Esta sección se mostrará a un usuario no registrado, este servirá para mostrar libros según las categorías seleccionada.

![libros](https://user-images.githubusercontent.com/33675679/70326070-927e3500-1801-11ea-836f-45955172027b.jpg)

 
7.	Interfaz
Una vez utilizado los métodos de adquisición de requerimientos para el buen modelado del sistema aplicamos modelos con una estructura precisa, cubriendo las decisiones de análisis, diseño e implementación del sistema mediante los diagramas de caso de uso y de entidad relación.

-Pagina 

Esta es nuestra pagina index en donde puede acceder cualquier usuario este o no registrado podra ver los productos de nuestra pagina pero no podra realizar una compra o agregar el producto al carrito, para esto debe registrarse o logearse según sea el caso.

![Captura14](https://user-images.githubusercontent.com/33675679/70326642-0a992a80-1803-11ea-9621-d9b9234e603b.JPG)
![Captura15](https://user-images.githubusercontent.com/33675679/70326643-0a992a80-1803-11ea-9021-000ccfde6e91.JPG)
![Captura16](https://user-images.githubusercontent.com/33675679/70326644-0a992a80-1803-11ea-9a97-1d5a2918d04c.JPG)
![Captura](https://user-images.githubusercontent.com/33675679/70326645-0b31c100-1803-11ea-827d-8b8409a11afd.JPG)
![Captura1](https://user-images.githubusercontent.com/33675679/70326647-0b31c100-1803-11ea-8dd0-03a58ab8357f.JPG)
![Captura6](https://user-images.githubusercontent.com/33675679/70326653-0bca5780-1803-11ea-93fb-1c2cf1632ef1.JPG)



-Pagina index del usuario administrador
 
 ![Captura2](https://user-images.githubusercontent.com/33675679/70326648-0b31c100-1803-11ea-9663-863be3a5575a.JPG)


Esta es la pagina que se mostrara al usuario administrador el que puede gestionar a los usarios, libros, pedidos y facturas de los clientes registrados en nuestra pagina este usuario es creado directamente desde la base de datos.

8.	Requisitos dados para el desarrollo del proyecto

Iniciar Sesión. – El sistema debe contar con seguridad con base al uso de roles para ingresar al sistema. Los roles a utilizar deben ser al menos dos: usuario y administrador.

![Captura3](https://user-images.githubusercontent.com/33675679/70326649-0b31c100-1803-11ea-9856-1ed113f95866.JPG)


Al momento de iniciar sesión nos aparece la siguiente pagina esta nos sirve ya sea para le logeo de un usuario normal o de un usuario administrador.




Gestión de usuarios.- El administrador del sistema web puede gestionar los datos de los clientes registrados.

![Captura4](https://user-images.githubusercontent.com/33675679/70326651-0bca5780-1803-11ea-8218-a646f18ed5a6.JPG)

En esta pagina el administrador puede modicar los datos de los usuarios registrados estos a su vez se modificaran en las paginas del usuario normal correspondiente.

Gestión de productos. - El administrador del sistema web puede gestionar los datos de los productos (imagen, nombre, descripción, precio, stock, entre otros). Además, el administrador del sistema podrá ver y eliminar calificaciones y comentarios ingresados por los usuarios relacionadas a cada producto.

![Captura5](https://user-images.githubusercontent.com/33675679/70326652-0bca5780-1803-11ea-8f8e-8a7e99fbe922.JPG)


El administrador puede modificar los libros que estan en la base pero tambien tiene en el menu como se puede observar que puede agregar un libro, autor, genero y estos cambiaran la informacion que se presenta en la pagina principal.

Gestión de pedidos. - El administrador del sistema podrá revisar todos los pedidos recibidos a través de la plataforma web. Además, podrá cambiar el estado de cada pedido, teniendo cinco estados (C = Creado, A = Aceptado, E = En camino, F = Finalizado, y R = Rechazado). De igual manera, el administrador podrá generar la ruta de envío del pedido usando Google Maps con base a geo-referencias.

 ![image](https://user-images.githubusercontent.com/33675679/70326910-a5920480-1803-11ea-9e55-ae1f15ed4690.png)


Gestión de facturas. - El administrador del sistema podrá revisar todas las facturas generadas por el sistema web. Las facturas podrán ser anuladas únicamente por el administrador del sistema.

![image](https://user-images.githubusercontent.com/33675679/70327007-e853dc80-1803-11ea-81fa-f1ef373a0825.png)


SECCION PUBLICA

Inicio

![Captura7](https://user-images.githubusercontent.com/33675679/70326654-0bca5780-1803-11ea-8bd1-f66220e83cd4.jpg)
![Captura8](https://user-images.githubusercontent.com/33675679/70326655-0c62ee00-1803-11ea-8e3a-0c87471cc8f8.jpg)


La sección del incio de la parte publica esta conformada por un menú, el cual nos permite navegar en nuestra página, también hay una imagen de portada. Luego hay una sección que muestra los últimos libros agregados, y, finalmente en el footer, nuestros datos de contactos y el mapa de ubicación de la librería.



Quienes somos

![Captura9](https://user-images.githubusercontent.com/33675679/70326656-0c62ee00-1803-11ea-9049-a027275659c8.jpg)

La siguiente pagina es de quines somos, aquí se muestra la informacion de nuestra libreria,  la informacion general, asi como tambien la vision y vision de nosotros como una empresa.
 

Contacto

![Captura10](https://user-images.githubusercontent.com/33675679/70326657-0c62ee00-1803-11ea-9039-32d06439aea5.jpg)

En la pagina de incio hay una seccion de contacto, en donde se muestra la informacion de la ubicación, correo electronico y tambien un numero telefonico de contacto.


 

Producto

![Captura11](https://user-images.githubusercontent.com/33675679/70326659-0c62ee00-1803-11ea-8db9-52e109ef91e3.jpg)
![Captura12](https://user-images.githubusercontent.com/33675679/70326640-0a992a80-1803-11ea-85fe-435aa6f5b5e0.jpg)

En la pagina de producto, ya se muestra un producto ya general, con sus caracteristicas, imagen, resumen, aquí hay un boton para agregar un producto al carrito, y finalmente su puede visualizar los comentarios agregados.
 
 

Registro

La pagina de registro muestra un formulario el cual un usuario anonimo puede ingresar sus datos para crear una cuenta y asi poder realizar una compra de un producto.
 
![Captura13](https://user-images.githubusercontent.com/33675679/70326641-0a992a80-1803-11ea-83e4-d806db009205.jpg)


Sección privada (rol de usuario)
Gestión de pedidos.- los usuarios podrán agregar, modificar, eliminar productos a su pedido (carrito de compras) únicamente cuando hayan iniciado sesión con el rol de usuario registrado. Además, los usuarios registrados podrán revisar el estado de todos sus pedidos activos. Por último, se tendrá un historial de todos los pedidos finalizados



 
El usuario que se a logeado puede ver sus pedidos con sus estados correspondientes


Gestión de calificaciones.- los usuarios registrados podrán calificar y agregar un comentario a cada producto del catalogo que dispone la empresa.

 ![image](https://user-images.githubusercontent.com/33675679/70327632-3ae1c880-1805-11ea-9543-364544ee2bf1.png)


Nos muestra el producto en si en donde podemos calificar y agregar un comentario esto se guardara y se mandara a guardar en la base, asi también se ve su precio, categoría y su autor.



Gestión de cuenta.- cada usuario registrado podrá gestionar sus datos de cuenta, nombre, dirección, teléfono, contraseña entre otros datos.

![image](https://user-images.githubusercontent.com/33675679/70327681-5a78f100-1805-11ea-9250-1d5286d6644c.png)
 

En esta parte el usuario puede modificar sus datos personales como nombre apellido entre otros y este se guardará.

