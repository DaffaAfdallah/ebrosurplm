<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <title>E-BROSUR | Politeknik LP3I Medan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">
    <!-- Header -->
    <header class="container mx-auto sm:mt-12 sm:mb-52">
        <div class="flex flex-wrap justify-center items-center gap-8 p-12 sm:px-0">
            <img class="h-12 sm:h-24 w-auto object-contain" src="images/logo/logo_lp3imedan.png"
                alt="Politeknik LP3I Medan" />
            <img class="h-12 sm:h-24 w-auto object-contain" src="images/logo/logo_gmu.png" alt="Global Mandiri Utama" />
            <img class="h-12 sm:h-24 w-auto object-contain" src="images/logo/logo_kampusmerdeka.png"
                alt="Kampus Merdeka" />
            <img class="h-12 sm:h-24 w-auto object-contain" src="images/logo/tagline.png"
                alt="Kuliah dan Penempatan Kerja" />
        </div>
    </header>

    <main>
        <!-- Foto Mahasiswa -->
        <div class="relative hidden sm:flex justify-center items-center z-10">
            <div class="absolute flex flex-wrap gap-4">
                <img src="images/alumni/yura.webp" alt="Mahasiswa 1"
                    class="h-96 border-8 object-cover border-slate-100 -rotate-6 shadow-2xl" />
                <img src="images/alumni/dila.webp" alt="Mahasiswa 2"
                    class="h-96 border-8 object-cover border-slate-100 rotate-6 shadow-2xl" />
                <img src="images/alumni/idham.webp" alt="Mahasiswa 3"
                    class="h-96 border-8 object-cover border-slate-100 -rotate-6 shadow-2xl" />
                <img src="images/alumni/ryezi.webp" alt="Mahasiswa 4"
                    class="h-96 border-8 object-cover border-slate-100 rotate-6 shadow-2xl" />
            </div>
        </div>

        <!-- Bagian Utama -->
        <section class="w-full h-full flex items-center justify-center bg-cover bg-center relative sm:pt-24 z-0"
            style="background-image: url('/images/bg1.webp')">
            <div class="absolute inset-0 bg-gradient-to-tr from-[#00426d] via-[#009da5] to-[#f15b67] opacity-80 z-10">
            </div>
            <div class="text-center text-slate-50 relative z-20 p-12 mb-28 sm:mt-28 sm:mx-28">
                <div class="text-base">
                    <p class="sm:text-2xl uppercase">Selamat Datang di</p>
                    <p class="mb-4 text-4xl sm:text-6xl font-bold uppercase">
                        Politeknik LP3I Medan
                    </p>
                    <p class="text-justify sm:text-center sm:text-xl">
                        <strong>LP3I</strong> adalah institusi
                        <strong>vokasi bisnis dan teknologi</strong> yang
                        sudah ada di Indonesia sejak tahun
                        <strong>1989.</strong> LP3I memiliki dua jenis
                        sub-institusi yaitu <strong>College</strong> yang
                        menaungi pendidikan 2 tahun siap kerja dan
                        <strong>Politeknik</strong> yang menaungi pendidikan
                        jenjang <strong>D3 & D4.</strong> Saat ini LP3I
                        terdapat di <strong>45 titik</strong> dan tersebar
                        di hampir semua provinsi seluruh Indonesia.
                    </p>
                </div>
                <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="https://pmb.plm.ac.id" target="_blank"
                        class="transform duration-300 bg-slate-50 border-2 border-slate-50 text-[#00426d] text-xl font-bold py-3 px-6 w-60 rounded-md shadow-xl text-center hover:translate-y-[-10px] active:scale-95 active:bg-opacity-80">Daftar
                        Sekarang!</a>
                    <a aria-label="Chat on WhatsApp"
                        href="https://wa.me/+628116409111?text=Halo,%20saya%20ingin%20bertanya%20lebih%20lanjut%20tentang%20Politeknik%20LP3I%20Medan..."
                        class="transform duration-300 bg-transparent border-2 border-slate-50 text-slate-50 text-xl font-bold py-3 px-6 w-60 rounded-md shadow-xl text-center flex items-center justify-center hover:translate-y-[-10px] active:scale-95 active:bg-opacity-80">
                        <i class="fab fa-whatsapp mr-2 text-2xl"></i> Kontak
                    </a>

                </div>

                <div class="mt-4 flex flex-col justify-center items-center gap-4">
                    <h4>-- atau dengan --</h4>
                    <img src="images/logo/pmb_qr.svg" alt="QR Code" class="h-28 w-auto object-contain shadow-2xl" />
                </div>
            </div>
        </section>

        <!-- Alasan Kuliah di LP3I -->
        <div class="relative flex justify-center items-center z-10">
            <h2
                class="absolute p-4 mx-8 sm:m-0 text-2xl sm:text-4xl sm:w-1/2 font-bold text-center uppercase rounded-xl sm:rounded-2xl shadow-xl bg-slate-100 text-[#f15b67]">
                Alasan Kuliah di Politeknik LP3I Medan
            </h2>
        </div>

        <!-- Benefit 1 -->
        <section class="bg-[#009da5] flex justify-center p-12">
            <div class="my-8 sm:mb-24 grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-8">
                <!-- Kolom Kiri -->
                <div class="space-y-2 sm:space-y-6">
                    <div
                        class="p-4 sm:p-6 bg-[#007d8a] rounded-lg sm:hover:bg-[#008c99] transition-colors flex items-center">
                        <i class="fas fa-square-check text-2xl sm:text-3xl mr-4 sm:mr-6 text-slate-200"></i>
                        <span class="text-slate-200 text-base sm:text-lg">Pengalaman Lebih Dari
                            <strong>34 Tahun</strong>.</span>
                    </div>
                    <div
                        class="p-4 sm:p-6 bg-[#007d8a] rounded-lg sm:hover:bg-[#008c99] transition-colors flex items-center">
                        <i class="fas fa-square-check text-2xl sm:text-3xl mr-4 sm:mr-6 text-slate-200"></i>
                        <span class="text-slate-200 text-base sm:text-lg">Penampilan Mahasiswa
                            <strong>Rapi & Menarik.</strong></span>
                    </div>
                    <div
                        class="p-4 sm:p-6 bg-[#007d8a] rounded-lg sm:hover:bg-[#008c99] transition-colors flex items-center">
                        <i class="fas fa-square-check text-2xl sm:text-3xl mr-4 sm:mr-6 text-slate-200"></i>
                        <span class="text-slate-200 text-base sm:text-lg"><strong>Dosen Praktisi</strong> & sistem
                            pembelajaran <strong>70% Praktik.</strong></span>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-2 sm:space-y-6">
                    <div
                        class="p-4 sm:p-6 bg-[#007d8a] rounded-lg sm:hover:bg-[#008c99] transition-colors flex items-center">
                        <i class="fas fa-square-check text-2xl sm:text-3xl mr-4 sm:mr-6 text-slate-200"></i>
                        <span class="text-slate-200 text-base sm:text-lg">Terakreditasi
                            <strong>Institusi B.</strong></span>
                    </div>
                    <div
                        class="p-4 sm:p-6 bg-[#007d8a] rounded-lg sm:hover:bg-[#008c99] transition-colors flex items-center">
                        <i class="fas fa-square-check text-2xl sm:text-3xl mr-4 sm:mr-6 text-slate-200"></i>
                        <span class="text-slate-200 text-base sm:text-lg">Biaya Kuliah Dapat di
                            <strong>Cicil Selama 10 Bulan.</strong></span>
                    </div>
                    <div
                        class="p-4 sm:p-6 bg-[#007d8a] rounded-lg sm:hover:bg-[#008c99] transition-colors flex items-center">
                        <i class="fas fa-square-check text-2xl sm:text-3xl mr-4 sm:mr-6 text-slate-200"></i>
                        <span class="text-slate-200 text-base sm:text-lg"><strong>Sertifikasi Kompetensi</strong> Dari
                            <strong>BNSP.</strong></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefit 2 -->
        <section class="relative flex justify-center items-center z-10">
            <div class="absolute sm:w-2/3 flex flex-row gap-2 justify-center sm:justify-between">
                <!-- First Box -->
                <div id="box1"
                    class="benefit-box bg-slate-100 text-center rounded-xl sm:rounded-3xl shadow-xl p-4 sm:px-4 sm:py-8 flex flex-col items-center w-16 h-16 sm:w-52 sm:h-48 transition hover:scale-105">
                    <i class="fas fa-medal text-4xl text-[#009da5] mb-4"></i>
                    <p
                        class="benefit-text hidden sm:block bg-slate-100 sm:bg-transparent p-2 rounded-md font-semibold text-xs sm:text-base text-slate-600 shadow-lg sm:shadow-none">
                        Politeknik Sw. Terbaik Di Sumatera Utara
                    </p>
                </div>
                <!-- Second Box -->
                <div id="box2"
                    class="benefit-box bg-slate-100 text-center rounded-xl sm:rounded-3xl shadow-xl p-4 sm:px-4 sm:py-8 flex flex-col items-center w-16 h-16 sm:w-52 sm:h-48 transition hover:scale-105">
                    <i class="fas fa-building text-4xl text-[#009da5] mb-4"></i>
                    <p
                        class="benefit-text hidden sm:block bg-slate-100 sm:bg-transparent p-2 rounded-md font-semibold text-xs sm:text-base text-slate-600 shadow-lg sm:shadow-none">
                        Menjalin relasi lebih dari 100 Perusahaan
                    </p>
                </div>
                <!-- Third Box -->
                <div id="box3"
                    class="benefit-box bg-slate-100 text-center rounded-xl sm:rounded-3xl shadow-xl p-4 sm:px-4 sm:py-8 flex flex-col items-center w-16 h-16 sm:w-52 sm:h-48 transition hover:scale-105">
                    <i class="fas fa-briefcase text-4xl text-[#009da5] mb-4"></i>
                    <p
                        class="benefit-text hidden sm:block bg-slate-100 sm:bg-transparent p-2 rounded-md font-semibold text-xs sm:text-base text-slate-600 shadow-lg sm:shadow-none">
                        Fasilitas penempatan kerja
                    </p>
                </div>
                <!-- Fourth Box -->
                <div id="box4"
                    class="benefit-box bg-slate-100 text-center rounded-xl sm:rounded-3xl shadow-xl p-4 sm:px-4 sm:py-8 flex flex-col items-center w-16 h-16 sm:w-52 sm:h-48 transition hover:scale-105">
                    <i class="fas fa-user-graduate text-4xl text-[#009da5] mb-4"></i>
                    <p
                        class="benefit-text hidden sm:block bg-slate-100 sm:bg-transparent p-2 rounded-md font-semibold text-xs sm:text-base text-slate-600 shadow-lg sm:shadow-none">
                        Pendidikan berbasis keahlian & keterampilan
                    </p>
                </div>
                <!-- Fifth Box -->
                <div id="box5"
                    class="benefit-box bg-slate-100 text-center rounded-xl sm:rounded-3xl shadow-xl p-4 sm:px-4 sm:py-8 flex flex-col items-center w-16 h-16 sm:w-52 sm:h-48 transition hover:scale-105">
                    <i class="fas fa-cogs text-4xl text-[#009da5] mb-4"></i>
                    <p
                        class="benefit-text hidden sm:block bg-slate-100 sm:bg-transparent p-2 rounded-md font-semibold text-xs sm:text-base text-slate-600 shadow-lg sm:shadow-none">
                        Mendapatkan hardskill & softskill untuk dunia kerja
                    </p>
                </div>
            </div>
        </section>

        <script>
            // Fungsi untuk menutup semua teks
            function closeAllTexts() {
                document
                    .querySelectorAll(".benefit-text")
                    .forEach((t) => t.classList.add("hidden"));
            }

            document.querySelectorAll(".benefit-box").forEach((box) => {
                box.addEventListener("click", (event) => {
                    if (window.innerWidth < 640) {
                        // hanya di mobile
                        event.stopPropagation(); // hentikan propagasi event click
                        const text = box.querySelector(".benefit-text");
                        if (text.classList.contains("hidden")) {
                            // Sembunyikan semua teks lainnya
                            closeAllTexts();
                            // Tampilkan teks dari box yang diklik
                            text.classList.remove("hidden");
                        } else {
                            text.classList.add("hidden");
                        }
                    }
                });
            });

            // Menutup teks ketika klik di luar kotak
            document.addEventListener("click", (event) => {
                if (window.innerWidth < 640) {
                    // hanya di mobile
                    if (!event.target.closest(".benefit-box")) {
                        closeAllTexts();
                    }
                }
            });
        </script>

        <!-- Program Studi Peminatan -->
        <section class="p-12 flex justify-center sm:m-12 sm:p-0">
            <div class="flex flex-col sm:flex-row items-center max-w-screen-xl mt-8 sm:mt-0">
                <!-- Kotak 1 -->
                <div class="relative w-full h-64 sm:h-3/4 p-2 sm:p-4 bg-slate-100 rounded-t-2xl sm:rounded-l-3xl sm:rounded-r-none shadow-2xl"
                    -->
                    <img src="images/alumni/keisha.webp" alt="Descriptive Alt Text"
                        class="w-full h-full rounded-t-lg sm:rounded-l-2xl sm:rounded-r-none object-cover hover:opacity-90 transition" />
                    <h1
                        class="absolute uppercase bottom-5 left-6 sm:bottom-6 sm:left-7 transform -translate-x-1 w-2/3 text-xl sm:text-3xl font-bold text-white bg-[#00426d] bg-opacity-75 px-4 py-2 rounded-lg">
                        Program Studi Peminatan
                    </h1>
                </div>
                <!-- Kotak 2 -->
                <article
                    class="w-full sm:h-3/4 flex flex-col p-4 sm:p-12 bg-slate-100 shadow-2xl rounded-b-2xl sm:rounded-b-none sm:rounded-r-3xl">
                    <h2
                        class="text-base sm:text-5xl uppercase text-center sm:text-left font-bold text-white sm:text-[#00426d] p-2 sm:p-0 sm:pb-8 bg-[#00426d] sm:bg-transparent rounded-lg sm:rounded-none shadow-lg sm:shadow-none mb-4 sm:mb-8 sm:border-b-4 border-slate-600">
                        Keahlian Berbasis Link & Match
                    </h2>
                    <p class="text-base sm:text-2xl text-justify text-slate-700">
                        Politeknik LP3I Medan menerapkan sistem pembelajaran
                        <strong>70% praktik dan 30% teori.</strong> Hal ini
                        guna menunjang keberhasilan kamu untuk dapat
                        memiliki keahlian yang dapat diterapkan pada latihan
                        kerja, Praktik Kerja Industri, maupun di lapangan
                        kerja yang sesungguhnya.
                    </p>
                </article>
            </div>
        </section>

        <!-- Tanda Panah Ke Bawah -->
        <div class="relative flex justify-center items-center z-10">
            <i class="fas fa-chevron-down text-2xl text-[#00426d] p-4 rounded-full bg-white absolute"></i>
        </div>

        <!-- Jurusan -->
        <section class="bg-gradient-to-b from-[#00426d] to-[#009da5] p-12">
            <div class="sm:flex flex-row items-start justify-center gap-12 my-8">
                <div>
                    <!-- Sarjana Terapan (S1) -->
                    <h2
                        class="text-2xl sm:text-4xl font-bold text-white text-center uppercase pb-8 border-b-4 border-slate-200">
                        Sarjana Terapan (S1)
                    </h2>
                    <!-- Tanda Panah Ke Bawah -->
                    <div class="relative flex justify-center items-center z-10">
                        <i
                            class="fas fa-circle-down text-xl text-[#009da5] p-2 rounded-full bg-slate-200 absolute"></i>
                    </div>
                    <div class="flex flex-col gap-4 mt-12">
                        <!-- Bisnis Digital -->
                        <div class="flex justify-center">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div
                                    class="flex items-center sm:items-start p-2 bg-slate-100 border-8 border-white rounded-xl shadow-xl w-full h-48">
                                    <div class="w-1/3 sm:w-1/5 flex justify-center m-4">
                                        <!-- icon -->
                                        <img src="images/prodi/bd.png" alt="Bisnis Digital" />
                                    </div>
                                    <div class="w-2/3 text-left ml-4">
                                        <h3 class="text-lg sm:text-2xl font-bold text-gray-700">
                                            Bisnis Digital
                                        </h3>
                                        <p class="text-sm text-gray-600 italic">
                                            Konsentrasi :
                                        </p>
                                        <ul class="list-disc list-inside text-sm sm:text-base text-gray-600">
                                            <li>Startup Bisnis</li>
                                            <li>Digital Marketing</li>
                                            <li>Konten Digital</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Teknologi Rekayasa Komputer -->
                        <div class="flex justify-center">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div
                                    class="flex items-center sm:items-start p-2 bg-slate-100 border-8 border-white rounded-xl shadow-xl w-full h-48">
                                    <div class="w-1/3 sm:w-1/5 flex justify-center m-4">
                                        <!-- icon -->
                                        <img src="images/prodi/trk.png" alt="Teknologi Rekayasa Komputer" />
                                    </div>
                                    <div class="w-2/3 text-left ml-4">
                                        <h3 class="text-base sm:text-2xl font-bold text-gray-700">
                                            Teknologi Rekayasa Komputer
                                        </h3>
                                        <p class="text-sm text-gray-600 italic">
                                            Konsentrasi :
                                        </p>
                                        <ul class="list-disc list-inside text-sm sm:text-base text-gray-600">
                                            <li>Programming</li>
                                            <li>Computer Design</li>
                                            <li>Data Mining</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- Diploma III -->
                    <h2
                        class="text-2xl sm:text-4xl font-bold text-white text-center uppercase mt-16 sm:mt-0 pb-8 border-b-4 border-slate-200">
                        Diploma III
                    </h2>
                    <!-- Tanda Panah Ke Bawah -->
                    <div class="relative flex justify-center items-center z-10">
                        <i
                            class="fas fa-circle-down text-xl text-[#009da5] p-2 rounded-full bg-slate-200 absolute"></i>
                    </div>
                    <div class="flex flex-col gap-4 mt-12">
                        <!-- Akuntansi -->
                        <div class="flex justify-center">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div
                                    class="flex items-center sm:items-start p-2 bg-slate-100 border-8 border-white rounded-xl shadow-xl w-full h-48">
                                    <div class="w-1/3 sm:w-1/4 flex justify-center m-4">
                                        <!-- icon -->
                                        <img src="images/prodi/ak.png" alt="Akuntansi" />
                                    </div>
                                    <div class="w-2/3 text-left ml-4">
                                        <h3 class="text-lg sm:text-2xl font-bold text-gray-700">
                                            Akuntansi
                                        </h3>
                                        <p class="text-sm text-gray-600 italic">
                                            Konsentrasi :
                                        </p>
                                        <ul class="list-disc list-inside text-sm sm:text-base text-gray-600">
                                            <li>Komputer Akuntansi</li>
                                            <li>Keuangan Syari'ah</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Administrasi Bisnis -->
                        <div class="flex justify-center">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div
                                    class="flex items-center sm:items-start p-2 bg-slate-100 border-8 border-white rounded-xl shadow-xl w-full h-48">
                                    <div class="w-1/3 sm:w-1/4 flex justify-center m-4">
                                        <!-- icon -->
                                        <img src="images/prodi/ab.png" alt="Administrasi Bisnis" />
                                    </div>
                                    <div class="w-2/3 text-left ml-4">
                                        <h3 class="text-base sm:text-2xl font-bold text-gray-700">
                                            Administrasi Bisnis
                                        </h3>
                                        <p class="text-sm text-gray-600 italic">
                                            Konsentrasi :
                                        </p>
                                        <ul class="list-disc list-inside text-sm sm:text-base text-gray-600">
                                            <li>
                                                Administrasi Perkantoran
                                            </li>
                                            <li>Administrasi Logistik</li>
                                            <li>Bisnis Internasional</li>
                                            <li>Bisnis Ritel</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Teknologi Komputer -->
                        <div class="flex justify-center">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div
                                    class="flex items-center sm:items-start p-2 bg-slate-100 border-8 border-white rounded-xl shadow-xl w-full h-48">
                                    <div class="w-1/3 sm:w-1/4 flex justify-center m-4">
                                        <!-- icon -->
                                        <img src="images/prodi/tk.png" alt="Teknologi Komputer" />
                                    </div>
                                    <div class="w-2/3 text-left ml-4">
                                        <h3 class="text-md sm:text-2xl font-bold text-gray-700">
                                            Teknologi Komputer
                                        </h3>
                                        <p class="text-sm text-gray-600 italic">
                                            Konsentrasi :
                                        </p>
                                        <ul class="list-disc list-inside text-sm sm:text-base text-gray-600">
                                            <li>Programming</li>
                                            <li>Computer Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fasilitas Layanan Penempatan Kerja -->
        <div class="relative flex justify-center items-center z-10">
            <h2
                class="absolute p-4 mx-8 sm:m-0 text-2xl sm:text-4xl sm:w-1/2 font-bold text-center uppercase rounded-xl sm:rounded-2xl shadow-xl bg-slate-100 text-[#f15b67]">
                Fasilitas Layanan Penempatan Kerja
            </h2>
        </div>
        <!-- Fasilitas Layanan Penempatan Kerja -->
        <section class="bg-slate-200 flex justify-center my-12">
            <div class="container mx-auto text-left px-12">
                <div class="mt-10">
                    <h3 class="text-lg sm:text-2xl font-bold uppercase text-[#00426d]">
                        Apa itu layanan penempatan kerja di Politeknik LP3I
                        Medan?
                    </h3>
                    <p class="mt-2 text-base sm:text-xl text-justify text-slate-800">
                        Layanan penempatan kerja di Politeknik LP3I Medan
                        dikelola oleh suatu divisi yang disebut divisi
                        <strong>C&P (Cooperation & Placement),</strong> yang
                        bertugas menjembatani kebutuhan informasi dunia
                        kerja yang diperlukan dan juga untuk menjawab
                        tantangan dunia kerja. Perkembangan yang terjadi di
                        dunia kerja memang terjadi sangat cepat sesuai
                        dinamika industri, Politeknik LP3I Medan dituntut
                        untuk selalu mampu menjawab tantangan yang diberikan
                        dengan mencoba menjembatani apa yang diperlukan
                        dunia kerja dengan bekal ilmu yang diberikan kepada
                        peserta didik agar menjadi lulusan yang mampu masuk
                        ke dunia kerja.
                    </p>
                    <h3
                        class="mt-8 py-4 border-y-2 border-[#009da5] text-center text-3xl sm:text-8xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#00426d] to-[#009da5]">
                        Memberikan Bukti<br />Bukan Janji
                    </h3>
                    <div class="mt-16 flex w-auto justify-center">
                        <h2
                            class="text-center text-white py-2 sm:text-xl uppercase w-full px-4 bg-[#00426d] rounded-lg shadow-xl font-medium">
                            Kami Yang Sudah Menjadi Profesional Muda
                        </h2>
                    </div>

                    <!-- Start Alumni Bekerja -->
                    <div class="flex justify-center mt-8">
                        <div class="container mx-auto text-left text-xs sm:text-base">
                            <div class="overflow-x-auto sm:grid sm:grid-cols-3 grid grid-rows-3 gap-4">
                                @forelse ($alumnis as $alumni)
                                    <table class="min-w-full">
                                        <tr>
                                            <td rowspan="5" class="w-20 sm:w-32 pr-2">
                                                <img src="{{ Storage::url($alumni->image) }}" alt="Foto"
                                                    class="w-full h-44 object-cover rounded-sm" />
                                            </td>
                                            <td class="w-8">Nama</td>
                                            <td class="w-2 text-center px-2">:</td>
                                            <td class="font-bold">{{ $alumni->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-8">Prodi</td>
                                            <td class="w-2 text-center px-2">:</td>
                                            <td>{{ $alumni->prodi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-8">Kerja</td>
                                            <td class="w-2 text-center px-2">:</td>
                                            <td>{{ $alumni->kerja }}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-8">Posisi</td>
                                            <td class="w-2 text-center px-2">:</td>
                                            <td>{{ $alumni->posisi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-8">Alumni</td>
                                            <td class="w-2 text-center px-2">:</td>
                                            <td>{{ $alumni->sekolah }}</td>
                                        </tr>
                                    </table>
                                @empty
                                    <p>Belum ada data alumni.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <!-- End Alumni Bekerja -->

                    <!-- Start Perusahaan -->
                    <div class="mt-12 flex flex-col items-center">
                        <h2
                            class="text-center sm:text-xl uppercase text-white w-full py-2 px-4 bg-[#00426d] rounded-lg shadow-xl font-medium">
                            Mitra Perusahaan Politeknik LP3I Medan
                        </h2>
                        <!-- Start Logo -->
                        <div class="grid grid-cols-4 sm:grid-cols-10 gap-4 mt-8">
                            @forelse ($mitras as $mitra)
                                <img src="{{ Storage::url($mitra->image) }}" class="w-full h-auto object-contain" />
                            @empty
                                <p>Belum ada data perusahaan.</p>
                            @endforelse
                        </div>
                        <!-- End Logo -->
                        <em class="text-center
                                    text-xs sm:text-lg mt-4">
                            Dan masih banyak lagi relasi perusahaan yang
                            sudah bekerja sama dengan LP3I
                        </em>
                    </div>
                    <!-- End Perusahaan -->
                    <div class="w-full mt-12">
                        <img src="/images/laptop.webp" alt="Laptop" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Proses Pendaftaran -->
        <section class="bg-[#00426d] mx-12 p-8 rounded-3xl shadow-xl">
            <div class="flex flex-col justify-between items-center mb-8 sm:m-0">
                <h3 class="text-4xl sm:text-6xl font-bold text-slate-200 text-center mb-4 uppercase">
                    Proses Pendaftaran
                </h3>
                <!-- Menyembunyikan icon di device desktop -->
                <i class="fas fa-chevron-down text-2xl text-slate-100"></i>
                <a href="https://pmb.plm.ac.id" target="_blank" class="my-6">
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-[#00426d] font-medium py-2 px-4 rounded inline-flex items-center">
                        <i class="fas fa-search w-4 h-4 mr-2"></i>
                        <span>pmb.plm.ac.id</span>
                    </button>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-center text-white space-y-8 sm:space-y-0">
                <div class="flex flex-col items-center w-full sm:w-1/3 px-4">
                    <i class="fas fa-mobile text-6xl sm:text-8xl mb-4"></i>
                    <p class="text-center sm:text-xl">
                        Mengisi formulir pendaftaran online melalui komputer
                        atau smartphone
                    </p>
                </div>
                <div
                    class="w-full sm:w-1/3 border-l-0 sm:border-l-2 sm:border-r-2 border-white px-4 flex flex-col items-center">
                    <i class="fas fa-comments text-6xl sm:text-8xl mb-4"></i>
                    <p class="text-center sm:text-xl">
                        Melakukan Wawancara
                    </p>
                </div>
                <div class="flex flex-col items-center w-full sm:w-1/3 px-4">
                    <i class="fas fa-file-invoice-dollar text-6xl sm:text-8xl mb-4"></i>
                    <p class="text-center sm:text-xl">
                        Registrasi ulang & melakukan pembayaran biaya
                        pendidikan tahun pertama
                    </p>
                </div>
            </div>
        </section>

        <!-- Tanda Panah Ke Bawah -->
        <div class="relative flex justify-center items-center z-10">
            <i class="fas fa-circle-down text-4xl text-[#00426d] p-2 rounded-full bg-white absolute shadow-xl"></i>
        </div>

        <!-- Persyaratan Berkas -->
        <section class="bg-gradient-to-b from-[#00426d] to-[#009da5] mt-12 p-12">
            <h2 class="text-slate-200 text-lg sm:text-4xl font-bold uppercase mb-4 text-center">
                Persyaratan berkas penerimaan mahasiswa baru LP3I
            </h2>
            <div class="sm:flex flex-row justify-center items-center gap-16">
                <div class="w-1/3 p-4 sm:block hidden">
                    <img src="images/berkas.webp" alt="berkas" />
                </div>
                <div
                    class="sm:w-1/3 text-base sm:text-xl text-slate-700 p-6 bg-slate-200 rounded-2xl shadow-[10px_10px_0_0_rgba(255,255,255,0.5)]">
                    <ul class="list-none space-y-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>FotoCopy <strong>Ijazah Legalisir</strong><br /><i>(2 Lembar)</i></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>FotoCopy <strong>SKHU Legalisir</strong><br /><i>(2 Lembar)</i></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>FotoCopy <strong>Kartu Keluarga</strong><br /><i>(1 Lembar)</i></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>FotoCopy
                                <strong>KTP / Kartu Pelajar</strong><br /><i>(1 Lembar)</i></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>FotoCopy <strong>Akte Kelahiran</strong><br /><i>(1 Lembar)</i></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span><strong>Pas Foto 3 x 4 (Warna)</strong><br /><i>(4 Lembar)</i></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span><strong>Pas Foto 4 x 6 (Warna)</strong><br /><i>(4 Lembar)</i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Investasi Biaya Pendidikan -->
        <section class="bg-slate-200 p-12">
            <h2 class="uppercase text-slate-600 font-bold text-xl sm:text-4xl text-center">
                Investasi Biaya Pendidikan
                <span>Tahun ajaran 2025/2026</span>
            </h2>

            <div class="flex flex-col sm:flex-row sm:justify-center mt-8 gap-8">
                <!-- Pendaftaran Awal -->
                <div class="sm:w-1/3 sm:order-first">
                    <h3 class="font-bold text-center text-slate-200 uppercase bg-[#009da5] p-2">
                        Pendaftaran Awal
                    </h3>
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-slate-600 text-center text-slate-200">
                            <tr>
                                <th class="p-2 border-b border-slate-200">
                                    No
                                </th>
                                <th class="p-2 border-b border-slate-200">
                                    Rincian
                                </th>
                                <th class="p-2 border-b border-slate-200">
                                    Jumlah
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    1
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Uang Pendaftaran
                                </td>
                                <td class="p-2 text-center font-semibold border-b border-slate-200">
                                    Rp.350.000,-
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    2
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    PKKMB
                                </td>
                                <td class="p-2 text-center font-semibold border-b border-slate-200">
                                    Rp.250.000,-
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Biaya Investasi Kuliah -->
                <div class="sm:w-1/3">
                    <h3 class="font-bold text-center text-slate-200 uppercase bg-[#009da5] p-2">
                        Biaya Investasi Kuliah
                    </h3>
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-slate-600 text-center text-slate-200">
                            <tr>
                                <th class="p-2 border-b border-slate-200">
                                    Uraian
                                </th>
                                <th class="p-2 border-b border-slate-200">
                                    Rincian
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            <tr>
                                <td class="p-2 text-center border-b-8 font-semibold border-slate-200">
                                    A. Registrasi Awal
                                </td>
                                <td class="p-2 text-center border-b-8 font-semibold border-slate-200">
                                    Rp.4.200.000
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-2 text-center border-b font-semibold border-slate-200">
                                    B. Cicilan Bulanan
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 1
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 3
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 4
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 5
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 6
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 7
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 8
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 9
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Angsuran 10
                                </td>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Rp.980.000
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Fasilitas Yang Kamu Dapatkan -->
                <div class="sm:w-1/3 sm:order-last">
                    <h3 class="font-bold text-center text-slate-200 uppercase bg-[#009da5] p-2">
                        Fasilitas yang kamu dapatkan
                    </h3>
                    <table class="table-auto w-full border-collapse">
                        <tbody class="bg-slate-600 text-center text-slate-200">
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Penempatan Kerja
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Penempatan Magang / KKI
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Biaya SKS
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Training Soft Skill
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Student Care Centre
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Materi Kuliah Inti Prodi Digital Book
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    UTS & UAS
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Praktek Laboratorium
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Pembimbing Akademik
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Seragam & Jas Almamater
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Ekstrakulikuler Mahasiswa
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b border-slate-200">
                                    Pembangunan
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Beasiswa Yang Tersedia -->
                <div class="sm:w-1/3">
                    <h3 class="font-bold text-center text-slate-200 uppercase bg-[#009da5] p-2">
                        Beasiswa Yang Tersedia
                    </h3>
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-slate-600 text-center text-slate-200">
                            <tr>
                                <th class="p-2 border-b border-slate-200">
                                    Beasiswa Akademik
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50 border-b-8 border-slate-200">
                            <tr>
                                <td class="p-2 text-center">
                                    Beasiswa Ranking Sekolah
                                </td>
                            </tr>
                        </tbody>
                        <thead class="bg-slate-600 text-center text-slate-200">
                            <tr>
                                <th class="p-2 border-b border-slate-200">
                                    Beasiswa Prestasi Non Akademik
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50 border-b-8 border-slate-200">
                            <tr>
                                <td class="p-2 text-center border-b border-slate-200">
                                    Beasiswa Anak TNI/POLRI, Guru,
                                    PNS/Aparatur Pemerintahan
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 text-center">
                                    Beasiswa Prestasi Olahraga/Atlet
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Alamat Kampus -->
        <section class="px-12 py-8">
            <div class="text-center py-4 border-t-2 border-slate-600">
                <!-- Judul Alamat Kampus -->
                <h2 class="text-4xl font-bold text-slate-600 uppercase mb-6">
                    Alamat Kampus
                </h2>

                <!-- Alamat Kampus -->
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-8">
                    <!-- Kampus 1 -->
                    <div class="max-w-md w-full p-4 bg-white rounded-lg shadow-lg flex items-center justify-center mb-4 sm:mb-0 cursor-pointer"
                        onclick="window.open('https://maps.app.goo.gl/5fKArEhUxq5MHETi6', '_blank')">
                        <div class="text-center sm:text-left sm:flex sm:items-center">
                            <i class="fas fa-building text-6xl text-[#009da5] mb-4 sm:mb-0 sm:mx-8"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-[#009da5]">
                                    POLITEKNIK LP3I MEDAN SEI SERAYU
                                </h3>
                                <p class="text-gray-600">
                                    Jl. Sei Serayu No. 48D Babura Medan
                                    Sunggal, Sumatera Utara, 20121
                                </p>
                                <!-- Tombol untuk tampilan desktop -->
                                <div class="hidden sm:block">
                                    <a href="https://maps.app.goo.gl/5fKArEhUxq5MHETi6" target="_blank"
                                        class="mt-2 inline-block px-4 py-2 bg-[#009da5] text-white rounded-lg hover:bg-[#007f8a] hover:text-gray-200 transition duration-300 ease-in-out">
                                        Lihat di Google Maps
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kampus 2 -->
                    <div class="max-w-md w-full p-4 bg-[#009da5] rounded-lg shadow-lg flex items-center justify-center cursor-pointer"
                        onclick="window.open('https://maps.app.goo.gl/sKQt5aUNkdBEJGwM8', '_blank')">
                        <div class="text-center sm:text-left sm:flex sm:items-center">
                            <i class="fas fa-building text-6xl text-white mb-4 sm:mb-0 sm:mx-8"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-white">
                                    POLITEKNIK LP3I MEDAN OUTLET MARELAN
                                </h3>
                                <p class="text-slate-200">
                                    Jl. Platina Raya No.8 ABC, Titi Papan,
                                    Medan Marelan, Sumatera Utara, 20255
                                </p>
                                <!-- Tombol untuk tampilan desktop -->
                                <div class="hidden sm:block">
                                    <a href="https://maps.app.goo.gl/sKQt5aUNkdBEJGwM8" target="_blank"
                                        class="mt-2 inline-block px-4 py-2 bg-white text-[#009da5] rounded-lg hover:bg-[#e5e5e5] hover:text-[#006f7a] transition duration-300 ease-in-out">
                                        Lihat di Google Maps
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Bagian Sosial Media -->
                <div class="mt-8 flex flex-wrap justify-center items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <a href="https://wa.me/628116409111" target="_blank">
                            <i class="fab fa-whatsapp text-3xl text-gray-600 hover:text-[#009da5]"></i>
                        </a>
                        <a href="tel:+628116409111">
                            <i class="fas fa-phone text-3xl text-gray-600 hover:text-[#009da5]"></i>
                        </a>
                        <span class="hidden sm:inline text-gray-600">0811 6409 111</span>
                    </div>

                    <div class="flex items-center space-x-2">
                        <a href="https://www.instagram.com/lp3i_medan/" target="_blank">
                            <i class="fab fa-instagram text-3xl text-gray-600 hover:text-[#009da5]"></i>
                        </a>
                        <a href="https://www.tiktok.com/@lp3i_medan" target="_blank">
                            <i class="fab fa-tiktok text-3xl text-gray-600 hover:text-[#009da5]"></i>
                        </a>
                        <span class="hidden sm:inline text-gray-600">@lp3i_medan</span>
                    </div>

                    <div class="flex items-center space-x-2">
                        <a href="https://www.youtube.com/lp3imedan" target="_blank">
                            <i class="fab fa-youtube text-3xl text-gray-600 hover:text-[#009da5]"></i>
                        </a>
                        <a href="https://www.facebook.com/lp3imedan" target="_blank">
                            <i class="fab fa-facebook text-3xl text-gray-600 hover:text-[#009da5]"></i>
                        </a>
                        <span class="hidden sm:inline text-gray-600">Politeknik LP3I Medan</span>
                    </div>

                    <div class="flex items-center space-x-2">
                        <a href="https://www.plm.ac.id" target="_blank">
                            <i class="fas fa-globe text-3xl text-gray-600 hover:text-[#009da5]"></i>
                        </a>
                        <span class="hidden sm:inline text-gray-600">www.plm.ac.id</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <section class="flex items-center justify-center bg-slate-600 px-12 py-4">
        <a href="https://pmb.plm.ac.id" target="_blank" class="my-6">
            <button
                class="bg-gray-200 hover:bg-gray-300 text-2xl text-slate-600 font-medium py-2 px-4 rounded inline-flex items-center">
                <i class="fas fa-paper-plane w-8 mr-2"></i>
                <span>Daftar Online Sekarang Juga!</span>
            </button>
        </a>
    </section>
</body>
<script src="https://kit.fontawesome.com/2b9231c522.js" crossorigin="anonymous"></script>

</html>
