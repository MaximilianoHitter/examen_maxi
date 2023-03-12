# examen_maxi

 Se utilizó patrón mvc pero sin utilización de un archivo gestor de clases o autoload, las consultas que se utilizan para obtención de datos y modificación o eliminación de los mismos se realizan por medio de ajax.

Se utilizó bootstrap para estilos mayormente, jquery para selectores y peticiones por ajax, y de lenguajes php (ninguna versioón en específico, pero por tema de compatibilidad es recomendable a partir de la versión 7.4), mysql con PDO, html5, css y js. Se utilizó para funcionamiento y testeo server wamp con versión de php 8.0.13, mysql 5.7.36 y apache 2.4.51.

Ejercicio 1: Se realizó relevamiento de datos desde un endpoint, obteniendo los datos random de personas, mostrando los mismos mediante una tabla dinámica, biblioteca datatables (datatables.net), pudiendo en la misma ordenar de mayor a menor y viceversa por columna y teniendo un campo de búsqueda general, se utilizó la paginacion de la biblioteca y botones de copiado y de descarga de excel.

Ejercicio 2: Se realizó un index que posee 3 cards/secciones, ABM de personas, que permite dar de alta, modificar y eliminar una persona, se utilizó como clave primaria el número de dni, ABM de cursos, permite dar de alta, modificar y eliminar cursos, se utilizó como clave primaria el legajo (campo numérico), en ambas tablas el único campo de tipo UNIQUE es la clave primaria, no se realizó restricción de duplicidad de ninguno de los otros campos, se utilizaron claves foráneas pero no se realizaron restricciones o políticas de update o delete en las mismas. Al borrar un curso o una persona se buscara en la tabla intermedia las tuplas de dicha persona o dicho curso y se eliminarán. No se han añadido validaciones sobre el contenido de los campos de genero de personas y modalidad y nombre de cursos, estos se deberán ingresar según las siguientes reglas:

- Personas. Género: debe ser 'Masculino' o 'Femenino'.
- Cursos. Nombre: Si hay dos cursos de igual temática pero diferente modalidad deben poseer el mismo nombre.
- Cursos. Modalidad: debe ser 'Individual' o 'Grupal'

  En el caso de la vista de Gestión la informacion se encuentra dividida entre Individual y Grupal, por lo que los datos que se encuentran en la lista por sobre cada tabla son relativos a la tabla misma.

No debería ser necesario, pero si existe algún inconveniente con los estilos de bootstrap sería necesario correr la instalacion de composer ya que se ha utilizado este gestor para instalar los estilos en el proyecto.
