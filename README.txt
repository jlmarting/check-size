CheckSize

Este script trata de facilitar al servidor la toma de decisión a la hora de eleguir que contenidos ofrecer al cliente, concretamente en lo que a imagenes se refiere.

Lo que se plantea en este enfoque es:

	1.- El cliente pide la página:
	2.- El servidor sirve script para obtención de información de resolución del cliente.
	3.- El cliente recibe y ejecuta el script y envía la información al servidor.
	4.- El servidor recibe estos datos y devuelve los contenidos en función de ellos.


Para que esta solución sea adaptable a cualquier desarrollo ya realizado, la idea es renombrar el fichero raiz, index.php a por ejemplo real_index.php, ya que el mecanismo de detección de resolución lo tendremos que ubicar en index.php, ya que este debe ser el primer script en ejecutarse.
Posteriormente en real_index.php podremos consultar a las siguientes variables de sesión:

	$_SESSION['x-size'] <--- anchura
	$_SESSION['y-size'] <--- altura

	$_SESSION['display-size'] <-- "small" o "big"

	Se toman las dimensiones como si el dispositivo estuvera en 'portrait', esto es, la dimensión de valor máximo sera $_SESION['x-size'], la anchura.

	En el ejemplo planteado se ha considerado que una pantalla es grande si dispone de más de 640 pixeles de anchura. Es decir si $_SESSION['x-size']>640 entonces $_SESSION['display-size'] = "big".

	En el servidor tendremos imágenes de mayor resolución en un directorio y las de menor en otro:

	/galeria/big/  <--- imagenes de alta resolución      /galeria/small/  <--- imágenes de baja resolución

	De esta forma, mediante $_SESSION['display-size'] conseguiremos elegir la ruta adecuada de imágenes en función del dispositivo.













