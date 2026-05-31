# FASE DE IMPLANTACIÓN

- [FASE DE IMPLANTACIÓN](#fase-de-implantación)
  - [1- Manual técnico](#1--manual-técnico)
    - [1.1- Instalación](#11--instalación)
      - [Requisitos de hardware](#requisitos-de-hardware)
      - [Software necesario](#software-necesario)
      - [Servicios Docker Compose](#servicios-docker-compose)
    - [1.2- Administración do sistema](#12--administración-do-sistema)
      - [Copias de seguridad de la base de datos](#copias-de-seguridad-de-la-base-de-datos)
      - [Copias de seguridad del sistema](#copias-de-seguridad-del-sistema)
      - [Gestión de usuarios](#gestión-de-usuarios)
      - [Gestión de la seguridad](#gestión-de-la-seguridad)
      - [Gestión de incidencias](#gestión-de-incidencias)
  - [2- Manual de usuario](#2--manual-de-usuario)
    - [Acceso a la aplicación](#acceso-a-la-aplicación)
  - [3- Melloras futuras](#3--melloras-futuras)

## 1- Manual técnico

### 1.1- Instalación

#### Requisitos de hardware

  | Recurso | Mínimo | Recomendado |
  |---------|--------|-------------|
  | CPU | 2 núcleos | 4 núcleos |
  | RAM | 2 GB | 4 GB |
  | Disco | 5 GB libres | 10 GB libres |

  No se requiere servidor en la nube; la aplicación está diseñada para ejecutarse en local o en un servidor privado con Docker.

  ---

#### Software necesario

  | Software | Versión mínima | Notas |
  |----------|----------------|-------|
  | Docker Engine | 24.x | Incluye el runtime de contenedores |
  | Docker Compose | v2.x | Integrado en Docker Desktop |
  | Git | 2.x | Para clonar el repositorio |
  | Navegador web | Cualquier moderno | Chrome, Firefox… |

  No es necesario instalar PHP, Apache ni MySQl en local, todo va mediante contenedore independientes.

  ---

#### Servicios Docker Compose

  | Contenedor | Imagen | Puerto | Función |
  |------------|--------|--------|---------|
  | `symfony-app` | PHP 8.2 + Apache (Dockerfile propio) | 8000 | Aplicación web
   |
  | `symfony-mysql` | mysql:8.0 | 3306 | Base de datos |
  | `symfony-mercure` | dunglas/mercure | 3000 | Notificaciones en tiempo real |
  | `symfony-phpmyadmin` | phpmyadmin:latest | 8080 | Administración visual de la BD |
  
  Para montar el proyecto y probarlo en local, seguir las instrucciones
  detalladas en el README del repositorio:
  [https://github.com/alexdieguez14/O_porto_do_sabor_Proxecto_Docker](https://github.com/alexdieguez14/O_porto_do_sabor_Proxecto_Docker)

   Los roles disponibles en la aplicación son:

  | Rol | Acceso |
  |-----|--------|
  | `ROLE_ADMIN` | Panel de administración completo |
  | `ROLE_LOGISTICA` | Gestión de pedidos e inventario |
  | `ROLE_CONTABILIDAD` | Gestión financiera y facturación |
  | `ROLE_CLIENTE` | Tienda online y cuenta personal |

### 1.2- Administración do sistema

#### Copias de seguridad de la base de datos

  Ejecutar el siguiente comando para generar un dump completo de la base de
  datos:

  ```bash
  docker exec symfony-mysql mysqldump -u root -proot symfony_db > backup_$(date
  +%Y%m%d).sql
  ```

  Para restaurar un backup:

  ```bash
  docker exec -i symfony-mysql mysql -u root -proot symfony_db <
  backup_YYYYMMDD.sql
  ```

  Se recomienda automatizar esta tarea mediante un cron que ejecute el comando
  diariamente y guarde los dumps en un directorio externo al contenedor.

  ---

#### Copias de seguridad del sistema

  Los volúmenes de Docker que almacenan datos persistentes son:

  | Volumen | Contenido |
  |---------|-----------|
  | `symfony-mysql` | Datos de la base de datos MySQL |

  Para hacer backup completo del volumen:

  ```bash
  docker run --rm -v symfony-mysql:/data -v $(pwd):/backup alpine \ tar czf /backup/mysql_volume_$(date +%Y%m%d).tar.gz /data
  ```

  ---

#### Gestión de usuarios

  Los usuarios se gestionan desde el panel de administración (`/admin`) o
  directamente a través de phpMyAdmin (`http://localhost:8080`).

  Los roles disponibles en la aplicación son:

  | Rol | Acceso |
  |-----|--------|
  | `ROLE_ADMIN` | Panel de administración completo |
  | `ROLE_LOGISTICA` | Gestión de pedidos e inventario |
  | `ROLE_CONTABILIDAD` | Gestión financiera y facturación |
  | `ROLE_CLIENTE` | Tienda online y cuenta personal |

  Para crear un nuevo empleado, el administrador accede a `/admin` y usa el
  formulario de alta de empleado. La contraseña inicial debe comunicarse al
  usuario de forma segura.

  ---

#### Gestión de la seguridad

- Todas las acciones de escritura (marcar pedidos, registrar pagos, crear  movimientos) están protegidas con **tokens CSRF**.
- El acceso a cada sección está controlado mediante el sistema de roles de **Symfony Security**.
- Las contraseñas se almacenan cifradas con **bcrypt** mediante el componente `password-hasher` de Symfony.
- En caso de sospecha de acceso no autorizado, revocar las sesiones activas reiniciando el contenedor de la aplicación:

  ```bash
  docker restart symfony-app
  ```

  ---

#### Gestión de incidencias

  **Incidencias de sistema — acceso a los logs:**

  ```bash
  # Logs de la aplicación PHP/Apache
  docker logs symfony-app --tail 100

  # Logs de la base de datos
  docker logs symfony-mysql --tail 50

  # Logs de Mercure (notificaciones en tiempo real)
  docker logs symfony-mercure --tail 50
  ```

  **Incidencias de software más frecuentes:**

  | Síntoma | Causa probable | Solución |
  |---------|---------------|----------|
  | Página en blanco / error 500 | Caché desactualizada | `docker exec symfony-app php bin/console cache:clear` |
  | Error de conexión a la BD | Contenedor MySQL no iniciado | `docker compose up -d symfony-mysql` |
  | Notificaciones en tiempo real no funcionan | Contenedor Mercure caído | `docker compose up -d symfony-mercure` |
  | Error 403 en acciones de formulario | Token CSRF caducado | Recargar la página y repetir la acción |

  ---

## 2- Manual de usuario

El manual de usuario completo está disponible en el siguiente enlace:

  [Descargar manual de usuario](https://drive.google.com/file/d/17pPrJisV1TJu2sIAISHC4HFX6m2AfFw9/view?usp=sharing)

  ### Acceso a la aplicación

  1. Abrir el navegador en `http://localhost:8000`
  2. Hacer clic en **Iniciar sesión** e introducir el email y la contraseña
  3. El sistema redirige automáticamente al panel correspondiente según el rol
  del usuario


## 3- Melloras futuras

  - **Integración con pasarela de pago real:** incorporar Stripe o PayPal para
  procesar pagos con tarjeta de forma segura y automatizada, eliminando la
  gestión manual en contabilidad.

  - **Notificaciones por email:** enviar confirmaciones de pedido, avisos de
  envío con número de seguimiento y facturas al cliente por correo electrónico
  usando Symfony Mailer.

  - **Alertas de stock bajo:** notificar automáticamente al administrador cuando
   el stock de un artículo caiga por debajo de un umbral configurable.

  - **Panel de informes y estadísticas:** gráficas de evolución de ventas,
  productos más vendidos y comparativas mensuales para facilitar la toma de
  decisiones.

  - **API REST:** exponer los principales recursos (productos, pedidos, stock)
  mediante una API REST autenticada con JWT, permitiendo integraciones con
  aplicaciones de terceros o una futura app móvil.

  - **Gestión de devoluciones:** implementar un flujo completo de devoluciones y
   reembolsos integrado con el módulo de contabilidad.

  - **Multilingüe ampliado:** la aplicación ya cuenta con soporte de
  internacionalización con Symfony Translation; ampliar los idiomas disponibles
  añadiendo traducciones a otros idiomas.

  - **Integración con la API de Google:** conectar con Google Maps para la
  validación y autocompletado de direcciones de envío, y con Google Analytics
  para el seguimiento del comportamiento de los usuarios en la tienda online.



[**<-Anterior**](../../README.md)
