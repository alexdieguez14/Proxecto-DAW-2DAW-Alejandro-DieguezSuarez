# Anteproxecto

- [Anteproxecto](#anteproxecto)
  - [1- Idea do proxecto](#1--idea-do-proxecto)
  - [2- Contextualización](#2--contextualización)
  - [3- Estudio de alternativas e viabilidade](#3--estudio-de-alternativas-e-viabilidade)
    - [3.1- Estudio de alternativas](#31--estudio-de-alternativas)
    - [3.2 Xustificación da alternativa](#32-xustificación-da-alternativa)
  - [4- Requirimentos técnicos](#4--requirimentos-técnicos)
  - [5- Planificación](#5--planificación)

## 1- Idea do proxecto

Este proyecto consiste en crear una aplicación web para ayudar a gestionar una empresa de forma más sencilla. La plataforma tendrá diferentes tipos de usuarios, como administrador, contabilidad , logistica y cliente, y cada uno podrá acceder a distintas funciones. Desde la aplicación se podrán ver y gestionar pedidos y consultar información relacionada con la contabilidad, facilitando así la organización de la empresa.

## 2- Contextualización

El proyecto consiste en el desarrollo de una aplicación web destinada a mejorar la gestión interna de una empresa, especialmente en lo relacionado con la gestión de pedidos y el control de cierta información administrativa. La aplicación contará con varios tipos de usuarios o roles: administrador, contabilidad, logística y cliente. Cada uno tendrá acceso a diferentes funcionalidades según sus necesidades. Por ejemplo, los clientes podrán realizar y consultar pedidos, el departamento de logística se encargará de gestionarlos, contabilidad podrá revisar la información económica y el administrador tendrá control general sobre el sistema.

El objetivo principal de la aplicación es centralizar la información de la empresa en una única plataforma, facilitando la organización del trabajo y el acceso a los datos de forma rápida y sencilla.

Además, el desarrollo de esta aplicación podría suponer una oportunidad de negocio, ya que muchas pequeñas y medianas empresas necesitan herramientas de gestión simples y accesibles. La aplicación podría adaptarse a distintas empresas y ofrecerse como un servicio web o como un producto personalizable según las necesidades de cada cliente.


## 3- Estudio de alternativas e viabilidade

### 3.1- Estudio de alternativas

Para el desarrollo de la aplicación web de gestión de pedidos y contabilidad, se han analizado varias alternativas tecnológicas considerando criterios técnicos, económicos, temporalidad y recursos disponibles.

### Alternativas

- **A1 – Desarrollo desde cero con Java Spring Boot + HTML5 + CSS3 + JavaScript nativo**  
- **A2 – Desarrollo desde cero con Node.js + HTML5 + CSS3 + JavaScript nativo**  
- **A3 – Desarrollo desde cero con PHP MVC + HTML5 + CSS3 + JavaScript nativo**  
- **A4 – Desarrollo con Laravel + React.js + Tailwind**  
- **A5 – Desarrollo con Symfony + PHP + JavaScript + CSS + Twig**  

| **Alternativa** |  **Viabilidad técnica** | **Viabilidad económica** | **Temporalidad** | **Valoración Global** |
| ------ | ------ | ------ | ------ | ------ |
| **A1** | Baixa-media (4/10): Java Spring Boot es potente pero con curva de aprendizaje elevada. **Fortalezas:** Arquitectura sólida, escalable, profesional. **Debilidades:** Configuración compleja, tiempo de aprendizaje alto. | Medio (6/10): Necesita hosting con soporte Java o VPS. Software adicional gratuito. | Viabilidad baja (3/10): Desarrollo largo, 4-6 meses. | **5/10** |
| **A2** | Media-Alta (6/10): Node permite construir APIs REST fácilmente. **Fortalezas:** Simplicidad, entorno JavaScript unificado. **Debilidades:** Hay que estructurar bien el proyecto desde cero. | Alta (8/10): Hosting Node.js económico o gratuito disponible. | Viabilidad media (6/10): Duración 2,5-4 meses. | **7/10** |
| **A3** | Media (7/10): PHP MVC es conocido, pero requiere programar rutas, seguridad y validaciones manualmente. **Fortalezas:** Lenguaje conocido. **Debilidades:** Mucho trabajo manual, mantenimiento más difícil que con Symfony. | Alta (9/10): Hosting PHP económico y software gratuito. | Viabilidad media (6/10): Desarrollo 2,5-3 meses. | **7/10** |
| **A4** | Media (6/10): Laravel + React + Tailwind es potente y moderno. **Fortalezas:** Stack profesional y modular. **Debilidades:** No se conoce React ni Tailwind, por lo que habría que invertir tiempo en pruebas y aprendizaje adicional. | Alta (8/10): Herramientas gratuitas, hosting PHP compatible. | Viabilidad baja (5/10): Curva de aprendizaje y configuración elevada, 4-5 meses. | **5/10** |
| **A5** | Alta (9/10): Symfony organiza rutas, seguridad, base de datos y permite usar Twig para plantillas dinámicas. **Fortalezas:** Desarrollo estructurado, seguro, mantenible. **Debilidades:** Requiere conocer Symfony, aunque se ha visto en prácticas. | Alta (8/10): Hosting PHP económico y compatible. | Alta (8/10): Desarrollo más organizado y rápido que PHP nativo, 2-3 meses. | **9/10** |



### 3.2 Xustificación da alternativa

La alternativa **A5 (Symfony + PHP + Twig)** se consolida como la más viable globalmente, y por eso es la elegida, ya que:

- Permite un desarrollo estructurado, seguro y mantenible gracias a las herramientas que ofrece Symfony.
- Aprovecha los conocimientos previos de PHP adquiridos en las prácticas, reduciendo la curva de aprendizaje.
- Facilita la gestión de distintos roles de usuario (administrador, contabilidad, logística y cliente) de manera eficiente.
- Permite crear un prototipo funcional en un tiempo razonable, optimizando el desarrollo frente a PHP nativo.
- No requiere aprender frameworks frontend adicionales, ya que Twig permite crear plantillas dinámicas de forma sencilla.

Las alternativas **A1 (Spring Boot)** y **A4 (Laravel + React + Tailwind)** resultan menos adecuadas debido a su complejidad y tiempo de aprendizaje adicional.  
**A2 (Node.js)** podría considerarse como opción moderna, pero su aprendizaje y configuración desde cero serían más lentos, y **A3 (PHP MVC nativo)** implica demasiado trabajo manual y menos organización del proyecto que Symfony.

## 4- Requirimentos técnicos

Para desarrollar el proyecto se utilizarán las siguientes tecnologías y recursos:

### Infraestructura
- **Hosting:** servidor con soporte PHP 8 y Symfony.  
- **Base de datos:** MySQL para guardar pedidos, usuarios y contabilidad.  
- **Dominio y almacenamiento:** dominio propio y espacio suficiente en el hosting para la aplicación y la base de datos.  

### Backend
- **Lenguaje:** PHP 8  
- **Framework:** Symfony, con Twig para las plantillas.  
- **Gestión de dependencias:** Composer  
- **Base de datos:** MySQL con Doctrine ORM  

### Frontend
- **Lenguajes:** HTML5, CSS3 y JavaScript  
- **Plantillas:** Twig para generar las vistas de manera sencilla  
- **Estilo:** CSS básico, sin frameworks adicionales  

## 5- Planificación

El proyecto se desarrollará siguiendo estas fases:

| Fase / Entrega | Fecha de inicio | Duración estimada | Fecha de entrega | Descripción de tareas |
|----------------|----------------|-----------------|----------------|--------------------|
| Anteproyecto | 03/03/2026 | 1 semana | 11/03/2026 | Redacción del anteproyecto, definición inicial de la idea y recopilación de información. |
| Análisis | 11/03/2026 | 1,5 semanas | 23/03/2026 | Definición de funcionalidades, roles de usuario y estructura básica de la base de datos. |
| Diseño | 22/03/2026 | 2,5 semanas | 08/04/2026 | Diseño de la arquitectura del sistema, wireframes y prototipo de interfaz. |
| Codificación | 08/04/2026 | 3 semanas |  | Desarrollo de backend con Symfony, frontend con Twig, integración de base de datos, pruebas funcionales y ajustes finales. |
| 1ª Entrega | - | - | 29/04/2026 | Presentación del avance inicial del proyecto y prototipo funcional. |
| 2ª Entrega | - | - | 25/05/2026 | Entrega del proyecto completo, con todas las funcionalidades implementadas y pruebas realizadas. |
| Implantación | 25/05/2026 | 1 semana | 01/06/2026 | Configuración final en el servidor de producción y ajustes finales. |
| Entrega final | 01/06/2026 | 1 semana | 08/06/2026 | Presentación y entrega del proyecto completo junto con la documentación final. |


> **Nota:**
> - Las fechas de inicio son aproximadas y sirven para planificar el trabajo.  
> - Las fechas de entrega son las oficiales que aparecen en la memoria del proyecto y marca el fin de estas.  
> - La fase de **codificación** es la más larga, ya que incluye la implementación completa y las pruebas de todas las funcionalidades.

[**<-Anterior**](../README.md)

