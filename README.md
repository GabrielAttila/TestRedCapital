# TestRedCapital

- Explica la diferencia entre Composición y Herencia, incluyendo ejemplos de cuándo es más apropiado usar una o la otra.
    - ***Composición***: es la habilidad que tiene un método dentro de un objeto de como 
    interactuar con diferentes objetos de diferentes clases de la misma forma pero con resultados diferentes. Lo usamos cuando dos o mas objetos heredan del mismo padre en donde necesitan metodos espesificos y se les obliga a los hijos a definirlos ya que el padre solo los implementa 
    - ***Herencia***: nos permite tener clases que extiendan de otras, heredando así sus propiedades y métodos no privados. Lo usamos cuando queremos encapsular y/o refactorizar codigo.
- Describe en detalle cómo Laravel usa el patrón de diseño MVC
    - Laravel va mas alla sobre lo que es el patrón MVC, En resumen, Laravel usa las rutas para saber cuál controlador llamar y cuál método. Luego el controlador responde de vuelta con una vista. Esto quiere decir que las rutas entran en juego antes que los controladores.
- ¿Cuáles son las ventajas y desventajas de usar el patrón de diseño Active Record en la capa de Modelo?
    - Nunca he usado este patrón.
- Comandos necesarios para crear un controlador en Laravel
    - php artisan make:controller NombreController
- Como correr un seeder en PHP.
    -  ***php artisan db:seed*** corremos todos los seeders.
    -  ***php artisan db:seed --class=NombreDelSeeder*** corremos un seeder en espesifico.
    -  ***php artisan migrate:refresh --seed*** corremos una migracion con todos los seeders.
- Qué diferencia existe en el objeto extraído con el método find o All.
    - ***find()*** Obtenemos un registro de una tabla en espesifico dependiendo del patrametro establecido (id)
    - ***all()*** Obtenemos todos los registros de una tabla 