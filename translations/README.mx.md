![Buenos primeros números](./assets/github/social-preview.png)

# Buenos primeros números

**Good First Issues** es una iniciativa para seleccionar selecciones fáciles de proyectos populares, de modo que los desarrolladores que nunca han contribuido al código abierto puedan comenzar rápidamente.

Sitio web: [good-first-issues.github.io](https://good-first-issues.github.io)

Este sitio web está dirigido principalmente a desarrolladores que desean contribuir al software de código abierto pero no saben por dónde ni cómo empezar.

Los mantenedores de código abierto siempre buscan involucrar a más personas, pero los nuevos desarrolladores generalmente piensan que es un desafío convertirse en contribuyentes. Creemos que lograr que los desarrolladores solucionen problemas muy sencillos elimina la barrera para futuras contribuciones. Por eso existe *Good First Issues*.

## Agregar un nuevo proyecto

Eres bienvenido a agregar un nuevo proyecto en *Good First Issues*, solo sigue estos pasos:

- Para mantener la calidad de los proyectos en *Good First Issues*, asegúrese de que su repositorio de GitHub cumpla con los siguientes criterios:

     - Tiene al menos tres números con la etiqueta "bueno primer número". Esta etiqueta ya está presente en todos los repositorios de forma predeterminada.

     - Contiene un `README.md` con instrucciones detalladas de configuración para el proyecto.

     - Se mantiene activamente (última actualización hace menos de 1 mes)

- Agregue la ruta de su repositorio (en el formato `propietario/nombre` y orden lexicográfico) en [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Crear una nueva solicitud de extracción. Agregue el enlace a la página de problemas del repositorio en la descripción del PR. Una vez que se fusione la solicitud de extracción, los cambios estarán disponibles en [good-first-issues.github.io](https://good-first-issues.github.io).

## ¿Como funciona?

- First *Good First Issues* es un sitio web estático que utiliza [PHP](https://www.php.net)` para generar archivos HTML.
- Usamos [API REST de GitHub](https://docs.github.com/en/rest) para recuperar problemas de los repositorios enumerados en [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Para recorrer periódicamente los problemas (dos veces al día), utilizamos [GitHub Workflow](https://docs.github.com/en/actions/using-workflows).

## Ayúdanos a crecer

Navegar por proyectos de código abierto puede resultar bastante abrumador tanto para los principiantes como para los contribuyentes experimentados. *Good First Issues* busca resolver este problema proporcionando una plataforma que sirva como punto de partida para aquellos que buscan comenzar con el código abierto o aquellos que buscan involucrarse en un nuevo proyecto.

Cuanta más gente sepa sobre [good-first-issues.github.io](https://good-first-issues.github.io), mejor. Hay varias formas en las que puedes ayudarnos a crecer: puedes contribuir a listas "increíbles", escribir blogs sobre nosotros, comunicarte con blogueros, influencias tecnológicas, desarrolladores y fuentes abiertas en Twitter y YouTube, por ejemplo. ¡Intenta que [good-first-issues.github.io](https://good-first-issues.github.io) se mencione en un vídeo o tweet!

## Sugerencias y deseos

Si tiene preguntas o sugerencias (o encuentra un error), siempre puede escribir a [issues] (https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Licencia

Este es un software de código abierto con licencia [Licencia MIT] (https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).