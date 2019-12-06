# Examen-Hipermedial
 Documento SRS

## Venta de libros


Solución para la venta de libros 
Especificación de Requerimientos
Versión 1.1


Historial de Revisiones

Fecha	Versión	Descripción	Autores
16/11/2019	1.0	Primera Entrega del Documento SRS	Diego Duchimaza
Pablo Malla
Christian Rivera
27/11/2019	1.1	Segunda Entrega del Documento SRS	Diego Duchimaza
Pablo Malla
Christian Rivera
			
			

 
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

•	Requerimientos funcionales: describen las capacidades o funciones que el sistema será capaz de realizar. 

•	Requerimientos no funcionales: restricciones o características que de una u otra forma puedan limitar el sistema, como, por ejemplo, rendimiento, interfaces de usuario, fiabilidad, mantenimiento, seguridad, portabilidad, estándares, etc.

•	Documento: Es el relato que describe un proceso, un procedimiento, un manual, un formato sin diligenciar entre otros. 

•	Registro: Evidencia objetiva de que algo se está haciendo, lo cual no puede ser cambiado o actualizado una vez se realice. 

### 1.4	Referencias:
	Unidad_01_01_REQ_Intro

### 2.	Descripción general
### 2.1 Perspectiva del producto

Este sistema está enmarcado en un ambiente altamente competitivo, donde la funcionabilidad es muy determinante y los datos al igual a almacenas son de vital importancia para evaluar a sus clientes.

### 2.1.2 Interfaces de hardware

El usuario busca tener informacion de sus clientes consultando la información de la base de datos y realizando una presentación adecuada en una interfaz gráfica. Con una arquitectura en 3 capas: 

                  
•	Base de Datos: Repositorio de información, la cual deberá tener capacidad suficiente para albergar la información de todos los clientes con soporte a aplicativos de:
o	Búsqueda de información.
o	Acceso remoto a bases de datos.
o	Distribución multimedia.
o	Almacenamiento información
o	Eliminar información de base de datos
o	Actualización de Datos

### 2.2 Funciones del producto

El diseño del sistema que se presenta con este proyecto pretende establecer aquellas características fundamentales que debe tener el sistema para la Venta de libros que facilitan al usuario confiar en la empresa y la calidad de su servicio.

### 2.3 Características de usuario

Los usuarios del sistema son los responsables de las diferentes áreas como se especificó en el documento de visión.
•	Administrador del sistema: Es el encargado de dar soporte al sistema de gestión del conocimiento, así como apoyar a los demás usuarios en el uso del mismo.




### 2.4 Restricciones
Restricción	Aplica	Explicación
Regulación	SI	Es necesario regirse por las leyes vigentes de comercialización de software. Y normas para transacciones y contratos de confidencialidad. 
Limitaciones de hardware	NO	No hay limitaciones conocidas. Se supone que se tienen los recursos para adquirir los equipos necesarios. Como puede ser un sistema operativo y las Bases de datos.
Interfaces con otras aplicaciones	NO	No hay interacción conocida con otras aplicaciones de software que pueda necesitarse.
Operación en paralelo	SI	El sistema requiere actuar en paralelo, con redundancia de discos y procesadores en caso de falla. 
Lenguaje alto nivel	SI	El desarrollo de software está limitado por el uso de un lenguaje de alto nivel que permita programar interfaces graficas
Auditoria	SI	Este sistema debe ser auditable. 
Seguridad	SI	Se deben validar los clientes que ingresan al sistema, manejar métodos de encriptación de información, que proteja el acceso al sistema siendo administrador.
Protección de acceso no autorizado desde usuarios externos al sistema. 

### 2.5 Documentación de usuario
En el desarrollo del proyecto del software, un requerimiento básico que se documenten cada una de las etapas del ciclo de vida del software. Para la empresa es necesario contar con los documentos de análisis, diseño, implementación, pruebas y entrega final. Estos documentos deben estar realizados bajo los parámetros de los estándares para construcción de software. Para efectos de mantenibilidad y escalabilidad los documentos proporcionan una base sobre la cual es posible realizar estos procesos. 


### 3 Interfaces de hardware	
Se tiene en cuenta la necesidad de que la información de la base de datos sea consistente y confiable. 

Es crucial tener un diseño eficaz de la base de datos para garantizar un tiempo de respuesta rápido por parte del empleado. Para diseñar una base de datos que sea adecuada, es necesario distribuir apropiadamente los datos entre la base de datos, crear índices suficientes para optimizar las consultas más frecuentes sin que se utilice una cantidad de espacio de disco excesiva, normalizar de forma razonable las tablas que no requieran combinaciones excesivas para responder a las consultas, y usar procedimientos almacenados para llevar a cabo operaciones de base de datos frecuentes o complejas.


### 3.2 Requerimientos Funcionales

En esta sección se busca describir los diferentes requerimientos funcionales de una manera fácil de entender para los interesados o Stakeholders del proyecto de software. 

•	El sistema de venta de libros deberá poder almacenar usuario con sus respectivos datos.
Requerimiento: Funcional

•	El sistema deberá mostrar una variedad de productos para todos los usuarios independientemente de que estas tengan una suscripción en el sistema de venta de libros.
Requerimiento: Funcional

•	El sistema deberá contar con una fácil navegabilidad para el usuario, es decir el usuario podrá intuitivamente manejar el sistema para explorar como también para realizar una compra.
Requerimiento: Funcional

•	El sistema deberá realizar el cobro de un producto mediante el ingreso de una tarjeta de crédito o débito.
Requerimiento: Funcional

•	El sistema deberá tener una sección de búsqueda.
Requerimiento: Funcional

•	El sistema deberá tener una sección de navegabilidad horizontal desplegable.
Requerimiento: Funcional

•	El sistema deberá generar un informe sobre las ventas realizadas por cada categoría existente. 
Requerimiento: Funcional

•	Cada usuario deberá tener un carrito donde se podrá almacenar productos que posteriormente pueda comprar.
Requerimiento: Funcional
### 3.3 Restricciones de diseño
El sistema debe impedir que el usuario índice más de una sesión a la vez. 

### 3.4 Requerimientos No Funcionales
•	El sistema ofrecerá disponibilidad de los productos para toda la comunidad.
Requerimiento: No funcional

•	El sistema deberá presentar la información de los productos de manera categórica, es decir deberá ser agrupada en secciones específicas.
Requerimiento: No funcional

•	La base de datos utilizada deberá ser de bajo costo, es decir los servicios y mantenimientos no deberán ser tan costosos. 
Requerimiento: No funcional

•	Los usuarios nada más podrán realizar una comprar una vez se hayan subscrito a la página.
Requerimiento:

•	Una vez realizada una compra el sistema deberá generar una factura electrónica que será enviada al correo electrónico vinculado.
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

Identificador	<Gestion>
Nombre	<Gestion de usuarios>
Descripcion	El sistema debera gestionar el registro de un usuario al sistema.
Precondicion	<precondicion de caso de uso>

Secuencia normal	Paso	Accion
	1	El actor usuario debera registrarse o iniciar sesion
	2	El sistema validara los datos que ha ingresado el usuario
Posicondicion
	<posicondicion de caso de uso>


Excepciones	Paso 	Accion
	1	Se mostrara un mensaje de error en caso de que los datos esten incorrectos.
		

Rendimiento	Paso	Accion
	1	n segundos
Frecuencia esperada	<n de veces> veces
Importancia	
Urgencia	
Comentarios	<comentarios adicionales>
 
Buscar libro:
Este caso de uso permite que si un usuario que este utilizando el sistema quiera buscar algun libro en especifico, pueda hacerlo rapidamente, lo primero qye debe hacer es dar click en buscar libro, luego debera ingresar el nombre, codigo o ISBN del libro para buscar, y en caso de que lo quiera buscar por categoria, se pedira ingresar el nombre de la categoria deseada.

Identificador	<Busqueda>
Nombre	<Busqueda de libro>
Descripcion	El sistema debera permitir que el usuario pueda buscar un libro por su nombre, id, ISBN o por la categoria.
Precondicion	<precondicion de caso de uso>

Secuencia normal	Paso	Accion
	1	El usuario puede optar por una busqueda especifica de libro utilizando este metodo
	2	El sistema validara los datos que ha ingresado el usuario sobre el libro a buscar
Posicondicion
	<posicondicion de caso de uso>


Excepciones	Paso 	Accion
	1	Se mostrara un mensaje de error en caso de que los datos ingresados esten incorrectos.
		

Rendimiento	Paso	Accion
	1	n segundos
Frecuencia esperada	<n de veces> veces
Importancia	
Urgencia	
Comentarios	<comentarios adicionales>


 
Realizar pedido:
Este caso de uso muestra la forma en la cual un usuario ya registrado puede realizar un pedido, al ingresar al carrito puede ver la lista de deseos o pedidos sin comfirmar, luego, podra seleccionar su pedido, luego de eso, el sistema le mostrara la informacion personal del usuario para confirmar sus datos, si el usuario lo desea modificar lo podra hacer, y si no, pues tambien funciona, una vez ya confirmado los datos, el sistema validara esos datos, luego pedira ingresar la tarjeta como forma de pago, una vez verificada los datos de la tarjeta, el sistema mostrara los detalles de su pedido, si todo es correcto, lo ultimo que queda es seleccionar en confirmar pedido.
Identificador	<Compra>
Nombre	<Realizar pedido (compra)>
Descripcion	El usuario registrado puede hacer un pedido y su forma de pago sera con tarjeta de credito
Precondicion	<precondicion de caso de uso>

Secuencia normal	Paso	Accion
	1	El usuario agrega pedidos a su carrito
	2	El sistema confirma los datos del usuario
	3	El usuario debera ingresar su tarjeta para poder realizar su pago
	4	El sistema validara todos los datos para confirmar la peticion del usuario
Posicondicion
	<posicondicion de caso de uso>


Excepciones	Paso 	Accion
	1	Se mostrara un mensaje de error en caso de que los datos ingresados esten incorrectos.
		

Rendimiento	Paso	Accion
	1	n segundos
Frecuencia esperada	<n de veces> veces
Importancia	
Urgencia	
Comentarios	<comentarios adicionales>

 

Agregar al carrito:
Este caso de uso es muy simple, ya que enlaza dos casos de uso mas, el primero es buscar un libro, si no ha iniciado sesion si puede buscar un libro de forma libro, pero para agregar al carrito es necesario iniciar sesion, una vez hecho esto, ya puede agregar su producto a su carrito de compras.
Identificador	<Agregar>
Nombre	<Agregar al carrito>
Descripcion	El usuario que este registrado puede agregar su producto al carrito de compras
Precondicion	<precondicion de caso de uso>

Secuencia normal	Paso	Accion
	1	El usuario puede buscar un libro
	2	El usuario registrado puede agregar ese libro al carrito de compras
Posicondicion
	<posicondicion de caso de uso>


Excepciones	Paso 	Accion
	1	Se mostrara un mensaje de error en caso de que los datos ingresados esten incorrectos.
		

Rendimiento	Paso	Accion
	1	n segundos
Frecuencia esperada	<n de veces> veces
Importancia	
Urgencia	
Comentarios	<comentarios adicionales>


 

Ingresar tarjeta
El siguiente caso de uso indicar la el proceso que el usuario debe emplear para agregar una tarjeta y posteriormente finalice su compra, para ello el usuario debera llenar los campos solicitados sobre la informacion de la tarjeta una vez llenados, el sistema delalibreria verificara si estos fueron rellenados correctamente validando los tipos denetrada, la informacion sera nuevamente validado el sistema bancario asociado. Posteriormente el sistema resivira una confirmacion de validacion y efectivisara elpedido. 

Identificador	<Agregar>
Nombre	<Ingresar Tarjeta>
Descripcion	El usuario que este registrado y desee realizar una compra debera ingresar una tarjeta para su respectivo cobro.
Precondicion	<precondicion de caso de uso>

Secuencia normal	Paso	Accion
	1	El usuario debe insertar datos de la tarjeta
	2	
Posicondicion
	<posicondicion de caso de uso>


Excepciones	Paso 	Accion
	1	Se mostrara un mensaje de error en caso de que los datos ingresados esten incorrectos.
	2	Se mostrara un mensaje de error en caso de que la tarjeta no este vinculada a una cuenta bancaria.

Rendimiento	Paso	Accion
	1	n segundos
Frecuencia esperada	<n de veces> veces
Importancia	100%
Urgencia	N/A
Comentarios	<comentarios adicionales>

 


Agregar libro
El administrador podra ingresar un nuevo libro, para ello debera ingresar los campos solisitados y posterior mente a guardarlo en la base de datos una vez aya pasado el filtro del sistema de la librería.


Identificador	<Compra>
Nombre	<Agregar libro>
Descripcion	El administrador podra ingresar un libro 
Precondicion	<precondicion de caso de uso>

Secuencia normal	Paso	Accion
	1	El administrador rellena los campos con los datos de unnuevo libro
	2	El sistema confirma que los datos se encuentren bien ingresados
	3	La base de datos almacenara el nuevo libro
	4	
Posicondicion
	<posicondicion de caso de uso>


Excepciones	Paso 	Accion
	1	Se mostrara un mensaje de error en caso de que los datos ingresados esten incorrectos.
		

Rendimiento	Paso	Accion
	1	n segundos
Frecuencia esperada	<n de veces> veces
Importancia	100%
Urgencia	
Comentarios	<comentarios adicionales>

 








De la misma manera se podrá modificar un libro.
 

Borra libro
El administrador podrá borrar un libro asignándole un valor predeterminado el cual lo identificara como eliminado, sin embargo dicha tupla no será eliminada de la base de datos.
 


Identificador	<Compra>
Nombre	<Borrar libro>
Descripcion	El administrador podra borrar un libro 
Precondicion	<precondicion de caso de uso>

Secuencia normal	Paso	Accion
	1	El administrador definira un dato tipo false para que el libro ya no este disponible
	2	El sistema confirma la accion
	3	La base de datos actualiza el estadod el libro
	4	
Posicondicion
	<posicondicion de caso de uso>


Excepciones	Paso 	Accion
	1	Se mostrara un mensaje de error en caso de no encotrar el libro
		

Rendimiento	Paso	Accion
	1	n segundos
Frecuencia esperada	<n de veces> veces
Importancia	n/a
Urgencia	n/a
Comentarios	<comentarios adicionales>


Administrador
 
Cliente
 
6.	Entregable
La finalidad de un entregable consiste en mostrar al steckholder un boseto de como sera el sistema de venta de libros para la aprobacion y posteriormente el desarroyo del programa.

•	Logeo: el usuario debera realizar una validacion de cuenta para poder realizar una accion en la pagina web sin embargo esto no le impide navegar por la pagina.

 




















•	Index: Esta página será el rostro de nuestro sistema de venta de libro, esta página deberá poder ser visualizada por cualquier usuario.
 
•	Facturas: Esta sección mostrara únicamente al administrador las facturas realizadas por la compra de los libros, 
 
•	Pedidos: Esta sección mostrara únicamente al administrador los pedidos realizados por los clientes, 

 






•	Productos: Esta sección mostrara únicamente al administrador los productos almacenados en la base de datos.

 
•	Usuarios: Esta sección mostrara únicamente al administrador los usuarios almacenados en la base de datos pudiéndoles modificar.

 






•	Index_admin: Esta sección será una página únicamente para los administradores.

 
•	Crear_producto: Esta sección será una página únicamente para los administradores los cuales le permitirán agregar productos al sistema.
 












•	Estado_producto: Esta sección será una página únicamente para los administradores los cuales le permitirán agregar el estado de un pedido.
 
•	Carrito: Esta sección mostrara a los clientes los productos seleccionador y el valor a pagar.

 
•	Quienes somos: Esta sección mostrara a los clientes la visión y misión de nuestro proyecto.

 



•	Crear usuario: Esta sección se mostrara a un usuario no registrado, este servirá para realizar acciones en la página web.
 

















•	Categorías : Esta sección se mostrará a un usuario no registrado, este servirá para buscar libros según las categorías.
 
•	Libro: Esta sección se mostrará a un usuario no registrado, este servirá para mostrar la información de los libros.
 



•	Libros: Esta sección se mostrará a un usuario no registrado, este servirá para mostrar libros según las categorías seleccionada.

 
7.	Interfaz
Una vez utilizado los métodos de adquisición de requerimientos para el buen modelado del sistema aplicamos modelos con una estructura precisa, cubriendo las decisiones de análisis, diseño e implementación del sistema mediante los diagramas de caso de uso y de entidad relación.

-Pagina 

Esta es nuestra pagina index en donde puede acceder cualquier usuario este o no registrado podra ver los productos de nuestra pagina pero no podra realizar una compra o agregar el producto al carrito, para esto debe registrarse o logearse según sea el caso.




-Pagina index del usuario administrador
 

Esta es la pagina que se mostrara al usuario administrador el que puede gestionar a los usarios, libros, pedidos y facturas de los clientes registrados en nuestra pagina este usuario es creado directamente desde la base de datos.

8.	Requisitos dados para el desarrollo del proyecto

Iniciar Sesión. – El sistema debe contar con seguridad con base al uso de roles para ingresar al sistema. Los roles a utilizar deben ser al menos dos: usuario y administrador.

 

Al momento de iniciar sesión nos aparece la siguiente pagina esta nos sirve ya sea para le logeo de un usuario normal o de un usuario administrador.




Gestión de usuarios.- El administrador del sistema web puede gestionar los datos de los clientes registrados.


En esta pagina el administrador puede modicar los datos de los usuarios registrados estos a su vez se modificaran en las paginas del usuario normal correspondiente.

Gestión de productos. - El administrador del sistema web puede gestionar los datos de los productos (imagen, nombre, descripción, precio, stock, entre otros). Además, el administrador del sistema podrá ver y eliminar calificaciones y comentarios ingresados por los usuarios relacionadas a cada producto.

 

El administrador puede modificar los libros que estan en la base pero tambien tiene en el menu como se puede observar que puede agregar un libro, autor, genero y estos cambiaran la informacion que se presenta en la pagina principal.
Gestión de pedidos. - El administrador del sistema podrá revisar todos los pedidos recibidos a través de la plataforma web. Además, podrá cambiar el estado de cada pedido, teniendo cinco estados (C = Creado, A = Aceptado, E = En camino, F = Finalizado, y R = Rechazado). De igual manera, el administrador podrá generar la ruta de envío del pedido usando Google Maps con base a geo-referencias.

 

Gestión de facturas. - El administrador del sistema podrá revisar todas las facturas generadas por el sistema web. Las facturas podrán ser anuladas únicamente por el administrador del sistema.




SECCION PUBLICA

Inicio

La sección del incio de la parte publica esta conformada por un menú, el cual nos permite navegar en nuestra página, también hay una imagen de portada. Luego hay una sección que muestra los últimos libros agregados, y, finalmente en el footer, nuestros datos de contactos y el mapa de ubicación de la librería.

 
 


Quienes somos

La siguiente pagina es de quines somos, aquí se muestra la informacion de nuestra libreria,  la informacion general, asi como tambien la vision y vision de nosotros como una empresa.
 

Contacto
En la pagina de incio hay una seccion de contacto, en donde se muestra la informacion de la ubicación, correo electronico y tambien un numero telefonico de contacto.
 

Producto
En la pagina de producto, ya se muestra un producto ya general, con sus caracteristicas, imagen, resumen, aquí hay un boton para agregar un producto al carrito, y finalmente su puede visualizar los comentarios agregados.
 
 

Registro

La pagina de registro muestra un formulario el cual un usuario anonimo puede ingresar sus datos para crear una cuenta y asi poder realizar una compra de un producto.
 











Sección privada (rol de usuario)
Gestión de pedidos.- los usuarios podrán agregar, modificar, eliminar productos a su pedido (carrito de compras) únicamente cuando hayan iniciado sesión con el rol de usuario registrado. Además, los usuarios registrados podrán revisar el estado de todos sus pedidos activos. Por último, se tendrá un historial de todos los pedidos finalizados

 
El usuario que se a logeado puede ver sus pedidos con sus estados correspondientes


Gestión de calificaciones.- los usuarios registrados podrán calificar y agregar un comentario a cada producto del catalogo que dispone la empresa.

 

Nos muestra el producto en si en donde podemos calificar y agregar un comentario esto se guardara y se mandara a guardar en la base, asi también se ve su precio, categoría y su autor.








Gestión de cuenta.- cada usuario registrado podrá gestionar sus datos de cuenta, nombre, dirección, teléfono, contraseña entre otros datos.
 

En esta parte el usuario puede modificar sus datos personales como nombre apellido entre otros y este se guardará.

