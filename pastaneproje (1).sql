-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Haz 2021, 11:46:04
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pastaneproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisma_saat`
--

CREATE TABLE `calisma_saat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `haftaici_baslangic` time NOT NULL,
  `haftaici_bitis` time NOT NULL,
  `cumartesi_baslangic` time NOT NULL,
  `cumartesi_bitis` time NOT NULL,
  `pazar_baslangic` time NOT NULL,
  `pazar_bitis` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `calisma_saat`
--

INSERT INTO `calisma_saat` (`id`, `haftaici_baslangic`, `haftaici_bitis`, `cumartesi_baslangic`, `cumartesi_bitis`, `pazar_baslangic`, `pazar_bitis`) VALUES
(1, '08:00:00', '17:00:00', '15:24:00', '15:24:00', '15:24:00', '15:24:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraf1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraf2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraf3` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `resim`, `paragraf1`, `paragraf2`, `paragraf3`) VALUES
(1, '60d1c1d0daf5c1_1598452306_resim.png', 'Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur', 'Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış,\r\n                        aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum\r\n                        pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus\r\n                        PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık\r\n                        yazılımları ile pop&uuml;ler olmuştur.', 'Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış,\r\n                        aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum\r\n                        pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus\r\n                        PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık\r\n                        yazılımları ile pop&uuml;ler olmuştur.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `telefon1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_adres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `telefon1`, `telefon2`, `web_adres`, `mail`, `facebook`, `twitter`, `youtube`, `instagram`) VALUES
(1, '5555', '555', 'www.google.com', 'pastane@gmail.com', 'facebook.com', 'twitter.com', 'youtobe.com', 'instagram.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isbasvuru`
--

CREATE TABLE `isbasvuru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adsoyad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `isbasvuru`
--

INSERT INTO `isbasvuru` (`id`, `adsoyad`, `email`, `telefon`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'İbrahim sandıklılı', 'ibrahimsandkll@gmail.com', '55', '60d1f04972c33İletişim Ders Sunumu 2019.pdf', NULL, NULL),
(2, 'İbrahim sandıklılı', 'ibrahimsandkll@gmail.com', '55', '60d1f08051831İletişim Ders Sunumu 2019.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `kategori_aciklama`, `resim`, `created_at`, `updated_at`) VALUES
(6, 'tatlılar', 'Çok tatlı', '60cdbcf1a75501_1598452306_resim.png', NULL, NULL),
(7, 'tatlılar', 'Çok tatlı', '60cdbd4870e5f1_1598452306_resim.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_01_132439_create_flights_table', 1),
(5, '2021_06_07_121424_urunler', 2),
(6, '2021_06_07_121512_kategoriler', 2),
(7, '2021_06_07_121712_urunler', 3),
(8, '2021_06_09_101301_rezervasyonlar', 4),
(9, '2021_06_09_130618_rezervasyonlar', 5),
(10, '2021_06_09_131349_rezervasyonlar', 6),
(11, '2021_06_09_131442_rezervasyonlar', 7),
(12, '2021_06_09_152009_rezervasyonlar', 8),
(13, '2021_06_19_112437_calisma_saat', 9),
(14, '2021_06_19_183750_iletisim', 10),
(15, '2021_06_21_105322_resimgaleri', 11),
(16, '2021_06_21_120937_videogaleri', 12),
(17, '2021_06_21_134300_videogaleri', 13),
(18, '2021_06_21_150247_hakkimizda', 14),
(19, '2021_06_22_111404_vizyon', 15),
(20, '2021_06_22_115309_misyon', 16),
(21, '2021_06_22_124420_yorumlar', 17),
(22, '2021_06_22_133017_musterimesaj', 18),
(23, '2021_06_22_133528_musterimesaj', 19),
(24, '2021_06_22_135835_isbasvuru', 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `misyon`
--

CREATE TABLE `misyon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraf` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `misyon`
--

INSERT INTO `misyon` (`id`, `resim`, `paragraf`) VALUES
(1, '60d1d14532b371_1598452306_resim.png', 'Misyonumuz kısmı budur');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musterimesaj`
--

CREATE TABLE `musterimesaj` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adsoyad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `musterimesaj`
--

INSERT INTO `musterimesaj` (`id`, `adsoyad`, `email`, `telefon`, `konu`, `mesaj`, `created_at`, `updated_at`) VALUES
(1, 'İbrahim sandıklılı', 'ibrahimsandkll@gmail.com', '55', 'asdasd', 'asdfasdfsadf', '2021-06-22 13:48:44', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimgaleri`
--

CREATE TABLE `resimgaleri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resim` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `resimgaleri`
--

INSERT INTO `resimgaleri` (`id`, `resim`) VALUES
(2, '60d07ab3191be1_1598452306_resim.png'),
(3, '60d08db2450621_1598452306_resim.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyonlar`
--

CREATE TABLE `rezervasyonlar` (
  `rezervasyon_id` bigint(20) UNSIGNED NOT NULL,
  `ad_soyad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rezervasyon_tarih` datetime NOT NULL,
  `rezervasyon_durum` int(11) NOT NULL,
  `mesaj` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `rezervasyonlar`
--

INSERT INTO `rezervasyonlar` (`rezervasyon_id`, `ad_soyad`, `email`, `telefon_no`, `rezervasyon_tarih`, `rezervasyon_durum`, `mesaj`, `created_at`, `updated_at`) VALUES
(5, 'ibrahim', 'ibrahimsandkll@gmail.com', '55', '2021-06-03 16:00:00', 0, 'asdfasdf', NULL, NULL),
(6, 'ibrahim', 'ibrahimsandkll@gmail.com', '55', '2021-06-03 16:00:00', 1, 'asdfasdf', NULL, NULL),
(7, 'ibrahim', 'ibrahimsandkll@gmail.com', '55', '2021-06-03 16:00:00', 1, 'adsfasdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` bigint(20) UNSIGNED NOT NULL,
  `urun_ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urun_fiyat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` bigint(20) UNSIGNED NOT NULL,
  `resim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_aciklama`, `urun_fiyat`, `kategori`, `resim`, `created_at`, `updated_at`) VALUES
(2, 'Ali Ustanın', 'Ali ustanın baklavası', '12', 6, '60d11569a7bed1_1598452306_resim.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ibrahim', 'ibrahimsandkll@gmail.com', NULL, '$2y$10$YWipYsKOCTnCsxtfiwI8LuH5wclCSiW3iin.vYA2a4GftGWyHt1Ai', 'NjGu6t1JEYefpoK96IfvNiiwLMLJ97HPMOHYwtffkn5ukLH4FHpEgGCgDI58', '2021-06-07 09:21:48', '2021-06-07 09:21:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videogaleri`
--

CREATE TABLE `videogaleri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `videoresmi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vizyon`
--

CREATE TABLE `vizyon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraf` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `vizyon`
--

INSERT INTO `vizyon` (`id`, `resim`, `paragraf`) VALUES
(1, '60d1d1acc23d11_1598452306_resim.png', 'Vizyonumuz kısmı budur');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adsoyad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `adsoyad`, `email`, `mesaj`, `created_at`, `updated_at`) VALUES
(1, 'İbrahim sandıklılı', 'ibrahimsandkll@gmail.com', 'Çok güzel', '2021-06-22 12:54:11', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calisma_saat`
--
ALTER TABLE `calisma_saat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `isbasvuru`
--
ALTER TABLE `isbasvuru`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `misyon`
--
ALTER TABLE `misyon`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `musterimesaj`
--
ALTER TABLE `musterimesaj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `resimgaleri`
--
ALTER TABLE `resimgaleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  ADD PRIMARY KEY (`rezervasyon_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`),
  ADD KEY `urunler_kategori_foreign` (`kategori`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `videogaleri`
--
ALTER TABLE `videogaleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `vizyon`
--
ALTER TABLE `vizyon`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calisma_saat`
--
ALTER TABLE `calisma_saat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `isbasvuru`
--
ALTER TABLE `isbasvuru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `misyon`
--
ALTER TABLE `misyon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `musterimesaj`
--
ALTER TABLE `musterimesaj`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `resimgaleri`
--
ALTER TABLE `resimgaleri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  MODIFY `rezervasyon_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `videogaleri`
--
ALTER TABLE `videogaleri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `vizyon`
--
ALTER TABLE `vizyon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_kategori_foreign` FOREIGN KEY (`kategori`) REFERENCES `kategoriler` (`kategori_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
