# Prueba Técnica: Gestión de Tareas Recurrentes

Este repositorio Git contiene una prueba técnica que se centra en la gestión de tareas recurrentes y sus vistas. La aplicación está desarrollada utilizando el framework Laravel junto con Livewire y Tailwind CSS.

## Objetivo

El objetivo de esta prueba técnica es demostrar habilidades en el desarrollo de aplicaciones web utilizando tecnologías modernas. La aplicación permite a los usuarios gestionar sus tareas recurrentes de manera eficiente, proporcionando una interfaz intuitiva y amigable.

## Tecnologías Utilizadas

- **Laravel:** Un potente framework de PHP que facilita el desarrollo de aplicaciones web robustas y escalables.
- **Livewire:** Una biblioteca de Laravel que permite construir interfaces de usuario dinámicas y reactivas sin escribir JavaScript.
- **Tailwind CSS:** Un framework de diseño de componentes CSS que facilita la creación de interfaces web personalizadas y modernas.

## Características

- **Gestión de Tareas:** Los usuarios pueden crear, editar y eliminar tareas recurrentes de manera sencilla.
- **Vistas Intuitivas:** La aplicación proporciona vistas claras y organizadas para una mejor experiencia de usuario.
- **Interactividad sin JavaScript:** Gracias a Livewire, la aplicación ofrece una experiencia interactiva sin necesidad de escribir código JavaScript adicional.

## Instalación

1. Clona este repositorio en tu máquina local utilizando el siguiente comando:

```bash
git clone https://github.com/LspEdu/CofraiTest.git
```

2. Instala las dependencias de PHP utilizando Composer:

```bash
composer install
npm install
```

3. Copia el archivo `.env.example` y renómbralo a `.env`. Luego, genera una nueva clave de aplicación ejecutando el siguiente comando:

```bash
php artisan key:generate
```

4. Configura tu base de datos en el archivo `.env` y luego ejecuta las migraciones para crear las tablas de la base de datos:

```bash
php artisan migrate
```

5. Inicia el servidor de desarrollo:

```bash
php artisan serve
```

6. Visita `http://localhost:8000` en tu navegador para acceder a la aplicación.

## Contribución

¡Las contribuciones son bienvenidas! Si deseas mejorar esta prueba técnica, no dudes en enviar un pull request.

## Autor

Este proyecto fue desarrollado por [Eduardo López Manga](https://github.com/LspEdu).

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).





Paquetes Instalados:

    - livewire/livewire: 3.4.6 . FrontEnd async tools.
    - laravel/breeze: 1.28 . User control with passwords
    - wire-elements/modal: Modals for livewire
