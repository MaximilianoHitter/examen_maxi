# examen_maxi

 Se utilizó patrón mvc pero sin utilización de un archivo gestor de clases o autoload, las consultas que se utilizan para obtención de datos y modificación o eliminación de los mismos se realizan por medio de ajax.

Se utilizó bootstrap para estilos mayormente, jquery para selectores y peticiones por ajax, y de lenguajes php (ninguna versioón en específico, pero por tema de compatibilidad es recomendable a partir de la versión 7.4), mysql con PDO, html5, css y js. Se utilizó para funcionamiento y testeo server wamp con versión de php 8.0.13, mysql 5.7.36 y apache 2.4.51.

Ejercicio 1: Se realizó relevamiento de datos desde un endpoint, obteniendo los datos random de personas, mostrando los mismos mediante una tabla dinámica, biblioteca datatables (datatables.net), pudiendo en la misma ordenar de mayor a menor y viceversa por columna y teniendo un campo de búsqueda general, se utilizó la paginacion de la biblioteca y botones de copiado y de descarga de excel.

Ejercicio 2: Se realizó un index que posee 3 cards/secciones, ABM de personas, que permite dar de alta, modificar y eliminar una persona, se utilizó como clave primaria el número de dni, ABM de cursos, permite dar de alta, modificar y eliminar cursos, se utilizó como clave primaria el legajo (campo numérico), en ambas tablas el único campo de tipo UNIQUE es la clave primaria, no se realizó restricción de duplicidad de ninguno de los otros campos, se utilizaron claves foráneas pero no se realizaron restricciones o políticas de update o delete en las mismas.
