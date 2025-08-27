<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Hub I-KHub</title>
    <link rel="shortcut icon" href="image/logo_ikhub.ico">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #eaf0d6ff;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .hero-section {
            background: #8b3030ff;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .book-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }
        .card-title {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3; /* Batasi menjadi 3 baris */
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .show-more {
            display: none; /* Sembunyikan tombol "Show Less" secara default */
        }

        
        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .filter-btn {
            margin: 5px;
        }
        
        .footer {
            background: white;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <img src="image/logo_header.jpg" alt="Indonesia Knowledge Hub">
            <a class="navbar-brand" href="#" style="margin-left: 10px;">I-KHub Product Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#books">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">About Us</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari E-Book...">
                </div>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Katalog I-Khub Product</h1>
            <p class="lead">Temukan berbagai product unggulan I-KHub.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <div class="container my-5">
        <h4 class="mb-4">Filter Kategori</h4>
        <div class="d-flex flex-wrap">
            <button class="btn btn-outline-info filter-btn" data-category="all">Semua</button>
            <button class="btn btn-outline-info filter-btn" data-category="outlook">Outlook</button>
            <button class="btn btn-outline-info filter-btn" data-category="infografis">Infografis</button>
            <button class="btn btn-outline-info filter-btn" data-category="kebijakan">Kebijakan</button>
            <button class="btn btn-outline-info filter-btn" data-category="e-book">E-book</button>
        </div>
    </div>

    <!-- Books Section -->
    <section id="books" class="container mb-5">
        <h2 class="mb-4">Product Unggulan</h2>
        <div class="row" id="bookGrid">
            <?php
            // Sample e-book data - replace with your actual e-book data
            $ebooks = [
                [
                    'title' => 'I-KHub BNPT Counter Terrorism and Violent Extremism Outlook 2024',
                    'author' => 'I-KHub',
                    'category' => 'outlook',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-2024_I-KH_Wi15Dpd/ffedbc2679e615d1350da0e7a7eadc0e.jpg',
                    'link' => 'https://ikhub.id/produk/outlook/i-k-hub-bnpt-counter-terrorism-and-violent-extremism-outlook-2024-97541133'
                ],
                [
                    'title' => 'Policy Brief Pencegahan Penyalahgunaan Barang Berbahaya yang Berpotensi Digunakan untuk Tindak Pidana Terorisme melalui Koordinasi dan Kolaborasi antara BNPT dengan Penyedia Perdagangan Melalui Sistem Elektronik',
                    'author' => 'BNPT',
                    'category' => 'kebijakan',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/34edee04-2bb4-4e0a-93fa-dacc076e0665/images/Badan_Nasional_Penanggulangan_Te_86uiDpj/dbd3ead6ebd84ddc413407019d9a9034.jpeg',
                    'link' => 'https://ikhub.id/produk/analisis-kebijakan/policy-brief-pencegahan-penyalahgunaan-barang-berbahaya-yang-berpotensi-digunakan-untuk-tindak-pidana-terorisme-melalui-koordinasi-dan-kolaborasi-antara-bnpt-dengan-penyedia-perdagangan-melalui-sistem-elektronik-54345394'
                ],
                [
                    'title' => 'Pencegahan Ekstremisme Berbasis Kekerasan di Kalangan Aparatur Negara',
                    'author' => 'I-KHub',
                    'category' => 'kebijakan',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Policy_An_fmE5Ppw/421b26ebca42f83f067bfec33c8b7a0f.jpg',
                    'link' => 'https://ikhub.id/produk/analisis-kebijakan/pencegahan-ekstremisme-berbasis-kekerasan-di-kalangan-aparatur-negara-80250289'
                ],
                [
                    'title' => 'Mengatasi Polemik Pendirian Rumah Ibadat',
                    'author' => 'I-KHub',
                    'category' => 'kebijakan',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Part_1_Co_bBxDSPa/b94f115206fc2ebcce7b8ad3eca67842.jpg',
                    'link' => 'https://ikhub.id/produk/analisis-kebijakan/mengatasi-polemik-pendirian-rumah-ibadat-72726403'
                ],
                [
                    'title' => '[ID] I-KHub BNPT Counter Terrorism and Violent Extremism Outlook',
                    'author' => 'I-KHub',
                    'category' => 'outlook',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/34edee04-2bb4-4e0a-93fa-dacc076e0665/images/Badan_Nasional_Penanggulangan_Ter_JJwduMe/a22cf4c88da4e1d2c5a49dc7ae3686e8.jpg',
                    'link' => 'https://ikhub.id/produk/outlook/id-i-k-hub-bnpt-counter-terrorism-and-violent-extremism-outlook-21678673'
                ],
                [
                    'title' => '[ID] I-KHub BNPT Counter Terrorism and Violent Extremism Outlook',
                    'author' => 'BNPT',
                    'category' => 'outlook',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/34edee04-2bb4-4e0a-93fa-dacc076e0665/images/Badan_Nasional_Penanggulangan_Ter_JJwduMe/a22cf4c88da4e1d2c5a49dc7ae3686e8.jpg',
                    'link' => 'https://ikhub.id/produk/outlook/id-i-k-hub-bnpt-counter-terrorism-and-violent-extremism-outlook-21678673'
                ],
                [
                    'title' => 'Repatriasi, Rehabilitasi, dan Reintegrasi Anak-anak yang terafiliasi dengan Kelompok Terorisme dan Ekstremisme Berbasis Kekerasan',
                    'author' => 'I-Khub',
                    'category' => 'kebijakan',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Part_1_Co_2DPTf4G/4dfd8db2a0fb3b6715e3e2d600c6c119.jpg',
                    'link' => 'https://ikhub.id/produk/analisis-kebijakan/repatriasi-rehabilitasi-dan-reintegrasi-anak-anak-yang-terafiliasi-dengan-kelompok-terorisme-dan-ekstremisme-berbasis-kekerasan-82724766'
                ],
                [
                    'title' => 'Kencenderungan Penguatan Intoleransi di Komunitas PAUD',
                    'author' => 'I-Khub',
                    'category' => 'kebijakan',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Part_1_Co_V537Dra/bc458a98f0a596fe585e3b2be05ff44e.jpg',
                    'link' => 'https://ikhub.id/produk/analisis-kebijakan/kencenderungan-penguatan-intoleransi-di-komunitas-paud-31979692'
                ],
                [
                    'title' => '8 Temuan Kunci dalam Penyalahgunaan Ruang Siber untuk Aktivitas Ekstremisme Berbasis Kekerasan yang Mengarah pada Terorisme',
                    'author' => 'I-KHub',
                    'category' => 'infografis',
                    'image' => 'https://base.api.ikhub.org/assets/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-8_Temuan__aMvwnBh.jpg',
                    'link' => 'https://ikhub.id/produk/infografis/8-temuan-kunci-dalam-penyalahgunaan-ruang-siber-untuk-aktivitas-ekstremisme-berbasis-kekerasan-yang-mengarah-pada-terorisme-52922355'
                ],
                [
                    'title' => 'Pencegahan Ekstremisme Berbasis Kekerasan di Kalangan Aparatur Negara',
                    'author' => 'I-KHub',
                    'category' => 'infografis',
                    'image' => 'https://base.api.ikhub.org/assets/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Infografi_K81z0pH.jpg',
                    'link' => 'https://ikhub.id/produk/infografis/pencegahan-ekstremisme-berbasis-kekerasan-di-kalangan-aparatur-negara-65873856'
                ],
                [
                    'title' => 'Analisis Kesiapan Pemerintah Daerah (Sub-Nasional) Untuk Melaksanakan RAN PE',
                    'author' => 'I-KHub',
                    'category' => 'infografis',
                    'image' => 'https://base.api.ikhub.org/assets/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-RAN_PE_IN_ULXMZxo.jpg',
                    'link' => 'https://ikhub.id/produk/infografis/analisis-kesiapan-pemerintah-daerah-sub-nasional-untuk-melaksanakan-ran-pe-95509459'
                ],
                [
                    'title' => '11 Temuan dan Analisis Potensi Ekstremisme Berbasis Kekerasan dan Terorisme 2018-2022',
                    'author' => 'I-KHub',
                    'category' => 'infografis',
                    'image' => 'https://base.api.ikhub.org/assets/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Infografi_2E7zPQY.jpg',
                    'link' => 'https://ikhub.id/produk/infografis/11-temuan-dan-analisis-potensi-ekstremisme-berbasis-kekerasan-dan-terorisme-2018-2022-28161182'
                ],
                
                [
                    'title' => 'Indonesia National Risk Assessment (NRA) on Terrorism Financing and Financing of Proliferation of Weapons of Mass Destruction 2021',
                    'author' => 'PPATK',
                    'category' => 'e-book',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/1ee6a544-4729-49fa-b9bc-7053aa72488d/images/Pusat_Pelaporan_dan_Analisis_Tran_M9RZATD/0e84244780d63bdcf7dd895f03ceda9d.jpg',
                    'link' => 'https://ikhub.id/produk/buku/indonesia-national-risk-assessment-nra-on-terrorism-financing-and-financing-of-proliferation-of-weapons-of-mass-destruction-2021-17714651'
                ],
                [
                    'title' => 'Manajemen Krisis Komunikasi Pemasyarakatan',
                    'author' => 'I-KHub',
                    'category' => 'e-book',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Part_1_Co_rc2NFxb/8e94730f68b28b6e6c95f49c989ce342.jpg',
                    'link' => 'https://ikhub.id/produk/buku/manajemen-krisis-komunikasi-pemasyarakatan-66945245'
                ],
                [
                    'title' => 'Dinamika Toleransi dalam Mayoritarianisme Agama di Tingkat Lokal',
                    'author' => 'I-KHub',
                    'category' => 'e-book',
                    'image' => 'https://base.api.ikhub.org/assets/CACHE/images/Organisasi/8f6a62f9-07c0-4bc9-892e-1a433366f483/images/Sekretariat_I-KHub_BNPT-Part_1_Co_cDRvQMT/0cf12b9f1a9ca2fbba9fd0b08e98db29.jpg',
                    'link' => 'https://ikhub.id/produk/buku/dinamika-toleransi-dalam-mayoritarianisme-agama-di-tingkat-lokal-54620070'
                ]
            ];

            foreach ($ebooks as $ebook):
            ?>
            <div class="col-md-6 col-lg-3 mb-4 book-item" data-category="<?php echo $ebook['category']; ?>">
            <div class="card book-card h-100">
                <img src="<?php echo $ebook['image']; ?>" class="card-img-top" alt="<?php echo $ebook['title']; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title" id="title-<?php echo $ebook['title']; ?>">
                        <?php echo $ebook['title']; ?>
                        <span class="show-more" id="more-<?php echo $ebook['title']; ?>">... <a href="#" class="toggle-text" data-title="<?php echo $ebook['title']; ?>">Show More</a></span>
                    </h5>
                    <p class="card-text">Oleh: <?php echo $ebook['author']; ?></p>
                    <a href="<?php echo $ebook['link']; ?>" class="btn btn-danger" target="_blank">Akses Product</a>
                </div>
            </div>
        </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <!-- <section id="contact" class="container mb-5">
        <h2 class="mb-4">Kontak Kami</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </section> -->

    <!-- Footer -->
    <footer class="footer text-center py-4">
        <div class="container">
            <p class="text-muted mb-0">© Copyright 2023 | I-KHub BNPT</p>
        </div>
    </footer>

    <!-- Bootstrap & JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const bookItems = document.querySelectorAll('.book-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');

                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter books
                bookItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Toggle Show More / Show Less
        const toggleLinks = document.querySelectorAll('.toggle-text');
        toggleLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const titleId = this.getAttribute('data-title');
                const titleElement = document.getElementById('title-' + titleId);
                const showMoreElement = document.getElementById('more-' + titleId);

                if (titleElement.style.overflow === 'hidden') {
                    titleElement.style.overflow = 'visible';
                    titleElement.style.display = 'block';
                    this.textContent = 'Show Less';
                } else {
                    titleElement.style.overflow = 'hidden';
                    titleElement.style.display = '-webkit-box';
                    this.textContent = 'Show More';
                }
            });
        });
    });
</script>

</body>
</html>
