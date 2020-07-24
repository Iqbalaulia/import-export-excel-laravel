<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Deksripsi

Pada project ini saya akan membahas mengenai tata cara penggunaan import dan export excel pada laravel. tentu saja export dan import data sangat dibutuhkan oleh perusahaan atau perorangan guna mendapatkan atau menginputkan suatu data kedalam sistem. Fitur export atau import excel merupakan salah satu fitur yang paling penting. Bagi teman sekalian yang sering membuat aplikasi pesanan dari client, mungkin fitur ini menjadi fitur yang paling banyak diminita oleh client untuk dibuatkan.

## Tata Cara Penggunaan

1. Pada saat teman - teman clone project import dan export ini, jangan lupa untuk merubah .env sesuai dengan database        kalian.
2. Setelah .env sesuai database jalankan: php artisan migrate
3. Setelah itu instal package laravel excel : composer require maatwebsite/excel
4. Jalankan perintah : php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"

## Referensi

1. https://www.malasngoding.com/export-excel-laravel/
2. https://www.malasngoding.com/import-excel-laravel/
3. https://www.kawankoding.id/membuat-export-excel-laravel-dengan-mudah/

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
