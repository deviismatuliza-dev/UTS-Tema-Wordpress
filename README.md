# Devi Pink Modern — WordPress Theme

Tema WordPress personal berdesain pink modern dan responsif untuk profil mahasiswa serta artikel/blog.

## Struktur tema
- `style.css` — identitas tema dan aturan desain.
- `functions.php` — dukungan tema, registrasi menu/sidebar, dan pemuatan CSS.
- `header.php` / `footer.php` — kerangka situs yang dipakai bersama.
- `front-page.php` — halaman depan profil dan artikel terbaru.
- `home.php` — daftar posting pada halaman blog.
- `archive.php` — arsip kategori, tag, tanggal, dan tipe konten.
- `single.php` — detail satu artikel, konten, tag, navigasi artikel, dan komentar.
- `sidebar.php` — widget pencarian, arsip, dan kategori.
- `index.php` — template fallback sesuai WordPress Template Hierarchy.

## Cara memasang
1. Ekstrak `devi-pink-modern.zip` jika belum diekstrak.
2. Salin folder `devi-pink-modern` ke `wp-content/themes/`, atau unggah ZIP melalui **Dashboard → Tampilan → Tema → Tambah Tema → Unggah Tema**.
3. Aktifkan **Devi Pink Modern**.
4. Buka **Tampilan → Menu** atau **Tampilan → Editor** (bergantung versi WordPress) dan atur menu ke lokasi **Menu Utama**. Jika menu belum dibuat, tema menampilkan menu cadangan.
5. Tambahkan posting dari **Pos → Tambah Baru** dan atur **Gambar Unggulan** bila diperlukan.
6. Untuk sidebar, buka **Tampilan → Widget** jika tersedia, lalu tambahkan widget ke **Sidebar Artikel**.
7. Atur **Pengaturan → Membaca**. Pilih halaman statis untuk beranda jika ingin menjadikan halaman depan sebagai landing page; pilih halaman posting untuk daftar blog. Jika memakai beranda statis, template `front-page.php` digunakan oleh WordPress.

## Ketentuan tugas yang diterapkan
Menggunakan HTML, CSS, PHP, fungsi WordPress, `wp_head()`, `wp_footer()`, `body_class()`, `wp_body_open()`, Template Hierarchy, dan The Loop. Mendukung title-tag, featured image, menu navigasi, HTML5, custom logo, dan widget sidebar.

## Catatan
Ubah informasi profil dan kontak pada `front-page.php` sesuai kebutuhan. Untuk pengumpulan, sertakan folder tema beserta README ini dan tangkapan layar hasil uji responsif.
