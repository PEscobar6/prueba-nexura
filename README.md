# Test Nexura
## Test técnico - Sistema administrativo de empleados

Se crea un sistema administrativo para empleados, con la funcionalidades de leer y crear.
Se realiza un sistema administrativo a través de una plantilla open source totalmente modificada por mí.

El sistema se realiza en Laravel, y para levantar el sistema, acontinuación dejaré una guía de instalación.

## Instalación y comandos 💻
El sistema require [Node.js](https://nodejs.org/) v10+ para correr.
El sistema require [Composer](https://getcomposer.org/download/) para correr.
El sistema corre cobre el puero 8000

Descarga el repositorio primero.

```sh
git clone prueba-nexura
```

Instala las dependecias de Laravel primero.

```sh
cd prueba-nexura
composer install
```

Instala las dependecias de NodeJS y corre en local.

```sh
cd prueba-nexura
npm install
npm run dev
```

Crea las tablas necesarias para el sistema con datos falsos.
Para esto se debe crear una base de datos con el nombre de 'prueba_nexura'

```sh
php artisan migrate
```

Levanta el proyecto de manera local

```sh
php artisan up
php artisan serve
```
Esto levantara el proyecto en el puerto 8000.
Verifica el despliegue navegando a la siguiente URL de tu navegador preferido

```sh
127.0.0.1:8000
```

## Licencia

MIT

**Free Software, Hell Yeah!**