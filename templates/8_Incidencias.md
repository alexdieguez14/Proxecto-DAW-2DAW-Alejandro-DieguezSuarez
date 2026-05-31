# INCIDENCIAS E TAREFAS
- [INCIDENCIAS E TAREFAS](#incidencias-e-tarefas)
  - [1- Incidencias](#1--incidencias)
  - [2- Tarefas](#2--tarefas)

## 1- Incidencias

  | ID | Descripción | Estado | Solución |
  |----|-------------|--------|----------|
  | INC-01 | El texto del botón de registro aparecía desalineado (no centrado) |
   Resuelta | Añadido `justify-content: center` en `register.css` |
  | INC-02 | Al confirmar un pedido, el stock de los artículos no se descontaba
  de la base de datos | Resuelta | Añadida lógica en `createOrder()` para
  reducir el stock de cada artículo al crear el pedido |
  | INC-03 | Los pedidos pagados con tarjeta no generaban automáticamente el
  movimiento financiero en contabilidad | Resuelta | En `marcarEnviado()` se
  crea el `MovimientoFinanciero` de forma automática cuando el método de pago es
   tarjeta |
  | INC-04 | Los artículos sin categoría asignada no aparecían en la tienda |
  Resuelta | Añadido grupo "Sin categoría" en el método
  `groupArticulosByCategory()` del `ClienteController` |
  | INC-05 | Los filtros de los listados (logística, contabilidad, inventario)
  no funcionaban de forma consistente entre módulos | Resuelta | Creado
  `AbstractFilterType` como clase base reutilizable para todos los formularios
  de filtro |

## 2- Tarefas

  | ID | Descripción | Estado |
  |----|-------------|--------|
  | TAR-01 | Estructura base del proyecto Symfony: entidades, controladores, configuración inicial y base de datos | Completada |
  | TAR-02 | Módulo de administración: CRUD de artículos, categorías, proveedores y ubicaciones de almacén | Completada |
  | TAR-03 | Panel de logística: gestión de estados de pedidos (preparación, listo, enviado), albaranes y número de seguimiento | Completada |
  | TAR-04 | Panel de contabilidad: movimientos financieros, KPIs, gestión de pedidos y generación de facturas | Completada |
  | TAR-05 | Módulo de inventario: entradas de stock y control de ubicaciones en almacén | Completada |
  | TAR-06 | Sistema de autenticación, registro de usuarios y gestión de seguridad | Completada |
  | TAR-07 | Panel "Mi Cuenta": historial de pedidos, gestión de direcciones y métodos de pago guardados | Completada |
  | TAR-08 | Carrito de compra persistente con localStorage | Completada |
  | TAR-09 | Asistente de compra multipaso: selección de dirección de envío y método de pago | Completada |
  | TAR-10 | Sistema de alertas de stock bajo mediante eventos (StockBajoEvent y StockBajoSubscriber) | Completada |
  | TAR-11 | Filtros reutilizables en todos los listados mediant AbstractFilterType | Completada |
  | TAR-12 | Soporte multiidioma ES/EN en todas las pantallas con ficheros de traducción XLF | Completada |
  | TAR-13 | Integración de Mercure para notificaciones en tiempo real entre logística y contabilidad | Completada |




[**<-Anterior**](../../README.md)
