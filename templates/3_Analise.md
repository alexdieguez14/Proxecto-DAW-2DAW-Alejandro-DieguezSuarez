# Requerimientos do sistema

- [Requerimientos do sistema](#requerimientos-do-sistema)
  - [1- Descrición Xeral](#1--descrición-xeral)
  - [2- Funcionalidades](#2--funcionalidades)
    - [Funcionamiento](#funcionamiento)
  - [3- Tipos de usuarios](#3--tipos-de-usuarios)
  - [4- Contorno operacional](#4--contorno-operacional)
  - [5- Normativa](#5--normativa)
  - [6- Melloras futuras](#6--melloras-futuras)

## 1- Descrición Xeral

En este apartado se explican los requisitos de la aplicación web para gestionar pedidos dentro de una empresa.

La idea es tener una plataforma donde se pueda controlar todo desde un mismo sitio: usuarios, pedidos y algo de información de contabilidad. La aplicación se usará desde el navegador, sin necesidad de instalar nada.

Habrá distintos tipos de usuarios (administrador, contabilidad, logística y cliente), y cada uno podrá hacer cosas diferentes según su rol.

El objetivo es facilitar la organización de la empresa y hacer más sencillo el seguimiento de los pedidos.

## 2- Funcionalidades


Estas son las principales cosas que permitirá hacer la aplicación:

| Acción | Descripción |
|--------|------------|
| Registro de usuarios | Crear nuevos usuarios en el sistema |
| Inicio de sesión | Acceder a la aplicación con usuario y contraseña |
| Gestión de usuarios | El administrador puede crear, editar o eliminar usuarios |
| Crear pedidos | Los clientes pueden hacer pedidos |
| Ver pedidos | Los usuarios pueden consultar los pedidos |
| Cambiar estado de pedidos | Logística puede actualizar el estado (pendiente, enviado, etc.) |
| Alta de artículos | Logística puede dar de alta stock de productos para la venta |
| Modificar artículos | Logística puede editar información de los productos |
| Ver datos de contabilidad | Contabilidad puede consultar información económica |
| Generar facturas | Crear PDFs con los datos de los pedidos |
| Actualización en tiempo real | Ver cambios sin recargar la página |

### Funcionamiento
- **Entrada:** datos que introduce el usuario en formularios  
- **Proceso:** el sistema procesa y guarda la información en la base de datos  
- **Salida:** se muestran los datos actualizados en vistas o se generan documentos (PDF)


## 3- Tipos de usuarios

En la aplicación habrá varios tipos de usuarios:

- **Administrador**
  - Puede hacer todo
  - Gestiona usuarios
  - Controla el sistema

- **Contabilidad**
  - Ve información económica
  - Consulta facturas
  - Añade pedidos y facturas de gastos

- **Logística**
  - Gestiona los pedidos
  - Cambia el estado de los pedidos
  - Da de alta stock de los productos y su localización

- **Cliente**
  - Hace pedidos
  - Consulta sus pedidos


## 4- Contorno operacional

Para usar la aplicación solo hace falta:

- Un navegador web (Chrome, Firefox, etc.)
- Conexión a internet

No hace falta instalar programas.

## 5- Normativa

La aplicación cumplirá con las leyes y regulaciones vigentes de protección de datos:

- **Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDPGDD)**: Ley española que regula el tratamiento de los datos personales, los derechos de los usuarios y las obligaciones de las empresas que manejan estos datos.  
- **Reglamento General de Protección de Datos (RGPD/GDPR) de la Unión Europea**: Normativa europea que establece cómo deben tratarse y protegerse los datos personales de los ciudadanos de la UE.

Para cumplir con estas normas, la aplicación incluirá:

- Aviso legal donde se indique quién es responsable del tratamiento de los datos
   - Responsable del tratamiento:
      Nombre de la empresa:  O porto do Sabor.
      Domicilio: 
      Correo electrónico: oportodosabor@gmail.com. 
      Teléfono: 4394839444
      NIF/CIF: 11111212
      
      Finalidad del tratamiento:
      Los datos personales facilitados por los usuarios se tratarán con la finalidad de [describir propósito, ej. prestar servicios, gestionar solicitudes, enviar información comercial].
      
      Legitimación:
      El tratamiento se basa en el consentimiento del usuario, la ejecución de un contrato y/o el cumplimiento de obligaciones legales.
      
      Destinatarios:
      No se cederán datos a terceros salvo obligación legal o prestación de servicios necesaria (ej. proveedores de hosting).
      
      Derechos de los usuarios:
      Los usuarios pueden ejercer sus derechos de acceso, rectificación, supresión, limitación, portabilidad y oposición mediante el correo electrónico indicado.
  
- Política de privacidad explicando qué datos se recogen y para qué se utilizan
    - En O porto do sabor nos comprometemos a proteger sus datos personales. La presente política describe qué información recopilamos y cómo la usamos.

      Datos recopilados:
      - Información de contacto: nombre, correo electrónico, teléfono.
      - Información de uso: interacción con la aplicación, preferencias.
      
      Finalidad del tratamiento:
      - Proveer los servicios solicitados.
      - Mejorar la experiencia del usuario.
      - Enviar comunicaciones relacionadas con el servicio, siempre que haya consentimiento.
      
      Base legal:
      - Consentimiento del usuario.
      - Cumplimiento contractual.
      - Obligaciones legales.
      
      Conservación de datos:
      Los datos se conservarán mientras sean necesarios para cumplir la finalidad indicada o según la legislación vigente.
      
      Derechos del usuario:
      - Acceso, rectificación, supresión.
      - Limitación u oposición al tratamiento.
      - Portabilidad de los datos.
      Para ejercerlos, contacte con oportodosabor@gmail.com.
    
- Política de cookies mostrando su uso y dando opción de aceptarlas o rechazarlas
    -Nuestra aplicación utiliza cookies propias y de terceros para mejorar la experiencia del usuario y analizar el uso del servicio.

    Tipos de cookies:
    - Técnicas: necesarias para el funcionamiento de la aplicación.
    - Analíticas: para medir el rendimiento y uso de la app.
    - Publicitarias: mostrar publicidad relevante según intereses.
    
    Consentimiento:
    Al continuar usando la aplicación, acepta el uso de cookies. Puede configurar sus preferencias o rechazarlas en cualquier momento desde este enlace.
    
    Revocación del consentimiento:
    El usuario puede modificar o revocar su consentimiento sobre cookies mediante la configuración de su navegador o desde el apartado de preferencias de cookies.
    
    Además, se garantizará la seguridad y confidencialidad de los datos de los usuarios mediante autenticación y control de acceso.

## 6- Melloras futuras

En el futuro se podrían añadir mejoras como:

- Aplicación móvil  
- Pagos online  
- Estadísticas más avanzadas  
- Mejor diseño visual 

[**<-Anterior**](../../README.md)
