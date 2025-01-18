```markdown
# Proyecto Laravel 11 con Vue, Tailwind y SQLite

Este es un proyecto que utiliza **Laravel 11**, **Vue.js**, **Tailwind CSS** y **SQLite**. A continuación, te proporcionamos las instrucciones para instalar y ejecutar el proyecto en tu máquina local.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalados los siguientes programas en tu sistema:

- **PHP** (versión 8.1 o superior)
- **Composer** (gestor de dependencias de PHP)
- **Node.js** y **npm** (gestores de paquetes de JavaScript)
- **SQLite** (base de datos ligera)

Puedes verificar si los tienes instalados con los siguientes comandos:

```bash
php -v
composer -v
node -v
npm -v
```

## Instalación

Sigue estos pasos para configurar el proyecto en tu máquina local:

### 1. Clonar el repositorio

Primero, clona el repositorio en tu máquina local:

```bash
git clone https://github.com/fatorresd/Login-Laravel-Vue-Tailwind/
cd tu_repositorio
```

### 2. Instalar las dependencias de PHP

Instala las dependencias de PHP con Composer:

```bash
composer install
```

Este comando descargará todas las dependencias de Laravel.

### 3. Configurar el archivo `.env`

Copia el archivo `.env.example` y renómbralo a `.env`:

```bash
cp .env.example .env
```

### 4. Configurar la base de datos (SQLite)

Asegúrate de tener un archivo de base de datos SQLite. Si no lo tienes, crea uno vacío en la carpeta `database` del proyecto:

```bash
touch database/database.sqlite
```

En el archivo `.env`, configura las siguientes variables para usar SQLite como base de datos:

```env
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
```

### 5. Generar la clave de la aplicación

Ejecuta el siguiente comando para generar la clave de la aplicación Laravel:

```bash
php artisan key:generate
```

### 6. Ejecutar las migraciones de la base de datos

Ejecuta las migraciones para crear las tablas necesarias en la base de datos SQLite:

```bash
php artisan migrate
```

### 7. Instalar las dependencias de JavaScript

Instala las dependencias de JavaScript con npm:

```bash
npm install
```

### 8. Compilar los assets con Laravel Mix

Compila los archivos de Vue y Tailwind CSS:

```bash
npm run dev
```

Este comando compilará tus archivos de Vue y Tailwind en el directorio `public`.

## Ejecutar el proyecto

Ahora puedes ejecutar el proyecto utilizando el servidor embebido de Laravel:

```bash
php artisan serve
```

El servidor estará corriendo en `http://127.0.0.1:8000`.

## Uso del proyecto

Una vez que el servidor esté corriendo, puedes acceder a la aplicación en tu navegador. Las rutas y vistas están configuradas para usar Vue.js como frontend y Tailwind CSS para la estilización.

### Acceso a la API

Si el proyecto tiene endpoints API, puedes acceder a ellos desde las rutas correspondientes. Asegúrate de que los controladores y las rutas estén configuradas correctamente en el backend.

## Desarrollando con Vue

El proyecto está configurado para usar **Vue.js** en el frontend. Si deseas hacer cambios en la interfaz, puedes editar los archivos Vue ubicados en la carpeta `resources/js/components`.

Después de hacer cambios en los archivos Vue, ejecuta nuevamente:

```bash
npm run dev
```

Ejecutar igualmente el backend:
```bash
php artisan serve
```


## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir al proyecto, sigue estos pasos:

1. Forkea el repositorio.
2. Crea una nueva rama para tu característica o corrección (`git checkout -b feature/nueva-caracteristica`).
3. Haz tus cambios y realiza un commit (`git commit -m 'Añadir nueva característica'`).
4. Empuja tus cambios a tu repositorio (`git push origin feature/nueva-caracteristica`).
5. Abre un pull request en GitHub.

## Licencia

Este proyecto está bajo la Licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.
```
