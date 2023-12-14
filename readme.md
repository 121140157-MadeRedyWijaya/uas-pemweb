Bagian 1: Client-side Programming
Saya membuat file index.html yang berisi header dan formulir untuk memesan makanan. Pada form terdapat beberapa input yaitu  nama pemesan, pilihan pesanan, jenis pesanan, dan metode pengiriman. Selain itu sistem juga mengambil data lain dari pengguna yaitu browser dan ip address. Terdapat beberapa event javascript yang digunakan untuk memvalidasi inputan dan memastikan semua kolom terisi dan mengofirmasi pengguna apakah sudah yakin untuk mensubmit pesanan tersebut.

Bagian 2: Server-side Programming 
Saya membuat file proses.php yang digunakan untuk mengelola inputan pengguna pada file index.php yang nantinya akan disimpan ke dalam database sistem. Selain itu saya juga membuat file tampilkan_data.php yang digunakan untuk menampilkan data-data pesanan yang sudah disubmit oleh penggguna sehingga tertata dengan rapih seperti nama, pilihan pesanan, jenis pesanan, metode pengiriman, browser, dan ip address dari pengguna. Selain itu saya membuat objek php yang berfungsi untuk menghitung jumlah pesanan yang masuk, dan diklasifikasikan berdasarkan jenis pesanan yaitu dine_in dan take_home.

Bagian 3: Database Management
Saya membuat database dengan nama db_uas dan sebuah tabel pada database MySQL. Selain itu dibuat konfigurasi koneksi ke database MySQL pada file PHP dengan membuat variabel untuk menyimpan informasi koneksi (host, username, password, nama database) agar sistem dapat terhubung dengan database serta data bisa disimpan di database tersebut.
 
Bagian 4: State Management
Pada tiap file php yang dibuat, ditambahkan session untuk menyimpan dan mengelola state pengguna. Menggunakan `session_start()` untuk memulai session untuk menyimpan sesi informasi pengguna ke dalam session. Selain itu dilakukan implementasi pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript seperti menetapkan, mendapatkan, dan menghapus cookie.

Bagian Bonus: Hosting Aplikasi Web
1. Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
Pertama, mendaftar akun di platform 000webhost dengan mengisi formulir pendaftaran dan melakukan verifikasi alamat email. Setelah itu, login ke akun Anda dan tambahkan situs baru dari dashboard. Selanjutnya, atur detail situs seperti nama domain. 000webhost menyediakan opsi untuk menggunakan subdomain gratis, pilih opsi hosting gratis. Setelah mendefinisikan detail situs, Anda perlu memilih metode pembangunan, yaitu "Website Builder" atau "Upload Website". Jika Anda memiliki aplikasi web yang sudah dibangun, pilih opsi "Upload Website" dan unggah file aplikasi web Anda melalui File Manager atau FTP. Aktifkan fitur database di 000webhost dan konfigurasikan pengaturannya.

2. Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
Saya menggunakan  000webhost sebagai platform hosting dapat didasarkan pada beberapa alasan. Pertama, 000webhost menawarkan layanan hosting secara gratis, memungkinkan pengguna untuk memulai tanpa biaya tambahan. Keberadaan subdomain gratis juga menjadi nilai tambah. Antarmuka pengguna yang mudah dan bersih membuatnya sangat sesuai untuk pemula yang belum berpengalaman dalam hosting web.

3. Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
Keamanan aplikasi web yang saya host dijamin melalui beberapa langkah. Pembaruan perangkat lunak dan sistem  untuk menjaga aplikasi tetap diperbarui dengan perbaikan keamanan terbaru. Keamanan otomatis yang sudah disediakan oleh web hosting. Pemantauan keamanan terus-menerus dan pengelolaan log secara berkala membantu mendeteksi aktivitas mencurigakan.

4. Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
Konfigurasi server yang saya terapkan untuk mendukung aplikasi web terdiri dari langkah-langkah untuk memastikan kinerja optimal, keamanan, dan ketersediaan layanan. Pertama, server web dikonfigurasi dengan perangkat lunak server, bersama dengan PHP. Saya memastikan bahwa server berjalan pada versi perangkat lunak yang stabil dan aman, dan pembaruan rutin diterapkan untuk mengatasi kerentanan keamanan yang mungkin ada.