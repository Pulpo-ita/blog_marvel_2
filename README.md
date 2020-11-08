git clone link gitprogetto
composer install
cp .env.example .env
php artisan key:generate

creo db con mysql
winpty  mysql -u root -p
pass: root
create database blog_marvel;
exit;

modificare nel file .env il nome del db
php artisan migrate

php artisan storage:link (per linkare la cartella dove stanno le immagini nello storage)

per le modifiche dello style.scss
npm install && npm run dev
npm run watch


php artisan serve