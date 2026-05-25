# FASE DE CODIFICACIÓN E PROBAS

- [FASE DE CODIFICACIÓN E PROBAS](#fase-de-codificación-e-probas)
  - [1- Codificación](#1--codificación)
  - [2- Prototipos](#2--prototipos)
  - [3- Innovación](#3--innovación)
    - [Retos Asumidos y Resolución:](#retos-asumidos-y-resolución)
  - [4- Probas](#4--probas)
    - [Pruebas Realizadas y Conclusiones:](#pruebas-realizadas-y-conclusiones)
    - [Problemas Encontrados y Soluciones:](#problemas-encontrados-y-soluciones)

> Este documento explica como se debe realizar a fase de codificación e probas.

## 1- Codificación

Disponible en la carpeta código public -> css y images src -> lógica y templates -> vistas

## 2- Prototipos

https://www.figma.com/design/i31JZJQKN5oTMB2W9SmcyG/Proyecto?node-id=0-1&t=FP1YfoNxoy2z695F-1

## 3- Innovación

### Retos Asumidos y Resolución:

**Usar Mercure para el tiempo real:**

  *Reto:* Quería que cuando cambiara algo en el Inventario o en la Contabilidad se actualizara en la pantalla al momento, sin tener que estar dándole a F5 todo el rato.
  
  *Resolución:* Al final usar Mercure fue bastante fácil. Me vi como implementarlo y una vez configurarlo implantarlo en el codigo es muy fácil primero hice flush para añadir el objeto y luego use el update de mercure.
  
**Usar Symfony :**

  *Reto:* Symfony es un framework muy grande y robusto, y adaptarlo a un proyecto de este tamaño cuesta bastante al principio por la cantidad de archivos y configuraciones   que trae de base.
  
  *Resolución:* La verdad es que me costó, pero como es el framework que manejan en la empresa donde hice las prácticas, el haber visto allí cómo funciona el flujo real hizo que me fuera más fácil sacarlo adelante aunque utilizan una versión mas antigua. Aun así, la conclusión es que para un proyecto pequeño cuesta bastante configurarlo todo al principio, aunque luego te deje el código súper ordenado.
  
**La sintaxis de Twig y la creación de componentes:**

  *Reto:* Twig tiene su propia sintaxis y al principio cuesta de entender. El reto fue aprender a crear una base para que extendieran en los demas twig para no repetir codigo .
  
  *Resolución:*  Cree todas las vistas con twig incluso cree algun componente para usar en las vistas no teniendo que copiar codigo  

## 4- Probas

Para comprobar que todo funcionaba correctamente, fui haciendo pruebas manuales a medida que programaba que funcionasen los CRUDS de las distintas entidades

### Pruebas Realizadas y Conclusiones:

  **Pruebas de Funcionalidades (El CRUD y los módulos):** Probé a fondo que todas las opciones de crear, leer, editar y borrar funcionaran correctamente 
  
  *Conclusión:* Los controladores de Symfony procesan bien las peticiones y los datos se guardan y eliminan de la base de datos sin dejarse nada por el camino.
  
  **Pruebas de Validaciones (Formularios seguros):** Forcé errores a propósito en los formularios, como intentar guardar un cliente sin correo electrónico o meter texto en los campos de dinero de contabilidad. 
  
  **Conclusión:** Las validaciones funcionan bien; la aplicación frena al usuario y le muestra un mensaje de aviso en lugar de enviar datos incorrectos al servidor.
  
  **Pruebas de Visualizaciones** Estuve revisando todas las pantallas desde el inspector del navegador simulando diferentes tamaños de pantalla (móvil, tablet y ordenador). *Conclusión:* Aunque no este principalmente pensada para moviles la app se puede utiliza
  
  **Pruebas con Mercure (Tiempo real):** Arranqué el servidor de Mercure a la vez que el de Symfony para comprobar si los mensajes llegaban bien. Al cambiar datos en el inventario, los cambios aparecían en la otra pantalla al instante sin retrasos.

### Problemas Encontrados y Soluciones:

  **Pantallazos de error en Twig por variables vacías.** Al hacer los componentes para el CRUD, si desde la base de datos venía un campo vacío (un `null`), la página web se rompía por completo con un error de Twig en lugar de simplemente no mostrar nada.
  
  *Solución:* Me tocó revisar los componentes y usar filtros de Twig para decirle al código qué hacer si un dato no venía, evitando así que se rompiera la aplicación.
  
  **Elementos que se descolocaban en pantallas medianas.** Al pasar el diseño de móvil a ordenador con las Media Queries, en las tablets algunos elementos de la sección de Logística y Contabilidad quedaban apelotonados y visualmente no se entendían bien.
  
  *Solución:* Ajusté el css para que se viera bien.

[**<-Anterior**](../../README.md)
