<div align=center>

|    NRP     |      Name      |
| :--------: | :------------: |
| 5025221167 | Ivan Fairuz Adinata |

# Dokumentasi Tugas PBKK Laravel
# UPDATE !!! [Redesign UI & Searching & Pagination](redesign-ui-&-searching-&-pagination)

</div>

Link Tutorial

[https://www.youtube.com/watch?v=T1TR-RGf2Pw&list=PLFIM0718LjIW1Xb7cVj7LdAr32ATDQMdr](https://www.youtube.com/watch?v=T1TR-RGf2Pw&list=PLFIM0718LjIW1Xb7cVj7LdAr32ATDQMdr)

Daftar Isi
- [Menambahkan Route dan View](#menambahkan-route-dan-view)
- [Tailwind UI](#tailwind-ui)
- [Menggunakan Blade dan Blade Component](#menggunakan-blade-dan-blade-component)
- [Database & Migration](#database-&-migration)
- [Eloquent ORM & Post Model](#eloquent-orm-&-post-model)
- [Model Factories](#model-factories)
- [Eloquent Relationship](#eloquent-relationship)
- [Post Categories](#post-categories)
- [Database Seeder](#database-seeder)
- [N+1 Problem](#n-+-1-problem)
- [Redesign UI + Searching + Pagination](redesign-ui-+-searching-+-pagination)

### Menambahkan Route dan View
Pada bagian ini, saya mengikuti tutorial yang diberikan dengan menambahkan route pada ```web.php```. Route yang saya tambahkan adalah home, blog, about, dan contact. Lalu, masing-masing kita buat view nya sehingga kurang lebih tampilannya akan seperti ini.

![image](https://drive.google.com/uc?export=download&id=1-wyqEpL64e9CdCgdIg-_cXvc2vEM3QNa)

Sementara itu, berikut adalah tampilan dari ```web.php``` setelah dimodifikasi.

```php 
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']); 
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
```

Setiap route akan return page sesuai dengan nama view nya.

### Tailwind UI
Setelah dibuat view nya, maka selanjutnya kita akan mempercantik tampilan pada setiap page nya menggunakan CSS. Di sini, kita akan menggunakan Tailwind CSS dan akan memanfaatkan template di halaman Tailwind UI. Di sini, saya akan memanfaatkan Tailwind untuk bagian navbar. Kita tinggal copy paste code yang telah tersedia ke setiap page kita dan menyesuaikan tampilannya sedikit sesuai keinginan kita. Namun, jika kita copy paste untuk semua page, akan terjadi redundansi yang akan sangat merepotkan. Maka, selanjutnya kita akan memanfaatkan fitur laravel yakni blade component.

### Menggunakan Blade dan Blade Component
Agar tampilan code kita lebih simple dan dinamis, kita akan memanfaatkan blade component. Jadi, kita akan membuat component baru bernama ```Navbar``` dan di dalamnya kita isi dengan navbar dari tailwind ui tadi. Lalu, pada setiap page, kita tinggal memanggil component navbar tadi sehigga code jadi tidak terlalu panjang. Selain navbar, saya juga menambahkan component, diantaranya
- ```layout.blade.php``` Component ini berfungsi untuk menyimpan konten HTML dari setiap page, sehingga konfigurasi HTML pada setiap page akan selalu sama. Ketika kita nanti memanggil component ini, kita tinggal menambahkan konten pada setiap page sesuai keinginan kita.
- ```nav-link.blade.php``` Component ini berisi fungsi laravel untuk menambahkan perilaku navbar saat hover ataupun saat kita berada pada page yang bersangkutan
- ```header.blade.php``` Component ini menyimpan header dari setiap page dengan memanfaatkan ```$slot``` agar nama header bisa dinamis di setiap page (passing variable di web.php)

Dengan demikian, web awal kita sudah jadi dengan memanfaatkan fungsi dan fitur-fitur dari laravel. Berikut merupakan tampilan akhir dari setiap page setelah ditambahkan konten simple di setiap page.

Home Page
![image](https://drive.google.com/uc?export=download&id=11SDI3_cuUYWE1Ie8ZtZcKEzLjXgr9F3h)

Blog Page
![image](https://drive.google.com/uc?export=download&id=1M34tjEjrcA5ZLe-WjGNXi-Kl_TDt2qwE)

About Page
![image](https://drive.google.com/uc?export=download&id=1Hs7Wr_5cRFrkpnz4e1_kSAk08p7oTrK5)

Contact Page
![image](https://drive.google.com/uc?export=download&id=1fT69sAqlI6_MSOEclUZ2gNq2Rp3V0ILQ)

### Database & Migration
Saatnya menggunakan database. Database yang saya gunakan untuk awal ini adalah sqlite sesuai dengan yang ada di video. Dengan bantuan migrations di laravel sangat memudahkan kita untuk melakukan modifikasi dan mengelola di database kita. Kita dapat membuat tabel baru dan set atribut di dalamnya sampai drop seluruh tabel dan re-run migrasi yang masih fresh/baru. Pada topik video ini, saya menambahkan konten di blog atau post dengan cara mengisinya langsung pada database.

![image](https://drive.google.com/uc?export=download&id=1BlRNI3uwISjNzX2vgBrhpX-V2abOcjNj)

### Eloquent ORM & Post Model
Dengan menggunakan ORM, kita dapat menghapus seluruh data pada ```Post.php``` karena database sudah langsung terhubung pada model kita yakni ```Post.php```. Karena model berorientasi dengan id, kita memerlukan Route Model Binding agar nantinya kita dapat menggunakan slug pada parameter di route kita seperti sebelum-sebelumnya. Yang terakhir, saya juga memakai ```php artisan tinker``` untuk memasukkan data post ke dalam database sehingga kita tidak perlu lagi mengisi manual di database.

![image](https://drive.google.com/uc?export=download&id=1WItItAJ6e4tFCoyN7SMhshmALRoalN2R)

### Model Factories
Melanjutkan yang sebelumnya, kali ini kita dapat mengisi data dalam post dengan tidak terlalu menguli atau manual dengan bantuan ```Factories```. Dengan Factories dan bantuan faker, kita bisa generate otomatis data dengan memanggil method ```create``` di dalam ```Factories``` nya, mulai dari data user dengan atribut-atribut nya sampai menambah konten di post kita, walaupun isi artikel nya juga random dan author nya pun juga random. Agar tidak terlalu random, kita dapat mengatur agar nama-nama orang, email, dll menjadi mirip dengan nama-nama yang familiar di Indonesia. Kita dapat mengkonfigurasi nya di environment global dengan mengganti ```APP_FAKER`` menjadi ```id_ID```. Setelah menerapkan model Factories, saya menambah konten di post dengan artikel random.

![image](https://drive.google.com/uc?export=download&id=1HK_QbwDyKHn_eUH95oDhF-vS-mKERpqU)

### Eloquent Relationship
Setelah dapat generate artikel dan author random dengan faker, saat ini kita akan menghubungkan tabel posts dan users agar penulis/author dari suatu artikel itu tidak random atau fake. Kita dapat memodifikasi migrasi tabel posts dengan menambahkan foreign key dari tabel users. Nantinya, dengan perintah ```php artisan```, kita dapat generate 100 artikel dengan 5 user yang berbeda dan secara acak dengan menggunakan ```recycle```. Selain membuat relasi di tabel, kita juga akan membuat relasi antar model post dengan user. Terkakhir, kita memodifikasi tampilan dari web kita. Apabila kita klik nama author, kita akan diarahkan ke halaman yang berisi artikel-artikel yang telah ditulis oleh author tersebut dengan menambahkan route baru. Dari situ, kita dapat membaca artikel nya dan ketika kita kembali ke blog, akan menjad tampilan awal yang berisi banyak artikel. 

![image](https://drive.google.com/uc?export=download&id=13IPBQy0sTYYexGv3MDtjOpLEvO1D3BDE)
![image](https://drive.google.com/uc?export=download&id=1Vq-_8XUxtC4YP5N-soKB0N82LyBa35G8)
![image](https://drive.google.com/uc?export=download&id=1Q-bIzDza4n7nozPLHfSinHy7hfhZC8IJ)

### Post Categories
Dalam section kali ini, kita akan menambahkan kategori di tiap artikel yang telah kita buat sebelumnya. Yang pertama kali dilakukan adalah membuat model baru, yakni Categories, sekaligus dengan membuat factory dan migrasi nya sekaligus dengan menggunakan ```php artisan make:model Category -mf```. Setelah kita membuat ketiganya, kita perlu membuat kategori ini terhubung ke dalam model dan tabel post. Caranya, kita konfigurasi di dalam file model di mana kita menambah relasi hasMany dan belongsTo di model Post dan model Categories. Selanjutnya, untuk factory nya, kita tambahkan 2 hal, yakni faker untuk sentence dan slug nya. Yang terakhir adalah mengonfigurasi migrasi Post agar memiliki foreign key yang reference ke tabel Categories dengan menambahkan foreignId dan menghubungkannya ke ```category_id``` di tabel category. Setelah semua dikonfigurasi, terakhir kita tinggal mengatur posts.blade dan route yang menuju ke slug dari category, di mana nantinya akan ada fitur di mana ketika kita klik kategori nya, akan tampil seluruh artikel dengan kategori tersebut.

![image](https://drive.google.com/uc?export=download&id=1JC4EMe7NXJ6Q4F8WGP4e6YzNuq22RFBU)
![image](https://drive.google.com/uc?export=download&id=1gd2W8GxnwuA3NLOo4Lu61xY0g_O3xAcH)

### Database Seeder
Setelah sebelumnya kita selalu memakai bantuan tinker untuk memasukkan hasil factory ke dalam database kita, sekarang kita akan berpindah menggunakan database seeder. Pada database seeder, kita bisa menuliskan secara manual data-data yang ingin kita masukkan ke dalam database ataupun kita dapat menggunakan factory seperti sebelumnya. Pada ssection ini, saya menambahkan kategori secara manual ke dalam file seeder baru yakni CategorySeeder dan saya juga memasukkan beberapa user dengan gabungan metode faker dan manual ke dalam UserSeeder. Selanjutnya, kita tinggal memanggil kedua file seeder tadi di file ```DatabaseSeeder``` untuk di recycle.

![image](https://drive.google.com/uc?export=download&id=1VyFhimp0obauke_YN0U85_hBNA5bnFEL)
![image](https://drive.google.com/uc?export=download&id=1iEPNktCVBBXijTY4mcUumYRBGkGF0YQ2)
![image](https://drive.google.com/uc?export=download&id=1pQL8tKJMnJpqFnKmVLzIscwAm3_FQCKN)

### N+1 Problem
Pada section ini, kita akan mengatasi masalah query yang sangat banyak ketika kita melakukan looping di halaman Post kita untuk menampilkan seluruh artikel. Dengan kita merelasikan tabel, maka nantinya akan terjadi lazy loading. Untuk mengatasinya, di laravel ada sesuatu yang bernama eager loading yang merupakan kebalikan dari lazy loading. Cara menerapkannya pun ada beberapa cara. Yang pertama, kita dapat menuliskannnya di route. Jadi di setiap route, kita tambahkan keyword ```with``` ataupun ```load``` jika parent model nya sudah terpanggil sebelumnya. Opsi yang lain adalah dengan langsung mengonfigurasinya di dalam model. Jadi, di dalam model ```Post``` kita, akan ditambahkan variabel ```protected $with``` yang akan diisi dengan relasi apa saja yang mau dijalankan dengan eager loading, di sini adalah category dan author. Terakhir, kita dapat mencegah orang lain menjalankan lazy loading di dalam project kita apabila kita sedang dalam project bersama. Hal itu dapat dilakukan dengan memodifikasi ```AppServiceProvider``` dengan menambahkan baris ```Model::preventLazyLoading();``` ke dalam method ```boot()```.

### Redesign UI & Searching & Pagination
Section ini sejauh ini merupakan section akhir dari tutorial laravel11. Jadi, di sini, kita akan menambahkan fitur searching dan pagination, serta mengubah beberapa tampilan di halaman posts sehingga lebih bagus. Untuk searching, kita dapat mencari nya berdasarkan keyword judul secara wildcard. Lalu, sekarang, apabila kita klik di kategori dan author, tidak akan diarahkan ke halaman lain, namun tetap di halaman posts. Jumlah tampilan posts juga dibatasi sekarang menggunakan pagination. Jadi, dalam satu halaman posts hanya akan menyimpan 9 artikel saja menggunakan card. Pagination yang digunakan ialah fitur yang langsung disediakan laravel berbasis tailwind, jadi kita tidak perlu membuat pagination nya dari awal.

![image](https://drive.google.com/uc?export=download&id=1iT8hHOqT--RuJBZ28YRxQhBdllsGFk87)
![image](https://drive.google.com/uc?export=download&id=1wfoIrXAHdRGXceKHFzCuOk7eol0GVhFt)
![image](https://drive.google.com/uc?export=download&id=1YVrlcJrqMqoztoQJXGDOAaFSt-nlMpY2)
![image](https://drive.google.com/uc?export=download&id=1MbvIpjfEn-8woBSENhvjzsLlXoUVPXR8)


