# To Start This Project On Your Device After Cloning:

> composer install

change .env.example to .env

create database and edit value of database in .env file

> php artisan key:generate

#

> php artisan migrate

#

> php artisan tinker
#
> factory(App\User::class, 7)->create()
#
> factory(App\Tweet::class, 5)->create()

> php artisan serve

now go to explore page in the sidebar and follow some people.
