<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Pribadi - UTS Pemrograman Web Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- 1. BAGIAN HEADER (Sesuai Kotak Header di Soal) -->
    <header>
        <div class="header-container">
            <!-- Logo Website -->
            <img src="img/logo.jpeg alt="Logo Website" class="logo">
            <!-- Tulisan dengan Nama Website Anda -->
            <h1>Blog Pribadi - [NAMA ANDA]</h1>
        </div>
    </header>

    <!-- CONTAINER UTAMA (Membungkus Navigasi dan Konten) -->
    <div class="main-container">
        
        <!-- 2. BAGIAN NAVIGASI (Menggunakan tag list <ul> dan <li>) -->
        <nav>
            <h3>Navigasi Menu</h3>
            <ul>
                <!-- Beranda: Menampilkan gambar dan deskripsi kegiatan/hobi -->
                <li><a href="#beranda">Beranda</a></li>
                <!-- Profile: Menampilkan biodata dan Foto Anda -->
                <li><a href="#profile">Profile</a></li>
                <!-- Pendaftaran: Menampilkan form pendaftaran -->
                <li><a href="#pendaftaran">Pendaftaran</a></li>
            </ul>
        </nav>

        <!-- 3. BAGIAN KONTEN -->
        <main>
            <!-- Konten Beranda -->
            <section id="beranda" class="content-section">
                <h2>Beranda - Kegiatan & Hobi</h2>
                <p>Selamat datang di website blog pribadi saya. Berikut adalah beberapa kegiatan dan hobi saya sehari-hari:</p>
                <br>
                <ul>
                    <li>Mempelajari teknologi web dasar dan coding.</li>
                    <li>Membaca artikel pemrograman dan desain UI/UX.</li>
                    <li>Olahraga ringan di sore hari.</li>
                </ul>
                <br>
                <!-- Contoh penambahan gambar kegiatan/hobi -->
                <img src="img/hobi.jpg" alt="Gambar Kegiatan" class="content-img">
            </section>

            <!-- Konten Profile -->
            <section id="profile" class="content-section" style="display:none;">
                <h2>Profile Biodata</h2>
                <div class="profile-box">
                    <!-- Foto Anda -->
                    <img src="img/profile.jpg" alt="Foto Anda" class="profile-img">
                    <h3>Nama Lengkap Anda</h3>
                    <p><b>NIM:</b> [NIM Anda] | <b>Kelas:</b> SI1J</p>
                    <p><b>Program Studi:</b> Sistem Informasi</p>
                    <p><b>Bio Singkat:</b> Mahasiswa aktif Institut Sains dan Bisnis (ISB) Atma Luhur.</p>
                </div>
            </section>

            <!-- Konten Pendaftaran -->
            <section id="pendaftaran" class="content-section" style="display:none;">
                <h2>Formulir Pendaftaran</h2>
                <p>Silakan isi data diri Anda pada form di bawah ini:</p>
                <form action="#" method="POST">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required>

                    <label for="hobi">Hobi Utama:</label>
                    <input type="text" id="hobi" name="hobi" placeholder="Masukkan hobi Anda">

                    <button type="submit" class="btn-submit">Kirim Pendaftaran</button>
                </form>
            </section>
        </main>
    </div>

    <!-- 4. BAGIAN FOOTER (Sesuai format teks di soal) -->
    <footer>
        <p>&copy; [NIM]_Nama Lengkap Anda_SI1J_UTS Pemrograman Web Dasar.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>