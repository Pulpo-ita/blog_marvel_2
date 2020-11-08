`git clone linkprogettogit`
`composer install`
`cp .env.example .env`
`php artisan key:generate`

ora creo il db tramite mysql
`winpty mysql -u root -p`
`pass: root`
`create database nomebd;`
`exit;`

modificare il nome del db nel file .env

`php artisan migrate`
`php artisan storage:link`  (creo il collegamento dalla cartella delle immagini allo storage)

`npm install && npm run dev`
`npm run watch`

`php artisan serve`