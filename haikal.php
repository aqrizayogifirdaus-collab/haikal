<?php
// ================================
// KONFIGURASI UNDANGAN
// ================================

$nama_pria = "muhammad haikal firmansyah";
$nama_wanita = "maria amatella azzecca";

$tanggal_acara = "24 Agustus 2026";
$waktu_acara = "10.00 WIB - Selesai";
$lokasi_acara = "Gedung having great";
$alamat = "Jl. Bahagia No. 123, Jakarta";

// Nomor WhatsApp
// Gunakan kode negara tanpa tanda +
// Contoh Indonesia: 6281234567890
$nomor_wa = "6281234567890";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Undangan Pernikahan <?= $nama_pria ?> & <?= $nama_wanita ?>
    </title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f3ed;
            color: #333;
            line-height: 1.7;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 100vh;

            display: flex;
            flex-direction: column;

            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 30px;

            color: white;

            background:
                linear-gradient(
                    rgba(0,0,0,.55),
                    rgba(0,0,0,.55)
                ),
                url("https://www.facebook.com/djoko.eryanto/posts/top-7-orang-random-yang-pernah-viral-di-internet-dan-sering-dijadikan-meme-oleh-/26489587123963605/");

            background-size: cover;
            background-position: center;
        }

        .hero h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 70px;
            font-weight: 400;

            margin-bottom: 10px;
        }

        .hero p {
            font-size: 17px;
        }

        .tanggal {
            margin-top: 20px;
            font-size: 18px;
            font-weight: 500;
        }

        .btn {
            display: inline-block;

            margin-top: 30px;

            padding: 13px 28px;

            background: #a67c52;
            color: white;

            text-decoration: none;

            border-radius: 30px;

            transition: .3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            background: #8c663f;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 90%;
            max-width: 1000px;

            margin: auto;
        }

        .section {
            background: white;

            margin-top: 40px;

            padding: 50px 30px;

            border-radius: 20px;

            text-align: center;

            box-shadow:
                0 10px 30px rgba(0,0,0,.08);
        }

        .section h2 {
            font-family: 'Great Vibes', cursive;

            font-size: 48px;

            color: #a67c52;

            margin-bottom: 20px;
        }

        /* =========================
           COUPLE
        ========================= */

        .couple {
            display: flex;

            justify-content: center;

            align-items: center;

            gap: 60px;

            flex-wrap: wrap;
        }

        .person {
            width: 280px;
        }

        .person img {
            width: 180px;
            height: 180px;

            object-fit: cover;

            border-radius: 50%;

            border: 6px solid #eee;

            margin-bottom: 15px;
        }

        .person h3 {
            font-size: 23px;

            color: #a67c52;

            margin-bottom: 8px;
        }

        /* =========================
           EVENT
        ========================= */

        .event-info {
            display: flex;

            justify-content: center;

            gap: 20px;

            flex-wrap: wrap;

            margin-top: 30px;
        }

        .event-box {
            width: 250px;

            padding: 25px;

            background: #f7f3ed;

            border-radius: 15px;
        }

        .event-box .icon {
            font-size: 35px;

            margin-bottom: 10px;
        }

        .event-box h3 {
            color: #a67c52;

            margin-bottom: 8px;
        }

        /* =========================
           RSVP
        ========================= */

        .rsvp {
            margin-top: 20px;
        }

        .wa-button {
            display: inline-block;

            padding: 14px 30px;

            background: #25D366;

            color: white;

            border-radius: 30px;

            text-decoration: none;

            font-weight: 600;

            transition: .3s;
        }

        .wa-button:hover {
            transform: scale(1.05);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            text-align: center;

            padding: 40px 20px;

            color: #777;
        }

        footer strong {
            color: #a67c52;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 600px) {

            .hero h1 {
                font-size: 50px;
            }

            .hero p {
                font-size: 14px;
            }

            .section {
                padding: 40px 20px;
            }

            .section h2 {
                font-size: 40px;
            }

            .couple {
                gap: 30px;
            }

        }

    </style>

</head>

<body>


<!-- =========================
     HALAMAN PEMBUKA
========================= -->

<section class="hero">

    <p>
        Dengan penuh rasa syukur,
        kami mengundang Anda
    </p>

    <h1>
        <?= $nama_pria ?>
        &
        <?= $nama_wanita ?>
    </h1>

    <p class="tanggal">
        <?= $tanggal_acara ?>
    </p>

    <a href="#undangan" class="btn">
        💌 Buka Undangan
    </a>

</section>


<div class="container" id="undangan">


<!-- =========================
     PEMBUKA
========================= -->

<section class="section">

    <h2>Assalamu'alaikum</h2>

    <p>
        Dengan memohon rahmat dan ridho Allah SWT,
        kami bermaksud mengundang Bapak/Ibu/Saudara/i
        untuk hadir dalam acara pernikahan kami.
    </p>

    <br>

    <p>
        <i>
            "Dan di antara tanda-tanda kekuasaan-Nya
            ialah Dia menciptakan pasangan-pasangan
            untukmu dari jenismu sendiri."
        </i>
    </p>

</section>


<!-- =========================
     MEMPELAI
========================= -->

<section class="section">

    <h2>Mempelai</h2>

    <div class="couple">


        <!-- MEMPELAI PRIA -->

        <div class="person">

            <img
                src="https://i.pravatar.cc/300?img=12"
                alt="Mempelai Pria"
            >

            <h3>
                <?= $nama_pria ?>
            </h3>

            <p>
                Putra dari Bapak abiqdam
                <br>
                dan Ibu Siti devita sari
            </p>

        </div>


        <!-- MEMPELAI WANITA -->

        <div class="person">

            <img
                src="https://i.pravatar.cc/300?img=32"
                alt="Mempelai Wanita"
            >

            <h3>
                <?= $nama_wanita ?>
            </h3>

            <p>
                Putri dari Bapak lukman hakim
                <br>
                dan Ibu fanny rianawati
            </p>

        </div>

    </div>

</section>


<!-- =========================
     DETAIL ACARA
========================= -->

<section class="section">

    <h2>Detail Acara</h2>

    <div class="event-info">


        <!-- TANGGAL -->

        <div class="event-box">

            <div class="icon">
                📅
            </div>

            <h3>
                Tanggal
            </h3>

            <p>
                <?= $tanggal_acara ?>
            </p>

        </div>


        <!-- WAKTU -->

        <div class="event-box">

            <div class="icon">
                🕐
            </div>

            <h3>
                Waktu
            </h3>

            <p>
                <?= $waktu_acara ?>
            </p>

        </div>


        <!-- LOKASI -->

        <div class="event-box">

            <div class="icon">
                📍
            </div>

            <h3>
                Lokasi
            </h3>

            <p>
                <?= $lokasi_acara ?>
                <br>
                <?= $alamat ?>
            </p>

        </div>

    </div>

</section>


<!-- =========================
     KONFIRMASI
========================= -->

<section class="section">

    <h2>Konfirmasi Kehadiran</h2>

    <p>
        Mohon konfirmasi kehadiran Anda
        melalui WhatsApp.
    </p>

    <div class="rsvp">

        <a
            class="wa-button"
            href="https://wa.me/<?= $nomor_wa ?>?text=Halo%20saya%20ingin%20mengonfirmasi%20kehadiran%20di%20acara%20pernikahan%20<?= urlencode($nama_pria) ?>%20%26%20<?= urlencode($nama_wanita) ?>"
            target="_blank"
        >
            📱 Konfirmasi via WhatsApp
        </a>

    </div>

</section>


</div>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        Merupakan suatu kehormatan dan kebahagiaan
        bagi kami apabila Bapak/Ibu/Saudara/i
        berkenan hadir.
    </p>

    <br>

    <p>
        Hormat kami,
    </p>

    <strong>
        <?= $nama_pria ?> & <?= $nama_wanita ?>
    </strong>

    <br><br>

    <small>
        © <?= date("Y") ?> Undangan Pernikahan
    </small>

</footer>


</body>
</html>