![Masalah Pertama yang Bagus](../assets/github/social-preview.png)

# Masalah Pertama yang Baik

**Good First Issues** adalah inisiatif untuk mengumpulkan hasil yang mudah dari proyek-proyek populer, sehingga pengembang yang belum pernah berkontribusi pada sumber terbuka dapat memulai dengan cepat.

Situs web: [good-first-issues.github.io](https://good-first-issues.github.io)

Situs web ini terutama ditujukan bagi pengembang yang ingin berkontribusi pada perangkat lunak sumber terbuka tetapi tidak tahu harus mulai dari mana atau bagaimana.

Pengelola sumber terbuka selalu berupaya melibatkan lebih banyak orang, namun pengembang baru umumnya merasa sulit untuk menjadi kontributor. Kami percaya bahwa meminta pengembang untuk memperbaiki masalah yang sangat mudah akan menghilangkan hambatan untuk berkontribusi di masa depan. Inilah sebabnya mengapa *Masalah Pertama yang Baik* ada.

## Menambahkan proyek baru

Anda dapat menambahkan proyek baru di *Good First Issues*, cukup ikuti langkah-langkah berikut:

- Untuk menjaga kualitas proyek di *Good First Issues*, pastikan repositori GitHub Anda memenuhi kriteria berikut:

     - Setidaknya ada tiga terbitan dengan label `terbitan pertama yang bagus`. Label ini sudah ada di semua repositori secara default.

     - Ini berisi `README.md` dengan instruksi pengaturan rinci untuk proyek tersebut

     - Dipelihara secara aktif (pembaruan terakhir kurang dari 1 bulan yang lalu)

- Tambahkan jalur repositori Anda (dalam format `pemilik/nama` dan urutan leksikografis) di [repositories.json](https://github.com/gomzyakov/good-first-issue/blob/main/repositories.json).

- Buat permintaan tarik baru. Silakan tambahkan tautan ke halaman terbitan repositori dalam deskripsi PR. Setelah permintaan penarikan digabungkan, perubahan akan diterapkan di [good-first-issues.github.io](https://good-first-issues.github.io).

## Bagaimana cara kerjanya?

- First *Good First Issues* adalah situs web statis yang menggunakan [PHP](https://www.php.net)` untuk menghasilkan file HTML.
- Kami menggunakan [GitHub REST API](https://docs.github.com/en/rest) untuk mengambil masalah dari repositori yang terdaftar di [repositories.json](https://github.com/gomzyakov/good-first -issue/blob/main/repositories.json).
- Untuk menelusuri masalah secara berkala (dua kali sehari), kami menggunakan [Alur Kerja GitHub](https://docs.github.com/en/actions/using-workflows).

## Bantu kami berkembang

Menavigasi proyek sumber terbuka bisa sangat melelahkan bagi pemula dan kontributor berpengalaman. *Good First Issues* berupaya memecahkan masalah ini dengan menyediakan platform yang berfungsi sebagai titik awal bagi mereka yang ingin memulai dengan sumber terbuka atau mereka yang ingin terjun ke proyek baru.

Semakin banyak orang yang mengetahui tentang [good-first-issues.github.io](https://good-first-issues.github.io), semakin baik. Ada berbagai cara yang dapat Anda lakukan untuk membantu kami berkembang: Anda dapat berkontribusi pada daftar `luar biasa`, menulis blog tentang kami, menjangkau blogger, pengaruh teknologi, pengembang dan sumber terbuka di Twitter dan YouTube, misalnya. Coba dan buat [good-first-issues.github.io](https://good-first-issues.github.io) disebutkan dalam video atau tweet!

## Saran dan keinginan

Jika Anda memiliki pertanyaan atau saran (atau menemukan bug), Anda selalu dapat menulis ke [masalah](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Lisensi

Ini adalah perangkat lunak sumber terbuka yang dilisensikan di bawah [Lisensi MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).