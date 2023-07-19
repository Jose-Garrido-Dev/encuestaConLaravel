<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# encuestaConLaravel
# Presentación del Proyecto

## Descripción
El proyecto desarrollado en Laravel 10 es un sistema de autenticación y gestión de usuarios que utiliza Jetstream y Livewire para la implementación del login y la administración de usuarios. El frontend se diseñó con Tailwind y se utilizó AdminLTE y Bootstrap para la creación del dashboard de administración de sectores. La base de datos MySQL se utilizó para almacenar la información de los usuarios y sus perfiles, cabe destacar que el proyecto es totalmente responsivo y adaptable a cualquier dispositivo.

El login del proyecto

![login](https://github.com/Jose-Garrido-Dev/encuestaConLaravel/assets/58966474/c0a6971f-cd5c-49e9-8903-fd210059d8b3)


## Edición de datos


![edicion datos](https://github.com/Jose-Garrido-Dev/encuestaConLaravel/assets/58966474/158fd94d-9141-413e-9df8-65f05c64465c)



## Características Principales
- **Autenticación con Jetstream y Livewire**: Se implementó un sistema de autenticación seguro y eficiente utilizando Jetstream y Livewire, lo que permite a los usuarios iniciar sesión y proteger sus cuentas.

- **Dashboard de Administración de Sectores**: El sistema cuenta con un panel de administración donde los usuarios pueden gestionar los sectores y realizar diversas acciones.

- **Gestión de Perfil de Usuarios**: Los usuarios pueden editar su perfil y modificar su contraseña desde la barra lateral, lo que brinda una experiencia de usuario personalizada.

  
- **Perfil Evaluado**: El evaluado solo tendrá acceso al dashboard de bienvenida donde se le saluda y puede editar su perfil.
- **Perfil Evaluador**: El evaluador inicialmente visualiza un panel con un botón de ver usuarios, al presionarlo se visualizará una tabla de los usuarios
activos de un base de datos MYSQL,a su vez a su derecha un botón azul que dice Evaluar que al presionarlo, lo direcciona a una vista donde hay preguntas y
alternativas extraidas de una base de datos, con respuestas en formato radio, al seleccionar todas presionar guardar y  a través de una petición ajax se
guardarán al instante en la bd en la tabla evaluacion_respuestas, en esta tabla extraje datos de diferentes tablas  para almacenar los datos, y una vez que
los datos son almacenados en la lista de usuarios ya deja de aparecer el usuario que ya fue evaluado, tambien este tipo de usuarios puede realizar todas las
funcionalidades relativas a la edición de su perfil.

![usuarios](https://github.com/Jose-Garrido-Dev/encuestaConLaravel/assets/58966474/a02a0031-3432-49fa-a354-0c6b4eb22b89)



- **Perfil Administrador**:
- **Autenticación de Doble Factor**: En este apartado, el administrador cuenta con la posibilidad de descargar excel de reporte de la plataforma de la evaluación realizada, está en modelo básico con posibilidades de seguir mejorando el excel descargado.

![descarga reporte](https://github.com/Jose-Garrido-Dev/encuestaConLaravel/assets/58966474/ccfe1f96-5fd4-4f69-865a-a94d3cefde7b)


- **Seguridad Avanzada**: Se tomaron medidas para desautenticar a usuarios no autorizados y eliminar cuentas de manera segura cuando sea necesario.

## Lista de Usuarios Registrados
1. mail@enovus1.cl - 1111   Evaluador
2. mail@enovus2.cl - 2222   Evaluador
3. mail@enovus3.cl - 3333   Evaluado
4. mail@enovus4.cl - 4444   Evaluado
5. mail@enovus5.cl - 5555   Evaluado
6. mail@enovus6.cl - 6666   Evaluado
7. mail@enovus7.cl - 7777   Evaluado
8. mail@enovus8.cl - 8888   Evaluado
9. adm@enovus.cl - admin@   Evaluado

## Imagen de la Base de Datos

![diagrama_evadesempeno](https://github.com/Jose-Garrido-Dev/encuestaConLaravel/assets/58966474/679503e1-d725-4eb9-89af-d25486c308e0)

