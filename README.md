## Diplomado en Visualización de Datos, v 2.0
### Módulo de Publicación en Web
#### Lunes 28 de agosto, 2017
##### profesor@faco.cl
##### http://profesor.faco.cl

-------

## Introducción

A finales de la década de 1980, trabajando por una mejor manera de actualizar y compartir información entre investigadores del CERN (Conseil Européen pour la Recherche Nucléaire), [Tim Berners-Lee](https://es.wikipedia.org/wiki/Tim_Berners-Lee) desarrolló las ideas fundamentales que estructuran la Web. 

Berners-Lee y su grupo crearon un sistema de distribución que consideraba:

- el **lenguaje [HTML](https://developer.mozilla.org/es/docs/Web/HTML)** (HyperText Markup Language), para describir el contenido de la página web; 
- el **protocolo HTTP** (HyperText Transfer Protocol), para las transacciones entre un cliente y un servidor; y 
- la **URL** (Uniform Resource Locator), para apuntar a un recurso en una dirección.

Este sistema de distribución, accesible vía Internet y Navegador Web, pronto sumó:

- esfuerzos independientes de personas como Rasmus Lerdorf, quien decidió crear un lenguaje para guardar ciertos datos y llevar un conteo del tráfico en su página web de currículum vitae. Lo que creó fue [PHP](http://php.net/manual/es/), un lenguaje de programación que se ejecuta del lado del servidor; y

- esfuerzos de los desarrolladores de Navegadores por crear dialectos que se ejecutaran del lado del cliente. Dialectos que confluyeron en el lenguaje [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript), estandarizado en Ecma International (European Computer Manufacturers Association).

En paralelo al desarrollo de funciones, también se proponían modos de mejorar la presentación de las páginas web. La propuesta que se convirtió en estándar fue la de [CSS](https://developer.mozilla.org/es/docs/Web/CSS) (Cascading Stylesheets), un lenguaje descriptivo que ofrece a los desarrolladores el control total sobre estilo y formato de sus documentos.

Con estas tecnologías, para el año 2000 ya podrían diferenciarse dos modos de hacer páginas web. Uno orientado a la información, con sitios web como sistema de hipertexto, y otro orientado a las tareas, con aplicaciones web como interfaz de software:

![JJGARRETT](https://i.pinimg.com/originals/b3/66/ce/b366cec6b0658bbb7baa329aec69906e.jpg)

Para acotar la historia entre los años 2000 y 2017, habría que recordar cómo es que Flash nos mantuvo mirando la pantalla por un rato, hasta que llegaron blogueros y comentaristas. 

Luego, mientras aparecían las plataformas de distribución digital de aplicaciones móviles para smartphones y tablets, las publicaciones de algunos blogueros se acortaron a los 140 caracteres, o se transformaron en estados de Facebook.

Entre las aplicaciones para smartphones y tablets se incluyen Navegadores Web, y sus conexiones a Internet se multiplican. Esto nos exige pensar en [diseño web adaptable](https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable). 


#### En la clase de hoy: 

1. revisaremos los principales lenguajes para la publicación en Web (HTML, CSS, JavaScript y PHP);

2. para profundizar esta revisión, armaremos rápidamente una página web con HTML y CSS, la que publicaremos con GitHub Pages;

3. revisaremos Bootstrap, como una opción que facilita el trabajo en diseño web adaptable;

4. para profundizar esta revisión, armaremos una página web, de diseño web adaptable, la que también publicaremos con GitHub Pages; y

5. armaremos un sitio web con PHP, el que no podremos publicar en GitHub Pages; sólo dejaremos en sus servidores locales implementados con MAMP.

**Para poder cumplir con este ambicioso plan, aprovecharemos algunos documentos que pueden descargar desde este repositorio.**

-------

## Lenguajes para la publicación en Web

### HTML

Cada elemento de HTML se escribe, generalmente, entre etiquetas:
`<etiqueta>contenido</etiqueta>`

Cada elementos HTML es un sandwich, con las etiquetas como rebanadas de pan, y el contido es su relleno. Aunque también hay elementos HTML que nos obligan a cambiar la analogía del sandwich por canapé, por ejemplo: `<hr>`, `<br>`, `<img>`, `<meta>` 

**Con cada elemento definimos qué se ve en una página web.** 

Cada elemento, en su etiqueta de inicio, puede estar determinado por uno o varios atributos; cada atributo tiene su variable.

`<etiqueta atributo="variable">contenido</etiqueta>`

Deben notar que atributos y variables se escriben solo en la primera etiqueta, la de apertura, nunca en la de cierre.
Mediante atributos y variables pueden cambiar un simple párrafo:

`<p>esto es un párrafo</p>`

Este elemento puede seguir teniendo el mismo contenido, pero podría tener las características de una clase "alumna" y ser único por una identidad "mariana".

`<p class="alumna" id="mariana">esto es un párrafo</p>`

Atributos y variables también nos permiten establecer vínculos, relaciones y recursos. Así, por ejemplo, puedo establecer un recurso de imagen que se llama "selfie", que tiene extensión "jpg", y se guarda en la carpeta "images", al mismo nivel que el documento HTML. Además puedo indicar que tenga una clase "destacada":

```
<img src="images/selfie.jpg" class="destacada">
<!--eso fue un canapé, y esto es un comentario-->
```

### CSS

Cada regla de CSS se escribe, generalmente, así:

`selector{propiedad:valor;}`

**Con cada regla definimos cómo deberían verse los elementos en el HTML. Esta definición exige una conexión entre el HTML y el CSS.** 

Esta conexión se hace:

A nivel de cada regla: El selector debe apuntar a elementos, partes, estados, clases o identidades

A nivel de conjunto de reglas: El CSS debe estar incrustado-en o vinculado-a el documento(s) HTML correspondiente(s).

Veamos primero la conexión a nivel de cada regla, considerando el caso de los elementos:

```
body{
  color:white;
  background:black;
  font-family:Helvetica, Arial, sans-serif;
  font-size:1em;
}
```

Sigamos con la conexión a nivel de cada regla, considerando ahora las partes de un elemento (pseudoelemento):

```
p::first-line{
  text-transform: uppercase;
}
```

Sigamos con la conexión a nivel de cada regla, considerando ahora un estado espacial del elemento (pseudoclase):

```
a:hover{
  text-decoration: underline;
}
```

Otra más de conexión a nivel de cada regla, con una clase (class):

```
.destacada{
  border:5px solid rgba(255,255,255,1);
}
```

Y la última conexión a nivel de cada regla, con una identidad (id):

```
#mariana{
  color:rgba(255,200,200,1);
}
```

Ahora, para cerrar, veamos la conexión a nivel de conjunto de reglas CSS.

Bien puedes agregar un poco entre las líneas de código en el cuerpo (body) del HTML, usando atributos y variables:

`<p style="color:red;">esto es un párrafo</p>`

Mejor sería hacerlo una vez para todo el documento dentro de la cabeza (head) del documento HTML:

```
<style>
body{
  color:white;
  background:black;
  font-family:Helvetica, Arial, sans-serif;
  font-size:1em;
}

#mariana{
  color:rgba(255,200,200,1);
}

/* Este es un comentario en CSS */
</style>
```

Pero lo más efectivo sería trabajar en un documento CSS independiente, que se vincule con uno o varios documentos HTML

`<link rel="stylesheet" href="css/estilo.css" type="text/css">`

-----

**Con lo revisado hasta este punto, podemos desarrollar una primera página web aprovechando la carpeta 2, la que publicaremos en GitHub Pages, para lo que es necesario que cada uno de ustedes tenga una cuenta en esta plataforma de desarrollo colaborativo.**

-----

### JS (JavaScript) 

En este lenguaje de programación podrán profundizar en los siguientes módulos del diplomado. Por ahora, conviene decir que se trata de un lenguaje de programación que, origintalmente, se ejecuta del [lado del cliente](https://es.wikipedia.org/wiki/Lado_del_cliente). 

Cuando [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript/Guide) se ejecuta, no modifica directamente el código fuente de la página web sino que el [DOM](https://es.wikipedia.org/wiki/Document_Object_Model) de la misma; podemos seguirle la pista a esta ejecución mediante la [Consola de JavaScript](https://transferwise.com/es/help/article/2247654/tecnico-navegador/como-abrir-la-consola-de-tu-navegador) que incluyen los navegadores.

El código JavaScript se puede incluir o vincular al documento HTML entre etiquetas `<script></script>` y en cualquier parte del documento, aunque se suele ubicar según la prioridad de carga (si ejecuta algo clave, va arriba; si su ejecución es secundaria respecto del texto, va abajo).

Para reducir el trabajo con JavaScript a la medida de lo justo y necesario, se acostumbra a usar librerías (bibliotecas). Una de las más usadas por los diseñadores es [jQuery](http://jquery.com/), con ella pueden agregar sliders, acordeones, tabs, etc.

Pueden encontrar tutorial básico de [jQuery](http://jquery.com/) en http://web.tursos.com/tutorial-jquery-rapido-facil-lo-basico/

**Esta indicación es suficiente para saltar a [Bootstrap](https://github.com/profesorfaco/web/blob/master/README.md#bootstrap), donde nos encontraremos un comentario que dice `<!-- jQuery first, then Popper.js, then Bootstrap JS -->`.**

### PHP

Este lenguaje de programación se ejecuta [del lado del servidor](https://es.wikipedia.org/wiki/Script_del_lado_del_servidor), afectando al documento completo antes de que éste sea enviado al [cliente](https://es.wikipedia.org/wiki/Cliente_(inform%C3%A1tica)). Esta es su principal diferencia con [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript/Una_re-introducci%C3%B3n_a_JavaScript#Información_general), que se ejecuta generalmente del [lado del cliente](https://es.wikipedia.org/wiki/Lado_del_cliente), afectando al [DOM](https://developer.mozilla.org/es/docs/Referencia_DOM_de_Gecko/Introducci%C3%B3n#DOM_y_JavaScript).

Como PHP se ejecuta [del lado del servidor](https://es.wikipedia.org/wiki/Script_del_lado_del_servidor): Nunca aparece al “ver código fuente”, ni existe una Consola de PHP en los navegadores. Por esta razón, no puedes hacer "ingeniería inversa" fácilmente, pero bien puedes apoyarte con consultas a [Stackoverflow](http://stackoverflow.com/questions/tagged/php), además del sitio con [referencias oficiales de PHP](http://php.net/manual/es/langref.php). Y si necesitas compartir tus trabajos con PHP, puedes usar servicios como [codepad](http://codepad.org/).

Para que se ejecute PHP en sus computadores, en esta clase **deben tener instalado [MAMP](https://www.mamp.info/en/)**. Este programa nos permite montar un servidor local, para trabajar con **Apache** (servidor HTTP), **MySQL** (sistema de gestión de bases de datos) y **PHP** (lenguaje de programación).

Para trabajar con PHP debemos usar documentos con extensión `*.php`, los que se pueden crear de la misma manera que se crean los documentos `*.html`: trabajando con cualquier editor de código.

Dentro de los documentos con extensión `*.php` tenemos que usar etiquetas de apertura y cierre particulares, que son `<?php` y `?>` (las instrucciones que estén entre estas etiquetas serán filtradas e interpretadas en el servidor.

Entre `<?php` y `?>` se pueden escribir una o varias instrucciones. Si se escriben varias, éstas deben separarse mediante punto y coma `;`. Y si necesitan escribir comentarios de una línea, deben anteponer un doble slash `//`. [Por ejemplo](http://codepad.org/ZZXEWJXK): 

```
<?php 
//primero defino una variable
$inception = "película escrita, producida y dirigida por Christopher Nolan";
//luego imprimo el contenido de la variable
echo $inception;
?>
```

Entre las instrucciones podemos aprovechar las funciones internas (incluídas) de PHP; es muy dificil que exista alguien capaz de aprender de memoria todas las `funciones()` que ofrece este lenguaje de programación, pero en el [sitio oficial de PHP](http://php.net/manual/es/langref.php), y en [varios lugares más](http://stackoverflow.com/questions/tagged/php), se puede encontrar mucha ayuda.

-----

**Antes de terminar la clase volveremos sobre este lenguaje, para poder completar un sitio web con el material de la carpeta 5. Pero antes, vamos a preparar una página web de diseño adaptativo mediante el uso de Bootstrap**

-------

## Bootstrap

Bootstrap es un [Framework](https://es.wikipedia.org/wiki/Framework) de [HTML](https://developer.mozilla.org/es/docs/Glossary/HTML), [CSS](https://developer.mozilla.org/es/docs/Glossary/CSS) y [JS](https://developer.mozilla.org/es/docs/Glossary/JavaScript) para implementar [diseño web adaptable](https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable). Es una opción entre varias que se podrían explorar: [Top 10 Front-End Frameworks of 2016](https://www.keycdn.com/blog/front-end-frameworks/), [Best Front-end frameworks to try in 2016](https://hashnode.com/post/best-front-end-frameworks-to-try-in-2016-cin1unmcn00tvrb535out1y08). Optar por Bootstrap es optar por lo más popular, por asegurarse la disponibilidad de mucha ayuda en línea.

Sin más preámbulo, vamos al [sitio oficial de Bootstrap](http://getbootstrap.com), donde finalmente podemos encontrarnos con la versión 4. En el menú busquen la opción **Documentation**. Basta muy un poco de scroll para llegar al **Quick start**. La forma más rápida de partir es aprovechando los vínculos:

Dentro de la cabeza de la página, debemos copiar:

```
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
```

Y más abajo, cuando se está cerrando el cuerpo de la página, debemos copiar:
```
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
```

En el documento `.html` donde copiemos lo indicada, debería verse así:

```
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
```
Con esto, ya tenemos la base que nos permitirá construir rápidamente una página de apariencia profesional, siempre y cuando tengamos una clara idea respecto de una estructura conceptual de Boostrap, que considera contenedores (`container`, `container-fluid`), filas (`row`) y un [sistema de grillas de 12 columnas](https://getbootstrap.com/docs/4.0/layout/grid/) (`col`). 

Este sistema de grillas de 12 columnas, dentro de una fila y un contenedor, puede adaptarse a los dispositivos, sean muy pequeños (`col-`), pequeños (`col-sm-`), medianos (`col-md-`), grandes (`col-lg-`) o extra grandes (`col-xl-`).

Así, por ejemplo, puedo definir que la relación de dos divisiones se ajuste según el dispositivo sea muy pequeño, mediano o extra grande: 

```
<div class="row">
  <div class="col-6 col-md-5 col-xl-4">col-8</div>
  <div class="col-6 col-md-7 col-xl-8">col-4</div>
</div>
```

Favor revisen estos Bootstrap grid examples: https://getbootstrap.com/docs/4.0/examples/grid/

-------

**Ahora podríamos preparar una página web de diseño adaptativo mediante el uso de Bootstrap. Para hacerlo, vamos a trabajar con lo contenido en la carpeta 4**

-------
