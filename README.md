<div align=center>

|    NRP     |      Name      |
| :--------: | :------------: |
| 5025221167 | Ivan Fairuz Adinata |

# Tugas Section 2

</div>

Link Tutorial

[https://www.youtube.com/watch?v=T1TR-RGf2Pw&list=PLFIM0718LjIW1Xb7cVj7LdAr32ATDQMdr](https://www.youtube.com/watch?v=T1TR-RGf2Pw&list=PLFIM0718LjIW1Xb7cVj7LdAr32ATDQMdr)

Daftar Isi
- [Menambahkan Route dan View](#menambahkan-route-dan-view)
- [Tailwind UI](#tailwind-ui)
- [Menggunakan Blade dan Blade Component](#menggunakan-blade-dan-blade-component)

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
