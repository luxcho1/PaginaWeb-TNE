# Pagina web TNE

Proyecto realizado en segundo semestre del 2023 para el ramo "Herramientas para el emprendimiento"


## Instalacion de forma local
#### Programas necesarios:

- Visual Studio Code
- Composer
- Git (Opcional)
  
#### Clonacion del proyecto

Hay dos formas de realizarlo, la primera descargar el zip y pegarlo en la siguiente ruta: `C:\laragon\www`.

Y la segunda en esta ruta `C:\laragon\www` abrir el cmd y escribir: 
```bash
  git clone https://github.com/luxcho1/PaginaWeb-TNE.git
```
## Configurar proyecto
En la siguiente ubicacion `C:\laragon\www\ProyectoAutomaticacion` ya sea CMD de Windows o en la terminal de Visual Studio Code ejecutar los siguientes comandos:
```bash
  composer install
```
```bash
  cp .env.example .env
```
```bash
  php artisan key:generate
```
## Ejecutar

Para levantar el proyecto ejecutar el siguiente comando:

```bash
  php artisan serve
```
## Licencia

Este proyecto es de uso gratuito.
