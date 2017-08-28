# Diplomado en Visualización de Datos, v 2.0
## Módulo de Publicación en Web
### Lunes 28 de agosto, 2017
#### profesor@faco.cl
#### http://profesor.faco.cl

-------

## Introducción

A finales de la década de 1980, trabajando por una mejor manera de actualizar y compartir información entre investigadores del CERN (Conseil Européen pour la Recherche Nucléaire), [Tim Berners-Lee](https://es.wikipedia.org/wiki/Tim_Berners-Lee) desarrolló las ideas fundamentales que estructuran la Web. 

Berners-Lee y su grupo crearon un sistema de distribución que consideraba:

- el **lenguaje HTML** (HyperText Markup Language), para describir el contenido de la página web; 
- el **protocolo HTTP** (HyperText Transfer Protocol), para las transacciones entre un cliente y un servidor; y 
- la **URL** (Uniform Resource Locator), para apuntar a un recurso en una dirección.

Este sistema de distribución, accesible vía Internet y Navegador Web, pronto sumó:

- esfuerzos independientes de personas como Rasmus Lerdorf, quien decidió crear un lenguaje para guardar ciertos datos y llevar un conteo del tráfico en su página web de currículum vitae. Lo que creó fue PHP, un lenguaje de programación que se ejecuta del lado del servidor.

- esfuerzos de los desarrolladores de Navegadores por crear dialectos que se ejecutaran del lado del cliente. Dialectos que confluyeron en el lenguaje JavaScript, estandarizado en Ecma International (European Computer Manufacturers Association).

En paralelo al desarrollo de funciones, también se proponían modos de mejorar la presentación de las páginas web. La propuesta que se convirtió en estándar fue la de CSS (Cascading Stylesheets), un lenguaje descriptivo que ofrece a los desarrolladores el control total sobre estilo y formato de sus documentos.

Con estas tecnologías, para el año 2000 ya podrían diferenciarse dos modos de hacer páginas web. Uno orientado a la información, con sitios web como sistema de hipertexto, y otro orientado a las tareas, con aplicaciones web como interfaz de software. Desde aquí Jesse James Garrett propone un gráfico aún útil:

![GitHub Logo](https://i.pinimg.com/originals/b3/66/ce/b366cec6b0658bbb7baa329aec69906e.jpg)

Para acotar la historia, habría que recordar cómo es que Flash nos mantuvo mirando la pantalla por un rato, hasta que llegaron blogueros y comentaristas. 

Mientras aparecían las plataformas de distribución digital de aplicaciones móviles para los smartphones, las publicaciones de algunos blogueros se acortaron a los 140 caracteres, o se transformaron en estados de Facebook.

Entre las aplicaciones móviles para los smartphones se incluyen Navegadores Web, y hoy las conexiones a Internet en estos dispositivos se democratiza. Esto ya nos exige pensar en "responsive". 

En la clase de hoy: 

0. Revisaremos, rápidamente, algo HTML, CSS, JavaScript y PHP.

1. Armaremos una página web simple con **HTML** y **CSS**, la que publicaremos con GitHub Pages.

2. Armaremos una página web, de diseño responsive, con Bootstrap, la que también la publicaremos con GitHub Pages.

3. Armaremos un sitio web con PHP.



-------

## HTML

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

## CSS

Cada regla de CSS se escribe, generalmente, así:

`selector{propiedad:valor;}`

Con cada regla definimos cómo deberían verse los elementos en el HTML. Esta definición exige una conexión entre el HTML y el CSS. 

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

Este documento, que ha servido para presentarles los contenidos de la clase, es un documento HTML, cuyo estilo está definido mediante un documento CSS.

## JS (JavaScript) 

Este lenguaje es utilizado para programar scripts que se ejecutan del lado del cliente. Cuando [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript/Guide) se ejecuta, no modifica directamente el código fuente de la página web sino que el [DOM](https://es.wikipedia.org/wiki/Document_Object_Model) de la misma; podemos seguirle la pista a esta ejecución mediante la [Consola de JavaScript](https://transferwise.com/es/help/article/2247654/tecnico-navegador/como-abrir-la-consola-de-tu-navegador) que incluyen los navegadores.

El código JavaScript se puede incluir o vincular al documento HTML entre etiquetas `<script></script>` y en cualquier parte del documento, aunque se suele ubicar según la prioridad de carga (si ejecuta algo clave, va arriba; si su ejecución es secundaria respecto del texto, va abajo).

Para reducir el trabajo con JavaScript a la medida de lo justo y necesario, se acostumbra a usar librerías (bibliotecas). Una de las más usadas por los diseñadores es [jQuery](http://jquery.com/), con ella pueden agregar sliders, acordeones, tabs, etc.

Pueden encontrar tutorial básico de [jQuery](http://jquery.com/) en el siguiente vínculo:

- http://web.tursos.com/tutorial-jquery-rapido-facil-lo-basico/

## PHP

Este lenguaje es utilizado para programar scripts que se ejecutan del lado del servidor. Esa ejecución es anterior al envío de los datos al cliente, por lo que no se le puede seguir ninguna pista de ejecución.

El código PHP se escribe entre las lineas de HTML, entre las etiquetas `<?php ;?>`.
