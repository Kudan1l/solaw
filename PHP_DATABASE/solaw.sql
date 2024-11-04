-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 04 Nov 2024 pada 18.33
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solaw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `konten` text NOT NULL,
  `thumbnail` text NOT NULL,
  `terbit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `judul`, `deskripsi`, `konten`, `thumbnail`, `terbit`) VALUES
(1, 'Melindungi Hak Kepemilikan dan Pemanfaatan', 'Hukum properti adalah cabang hukum yang mengatur hak kepemilikan dan penggunaan properti, termasuk tanah dan bangunan. Tujuan utama dari hukum ini adalah melindungi hak pemilik properti dan mencegah terjadinya konflik antar pihak terkait kepemilikan atau pemanfaatan properti. Di Indonesia, hukum properti diatur melalui KUH Perdata dan UUPA, yang memberikan dasar hukum bagi transaksi properti, warisan, dan penyelesaian sengketa tanah.', 'Hukum properti adalah bagian dari hukum perdata yang mengatur kepemilikan, pemanfaatan, dan distribusi properti, baik bergerak maupun tidak bergerak. Di Indonesia, hukum properti terutama mengacu pada Kitab Undang-Undang Hukum Perdata (KUH Perdata) dan Undang-Undang Pokok Agraria (UUPA). Melalui hukum properti, pemilik memiliki hak yang sah untuk menguasai, menggunakan, dan mengalihkan propertinya kepada pihak lain. Regulasi ini mencakup hal-hal seperti jual beli tanah, warisan, sewa-menyewa, hak pakai, hingga sengketa batas tanah.\r\n\r\nDengan adanya hukum properti, diharapkan pemilik dapat mempertahankan hak atas properti yang dimilikinya dan terhindar dari konflik dengan pihak lain. Hukum ini juga memberikan landasan bagi pemerintah untuk melakukan pengaturan penggunaan lahan demi kepentingan umum, seperti pembebasan lahan untuk pembangunan infrastruktur. Namun, kompleksitas regulasi dan birokrasi sering kali membuat masyarakat bingung dan rentan terhadap konflik hukum, khususnya terkait hak kepemilikan dan perubahan status lahan. Maka, pemahaman yang baik mengenai hukum properti menjadi penting untuk melindungi hak-hak kepemilikan serta memastikan pemanfaatan properti sesuai peraturan yang berlaku.', 'https://images.unsplash.com/photo-1528747008803-f9f5cc8f1a64?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2024-11-03 11:58:45'),
(2, 'Hukum Perbankan di Indonesia: Dasar dan Perkembangannya', 'Hukum perbankan di Indonesia mengatur operasional bank dan lembaga keuangan lainnya, dengan tujuan menjaga stabilitas sistem keuangan dan melindungi hak-hak nasabah. Berdasarkan Undang-Undang Nomor 10 Tahun 1998 tentang Perbankan, regulasi ini mencakup berbagai aspek mulai dari pendirian bank hingga tata kelola dan transparansi transaksi. Dengan perkembangan teknologi finansial, hukum perbankan juga harus menghadapi tantangan baru, seperti perlindungan data nasabah. Upaya pemerintah dan otoritas terkait dalam memperbarui regulasi diharapkan dapat menciptakan iklim perbankan yang sehat, aman, dan mendukung pertumbuhan ekonomi nasional.', 'Hukum perbankan di Indonesia berfungsi sebagai landasan bagi operasional bank dan lembaga keuangan lainnya. Undang-Undang Nomor 10 Tahun 1998 tentang Perbankan merupakan regulasi utama yang mengatur berbagai aspek, mulai dari pendirian bank, tata kelola, hingga perlindungan nasabah. Dalam konteks ini, hukum perbankan tidak hanya bertujuan untuk menjaga stabilitas sistem keuangan, tetapi juga untuk melindungi hak-hak nasabah serta memastikan transparansi dalam transaksi keuangan.\r\n\r\nPerkembangan teknologi informasi dan komunikasi, seperti kehadiran layanan financial technology (fintech), telah membawa tantangan baru bagi hukum perbankan. Misalnya, perlindungan data nasabah dan keadilan dalam akses layanan keuangan menjadi isu penting yang perlu diatur lebih lanjut.\r\n\r\nPemerintah dan otoritas terkait terus berupaya untuk memperbarui dan menyesuaikan regulasi agar dapat menciptakan iklim perbankan yang sehat dan mendukung pertumbuhan ekonomi nasional. Dengan demikian, hukum perbankan di Indonesia diharapkan mampu beradaptasi dengan perubahan yang cepat dan tetap relevan dalam menghadapi tantangan masa depan.', 'https://images.unsplash.com/photo-1607863680198-23d4b2565df0?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2024-11-03 12:42:56'),
(3, 'Perlindungan Hukum atas Hak Properti dalam Transaksi Perbankan', 'Artikel ini membahas pentingnya perlindungan hukum bagi pemilik properti dalam transaksi perbankan, termasuk dalam pembiayaan properti dan hak kepemilikan. Adanya perlindungan ini penting untuk menjamin keamanan bagi semua pihak dalam transaksi, terutama bagi pemilik properti dan pihak bank yang terlibat.', 'Transaksi perbankan yang melibatkan properti, seperti kredit pemilikan rumah (KPR) atau kredit modal usaha dengan jaminan properti, memerlukan perlindungan hukum yang kuat agar hak pemilik properti tetap terjaga. Dalam hal ini, bank bertindak sebagai pihak yang memberikan pembiayaan, sementara properti menjadi jaminan yang dapat diambil alih jika debitur gagal memenuhi kewajibannya.\r\n\r\nSalah satu landasan hukum utama dalam transaksi ini adalah Undang-Undang Nomor 4 Tahun 1996 tentang Hak Tanggungan atas Tanah Beserta Benda-benda yang Berkaitan dengan Tanah di Indonesia. Hak Tanggungan adalah hak jaminan yang diberikan kepada bank atas tanah atau bangunan milik debitur. Proses pendaftaran Hak Tanggungan ini melibatkan notaris dan pejabat pembuat akta tanah (PPAT), yang bertujuan agar hak kepemilikan debitur tercatat secara sah dan aman.\r\n\r\nPentingnya perlindungan hukum ini adalah untuk memberikan kepastian bagi pemilik properti bahwa aset mereka tidak akan disalahgunakan. Selain itu, hak tanggungan juga memungkinkan bank untuk memiliki hak penjaminan yang kuat tanpa melanggar hak-hak pemilik. Jika terjadi wanprestasi, bank dapat melakukan eksekusi hak tanggungan secara sah, misalnya melalui lelang, yang disaksikan oleh otoritas terkait untuk memastikan proses yang transparan dan sesuai aturan.\r\n\r\nDi sisi lain, pemilik properti juga memiliki perlindungan hak untuk mendapatkan informasi yang jelas terkait prosedur dan risiko yang terkait dengan penggunaan properti sebagai jaminan. Ketika informasi ini disampaikan dengan transparan, diharapkan dapat meminimalkan kesalahpahaman antara bank dan nasabah.\r\n\r\nDengan adanya perlindungan hukum yang baik, transaksi perbankan yang melibatkan properti dapat memberikan keamanan bagi kedua belah pihak, baik bagi bank sebagai pemberi pinjaman maupun bagi pemilik properti sebagai peminjam. Perlindungan ini penting agar semua proses transaksi tetap adil, transparan, dan dapat meningkatkan kepercayaan publik terhadap sistem hukum dan perbankan di Indonesia.', 'https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGJhbmt8ZW58MHx8MHx8fDA%3D', '2024-11-03 17:51:27'),
(4, 'Meningkatkan Akses dan Efisiensi Layanan Hukum untuk Masyarakat', 'Artikel ini membahas pentingnya peran perusahaan hukum dalam memperbaiki akses dan efisiensi layanan hukum bagi masyarakat. Dengan menghadapi tantangan seperti proses hukum yang panjang dan birokrasi yang rumit, perusahaan hukum diharapkan dapat memberikan solusi yang lebih inklusif dan cepat bagi klien mereka.', 'Di era modern ini, kebutuhan akan layanan hukum yang cepat, transparan, dan mudah diakses semakin mendesak. Banyak perusahaan hukum menghadapi tuntutan dari masyarakat yang berharap proses hukum tidak lagi berbelit-belit dan memakan waktu. Hal ini penting karena masyarakat sering kali mengalami kesulitan dalam mengakses layanan hukum akibat hambatan biaya, waktu, dan kerumitan proses yang panjang.\r\n\r\nSalah satu solusi yang dapat diambil oleh perusahaan hukum adalah dengan memanfaatkan teknologi. Digitalisasi proses hukum, seperti konsultasi online, pembuatan dokumen otomatis, serta sistem manajemen kasus yang terintegrasi, dapat memangkas waktu dan biaya. Perusahaan hukum yang menerapkan sistem ini dapat lebih responsif terhadap kebutuhan klien serta membantu mengurangi beban birokrasi.\r\n\r\nSelain itu, ada kebutuhan untuk meningkatkan kesadaran hukum di kalangan masyarakat. Perusahaan hukum dapat memberikan edukasi tentang hak-hak hukum dan prosedur yang ada, baik melalui seminar, media sosial, atau konten digital lainnya. Dengan pendekatan ini, masyarakat dapat lebih percaya diri dalam menavigasi sistem hukum dan mengambil keputusan yang tepat.\r\n\r\nNamun, di balik upaya ini, perusahaan hukum juga harus memastikan bahwa layanan hukum yang diberikan tetap adil dan tidak diskriminatif. Meningkatkan aksesibilitas dan efisiensi dalam layanan hukum tidak hanya akan membantu perusahaan meraih kepercayaan klien, tetapi juga akan berkontribusi dalam menciptakan sistem hukum yang lebih inklusif dan adil bagi semua kalangan.\r\n\r\nDengan inovasi yang tepat dan pendekatan yang inklusif, perusahaan hukum dapat berperan besar dalam membangun kepercayaan publik terhadap sistem hukum, serta memastikan bahwa hukum tidak hanya tajam ke bawah, tetapi juga memberikan keadilan bagi seluruh lapisan masyarakat.', 'https://plus.unsplash.com/premium_photo-1661540409860-fe00bb21a51c?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2024-11-04 14:52:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_kategori`
--

CREATE TABLE `artikel_kategori` (
  `artikel_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel_kategori`
--

INSERT INTO `artikel_kategori` (`artikel_id`, `kategori_id`) VALUES
(1, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Properti'),
(2, 'Bank'),
(3, 'Perusahaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin1', 'admin1@gmail.com', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indeks untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  ADD KEY `artikel_id` (`artikel_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  ADD CONSTRAINT `artikel_kategori_ibfk_1` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`artikel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_kategori_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
