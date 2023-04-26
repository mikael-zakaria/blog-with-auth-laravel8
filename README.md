# blog-with-auth-laravel8

1. Admin Dashboard

    <img src="https://github.com/mikael-zakaria/blog-with-auth-laravel8/blob/master/preview_web_img/admin_dashboard.png" alt="Alt text" title="Admin Dashboard" style="display: block; width: 70%;">

2. Admin Login

    <img src="https://github.com/mikael-zakaria/blog-with-auth-laravel8/blob/master/preview_web_img/admin_login.png" alt="Alt text" title="Admin Dashboard" style="display: block; width: 70%;">
    
3. User Dashboard 

    <img src="https://github.com/mikael-zakaria/blog-with-auth-laravel8/blob/master/preview_web_img/homepage.png" alt="Alt text" title="Admin Dashboard" style="display: block; width: 70%;">


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
