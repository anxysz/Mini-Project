### Requirement

*PHP 8.2.x </br>
Ikuti Instruksi <a href="https://www.php.net/">berikut ini</a> untuk menginstall PHP

*XAMPP 8.2.x </br>
Ikuti Instruksi <a href="https://www.apachefriends.org/">berikut ini</a> untuk menginstall XAMPP

*Composer 2.7.1 </br>
Ikuti Instruksi <a href="https://getcomposer.org/doc/00-intro.md">berikut ini</a> untuk menginstall Composer

*NodeJS 20.11.1 </br>
Ikuti Instruksi <a href="https://nodejs.org/en">berikut ini</a> untuk menginstall NodeJS

*NPM 10.5.0 </br>
Ikuti Instruksi dibawah ini untuk menginstall NPM versi terbaru
```sh

npm install npm@latest -g

```



### Instalasi

  

Untuk menginstall project ini di device secara lokal, dapat dilakukan dengan cara "Clone Repo". Tahapan untuk melakukan clone dapat di ikuti dengan perintah di bawah ini.
NOTE : Pastikan sudah membuat database di phpmyadmin sesuai dengan file .env

```sh

https://github.com/anxysz/Mini-Project.git

```

Untuk menjalankannya secara lokal, lakukan instalasi resource berikut secara bertahap.

```sh

#Instalasi Resource
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate --seed

```

Terakhir, jalankan project secara lokal dengan command ini.

```sh

# Menjalankan project
npm run dev
php artisan serve
