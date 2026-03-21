# Anteproxecto

- [Anteproxecto](#anteproxecto)
  - [1- Idea do proxecto](#1--idea-do-proxecto)
  - [2- Contextualización](#2--contextualización)
  - [3- Estudio de alternativas e viabilidade](#3--estudio-de-alternativas-e-viabilidade)
    - [3.1- Estudio de alternativas](#31--estudio-de-alternativas)
    - [Alternativas](#alternativas)
    - [3.2 Xustificación da alternativa](#32-xustificación-da-alternativa)
  - [4- Requirimentos técnicos](#4--requirimentos-técnicos)
    - [Infraestructura:](#infraestructura)
    - [Backend](#backend)
    - [Frontend](#frontend)
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

- **A1 – Desarrollo desde cero con [Java Spring Boot](https://spring.io/projects/spring-boot) + HTML5 + CSS3 + JavaScript nativo**  
- **A2 – Desarrollo desde cero con [Node.js](https://nodejs.org/) + HTML5 + CSS3 + JavaScript nativo**  
- **A3 – Desarrollo desde cero con PHP MVC + HTML5 + CSS3 + JavaScript nativo**  
- **A4 – Desarrollo con [Laravel](https://laravel.com/) + [React.js](https://reactjs.org/) + Tailwind**  
- **A5 – Desarrollo con [Symfony](https://symfony.com/) + PHP + JavaScript + CSS + Twig**  
- **A6 – Desarrollo con [Python + Django](https://www.djangoproject.com/) + HTML5 + CSS3 + JavaScript**  

| **Alternativa** |  **Viabilidad técnica** | **Viabilidad económica** | **Temporalidad** | **Valoración Global** |
| ------ | ------ | ------ | ------ | ------ |
| **A1** | Baja-media (4/10): Spring Boot es potente pero con curva de aprendizaje elevada. **Fortalezas:** arquitectura sólida, escalable, profesional. **Debilidades:** configuración compleja y tiempo de aprendizaje alto. | Medio (6/10): Hosting con soporte Java o VPS. Software adicional gratuito. | Baja (3/10): desarrollo largo, 4-6 meses. | **5/10** |
| **A2** | Media-Alta (6/10): Node permite construir APIs REST fácilmente. **Fortalezas:** simplicidad, entorno JavaScript unificado. **Debilidades:** hay que estructurar bien el proyecto desde cero. | Alta (8/10): hosting Node.js económico o gratuito disponible. | Media (6/10): 2,5-4 meses. | **7/10** |
| **A3** | Media (7/10): PHP MVC es conocido, pero requiere programar rutas, seguridad y validaciones manualmente. **Fortalezas:** lenguaje conocido. **Debilidades:** mucho trabajo manual, mantenimiento más difícil que con Symfony. | Alta (9/10): Hosting PHP económico y software gratuito. | Media (6/10): 2,5-3 meses. | **7/10** |
| **A4** | Media (6/10): Laravel + React + Tailwind es potente y moderno. **Fortalezas:** stack profesional y modular. **Debilidades:** no se conoce React ni Tailwind, requiere aprendizaje adicional. | Alta (8/10): herramientas gratuitas, hosting PHP compatible. | Baja (5/10): curva de aprendizaje y configuración elevada, 4-5 meses. | **5/10** |
| **A5** | Alta (9/10): Symfony organiza rutas, seguridad, base de datos y permite usar Twig para plantillas dinámicas. **Fortalezas:** desarrollo estructurado, seguro, mantenible. **Debilidades:** requiere conocimientos de Symfony, aunque ya se ha visto en prácticas. | Alta (8/10): hosting PHP económico y compatible. | Alta (8/10): desarrollo organizado y rápido, 2-3 meses. | **9/10** |
| **A6** | Alta (8/10): Django incluye autenticación, ORM y herramientas de seguridad integradas. **Fortalezas:** desarrollo rápido, buena estructura, muchas funcionalidades integradas. **Debilidades:** requiere aprender Python y Django si no se tiene experiencia previa. | Media-Alta (7/10): hosting compatible con Python disponible en la nube. Software libre y gratuito. | Media (6/10): 3-4 meses debido al aprendizaje del framework. | **7/10** |



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

### Infraestructura:
- **Dominio web:** dominio de pruebas configurado con DNS apuntando al servidor de la aplicación.  
- **Hosting / Servidor:** Debian con Apache y PHP 8.2.  
- **Base de datos:** MySQL (en local para desarrollo y en Railway para producción).  
- **Almacenamiento:** espacio suficiente en Railway para la base de datos y archivos de la aplicación.  
- **Memoria:** contenedores Docker para reproducibilidad, gestión de memoria automática por el cloud.  
- **Seguridad:** HTTPS con certificado SSL de Let's Encrypt.  
- **Repositorios:** GitHub para control de versiones e integración con el despliegue automático en Railway.  

### Backend

- **Framework:** Symfony 6.x  
- **Lenguaje:** PHP 8.2  
- **Gestión de dependencias:** Composer  
- **ORM:** Doctrine para la gestión de la base de datos MySQL  
- **Seguridad y roles:** administrador, contabilidad, logística y cliente  
- **Controladores:** gestión de pedidos, usuarios y contabilidad  
- **Validación de datos:** Symfony Forms (lado servidor)  
- **Comunicación en tiempo real:** Mercure para el envío de actualizaciones desde el servidor  
- **Generación de documentos:** Dompdf para la creación de PDFs  
- **Pruebas:** PHPUnit para la validación del backend  
- **Motor de plantillas:** Twig (generación de vistas dinámicas)  

### Frontend

- **Lenguajes:** HTML5, CSS3 y JavaScript nativo  
- **Estilo:** CSS básico sin frameworks adicionales  

- **Funcionalidades en el lado cliente:**
  - Validación básica de formularios con JavaScript  
  - Interacción con el usuario (eventos, botones, formularios)  
  - Actualización dinámica de datos recibidos desde el backend (Mercure)  

- **Visualización:**
  - Las vistas son generadas en el servidor mediante Twig y renderizadas en el navegador  
  
## 5- Planificación

<img width="8192" height="1962" alt="Versi Project Planning-2026-03-11-173827" src="https://github.com/user-attachments/assets/b6056181-7410-4e3a-aa32-fbd25476970e" />

Planificación del desarrollo del proyecto (versión profesional/demo y codificación extendida)

| Fase / Tarea | Fecha de inicio | Duración estimada | Fecha fin | Descripción |
|---|---|---|---|---|
| Definición de la idea y anteproyecto | 03/03/2026 | 1 semana | 10/03/2026 | Redacción del anteproyecto, definición inicial del proyecto y recopilación de información. |
| Investigación del contexto / empresa | 10/03/2026 | 1 semana | 17/03/2026 | Investigación sobre el sector, análisis de proyectos similares y estudio de las necesidades que resolverá la aplicación. |
| Análisis de requisitos | 17/03/2026 | 1 semana | 24/03/2026 | Identificación de funcionalidades, definición de usuarios, casos de uso y requisitos del sistema. |
| Diseño de la base de datos | 24/03/2026 | 1 semana | 31/03/2026 | Modelado de entidades, relaciones y estructura de la base de datos. |
| Diseño de la arquitectura | 31/03/2026 | 1 semana | 07/04/2026 | Definición de la arquitectura del sistema y organización del proyecto en Symfony. |
| Diseño de interfaz | 07/04/2026 | 1 semana | 14/04/2026 | Creación de wireframes, prototipo de interfaz y diseño de navegación. |
| Desarrollo backend | 14/04/2026 | 4 semanas | 12/05/2026 | Implementación de lógica del sistema, controladores, entidades y servicios en Symfony, gestión de dependencias con Composer, integración con Mercure para WebSockets y generación de PDFs con Dompdf. Entorno reproducible mediante Docker Compose y control de versiones con Git. |
| Desarrollo frontend | 21/04/2026 | 3 semanas | 12/05/2026 | Creación de vistas con Twig, formularios y estilos en HTML, CSS y JavaScript nativo. Validación de formularios del lado cliente y actualización dinámica con Mercure. Integración con Dompdf para generación de PDFs. |
| Integración del sistema | 12/05/2026 | 1 semana | 19/05/2026 | Conexión entre frontend, backend y base de datos; comprobación de comunicación en tiempo real mediante Mercure; despliegue en Railway para pruebas funcionales. |
| Demo funcional | 19/05/2026 | 1 semana | 26/05/2026 | Presentación de la aplicación a posibles usuarios/profesores para recogida de feedback y pruebas de usabilidad. |
| Pruebas del sistema | 26/05/2026 | 1 semana | 02/06/2026 | Pruebas funcionales y unitarias del sistema, validación de PDFs y comprobación de la comunicación en tiempo real; envío de correcciones al repositorio GitHub. |
| Corrección de errores | 02/06/2026 | 1 semana | 09/06/2026 | Ajustes finales, optimización del código y preparación para el pre-lanzamiento; inicio de documentación parcial. |
| Puesta para venta / Preproducción | 09/06/2026 | 1 semana | 16/06/2026 | Preparación del sistema para lanzamiento: configuración de dominio final, seguridad, backups y verificación de entornos; continuación de documentación parcial. |
| Implantación | 16/06/2026 | 1 semana | 23/06/2026 | Despliegue definitivo en producción, migración de datos y validación del sistema en Railway. |
| Documentación final | 23/06/2026 | 1 semana | 30/06/2026 | Completar manual técnico, manual de usuario y memoria final; actualización del repositorio público y envío de correo de entrega. |

[**<-Anterior**](../README.md)

