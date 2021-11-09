
<div align="center">
<img src="https://4.bp.blogspot.com/-mYqcTGN2WHI/WtvfU15uRzI/AAAAAAAAVEo/YIleYrMPD1wISugRHjB_KgQOGQ-_3ta-gCLcBGAs/s1600/politecnico-jaime-isaza-cadavid_4716001832.jpg" alt="Logo" width="80" height="80">
</div>

## Reservas Poli Backend(Salires)

### Construido con

* [mysql](https://www.mysql.com/)
* [laravel](https://laravel.com/)
* [passport](https://packagist.org/packages/laravel/passport)

## Definición

El proceso para la reserva de escenarios e implementos deportivos siempre se estuvo llevando de manera manual gastando papel en planillas y arriesgando la información, por esta razón se requiere la creación de una aplicación con la cual se tendrá un buen control de la información y que aportará mayor facilidad a los usuarios a la hora de reservar y para el encargado de este proceso.

## Instalación

* composer
    Este comando es para instalar las dependencias de composer
    ```sh
  composer install
    ```

* generate key    
    Este comando es para generar una llave unica en el backend
  ```sh
    php artisan key:generate
  ```

* migration
    Este comando es para realizar las migraciones a la base de datos
    ```sh
        php artisan make:migration
    ```

* passport
    Este comando es para inicializar autenticación con passport
    ```sh
        php artisan passport:install
    ```
