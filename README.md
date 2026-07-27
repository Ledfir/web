# Web Cotizador

## Acerca del Proyecto

**Web Cotizador** es un sitio web administrable desarrollado con CodeIgniter 4 que proporciona un panel de administración completo para la gestión integral del sistema.

### Características Principales

- **Panel de Administración**: Interfaz intuitiva para administradores del sistema
- **Gestión de Usuarios**: Administración completa de usuarios del portal
- **Gestión de Cotizaciones**: Sistema para crear, editar y administrar cotizaciones
- **Configuración del Sistema**: Panel de configuración centralizado para ajustes de la aplicación

## Tecnología

Web Cotizador está construido sobre **CodeIgniter 4**, un framework PHP ligero, rápido, flexible y seguro.
Puedes obtener más información en el [sitio oficial de CodeIgniter](https://codeigniter.com).

Para consultar la documentación completa del framework, visita la [guía de usuario](https://codeigniter.com/user_guide/).

## Instalación y Configuración

### Requisitos Previos

- PHP 8.2 o superior
- Composer
- MySQL o MariaDB (opcional, según configuración)

### Pasos de Instalación

1. Clona o descarga el repositorio
2. Ejecuta `composer install` para instalar las dependencias
3. Copia el archivo `.env` desde la plantilla `env`:
   ```
   cp env .env
   ```
4. Configura las variables de entorno en el archivo `.env`, especialmente:
   - `app.baseURL`: URL base de la aplicación
   - `database.*`: Credenciales de la base de datos
5. Ejecuta las migraciones de base de datos (si aplica)
6. Accede a la aplicación a través de tu navegador

## Estructura del Proyecto

La estructura del proyecto sigue las convenciones estándar de CodeIgniter 4:

- **app/**: Código fuente de la aplicación
  - **Controllers/**: Controladores de la aplicación
  - **Models/**: Modelos de datos
  - **Views/**: Vistas HTML
  - **Config/**: Archivos de configuración
  - **Database/**: Migraciones y semillas de base de datos
- **public/**: Raíz pública del servidor web
- **tests/**: Pruebas unitarias y funcionales
- **writable/**: Directorio escribible para logs, caché y sesiones

## Requisitos del Servidor

### PHP

Se requiere **PHP 8.2 o superior** con las siguientes extensiones instaladas:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- json (habilitado por defecto)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) si usas MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) para consultas HTTP

### Base de Datos

- MySQL 5.7+ o MariaDB 10.2+ 
