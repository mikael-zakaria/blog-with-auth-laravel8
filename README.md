# blog-with-auth-laravel8


# How to Use

1. Create Database 
    ```
    php artisan migrate
    ```
2. After that
    ```
    php artisan db:seed --class=UsersSeeder
    php artisan db:seed --class=PostssSeeder
    ```
4. and Finally
    ```
    php artisan serve
    ```
5. Enjoy the program


# next-update

    Admin Section:
    1. Delete section: When deleting an item, the picture in /public/picture is not deleted

    Guest Users :
    1. The name of the blog author still does not appear on the Card
    2. Correct the name of the date on the Card
