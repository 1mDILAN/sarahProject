# Documentación de Configuración y Ejecución del Proyecto SarahProject

## Introducción

Este documento proporciona instrucciones detalladas para configurar y ejecutar el proyecto SarahProject, un sistema de administración de recursos humanos (SARH) desarrollado en Laravel.

## Requisitos Previos

Antes de comenzar, asegúrese de tener instalados los siguientes requisitos en su sistema:

- PHP >= 7.4
- Composer
- MySQL o cualquier otro sistema de gestión de bases de datos compatible con Laravel
- Git

## Configuración del Proyecto

Siga los pasos a continuación para configurar el proyecto SarahProject:

1. **Clonar el Repositorio:**

   ```
   git clone <URL_DEL_REPOSITORIO>
   ```

2. **Instalar Dependencias:**

   Navegue hasta el directorio del proyecto y ejecute el siguiente comando:

   ```
   composer install
   ```

3. **Configurar Archivo de Entorno:**

   Duplique el archivo `.env.example` y renómbrelo como `.env`. Luego, actualice las siguientes configuraciones según su entorno:

   - `DB_CONNECTION`: Configúrelo para su sistema de gestión de bases de datos (por ejemplo, `mysql`).
   - `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`: Configure estos parámetros para acceder a su base de datos.

4. **Generar Clave de Aplicación:**

   Ejecute el siguiente comando para generar una nueva clave de aplicación:

   ```
   php artisan key:generate
   ```

5. **Ejecutar Migraciones:**

   Esto creará las tablas necesarias en la base de datos:

   ```
   php artisan migrate
   ```

6. **Iniciar Servidor de Desarrollo:**

   ```
   php artisan serve
   ```

7. **Acceder a la Aplicación:**

   Abra su navegador web y vaya a `http://localhost:8000` (o la URL proporcionada por el comando anterior) para acceder a la aplicación SarahProject.

## Uso de la Aplicación

Una vez que la aplicación esté configurada y en funcionamiento, puede comenzar a utilizarla para gestionar la información de empleados, departamentos y registros de asistencia. A continuación se detallan algunas operaciones comunes:

- **Crear Empleados/Departamentos/Asistencias:** Acceda a las interfaces de usuario proporcionadas para agregar nueva información a la base de datos.
- **Editar Empleados/Departamentos/Asistencias:** Utilice las opciones de edición disponibles en la interfaz de usuario para actualizar la información existente.
- **Eliminar Empleados/Departamentos/Asistencias:** Elimine registros no deseados a través de la interfaz de usuario.

## Conclusión

Con estas instrucciones, debería poder configurar y ejecutar el proyecto SarahProject en su entorno local. Si encuentra algún problema durante el proceso de configuración, consulte la documentación oficial de Laravel o comuníquese con el equipo de desarrollo para obtener ayuda adicional.

¡Gracias por utilizar SarahProject!
