<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(){
        $this->call([
            ConsultantSeeder::class,
            ThreadSeeder::class,
        ]);

        DB::table("articles")->insert([
            [
                "title" => "Melindungi Hak Kepemilikan dan Pemanfaatan",
                "description" => "Hukum properti adalah cabang hukum yang mengatur hak kepemilikan dan penggunaan properti, termasuk tanah dan bangunan. Tujuan utama dari hukum ini adalah melindungi hak pemilik properti dan mencegah terjadinya konflik antar pihak terkait kepemilikan atau pemanfaatan properti. Di Indonesia, hukum properti diatur melalui KUH Perdata dan UUPA, yang memberikan dasar hukum bagi transaksi properti, warisan, dan penyelesaian sengketa tanah.",
                "content" => "Hukum properti adalah bagian dari hukum perdata yang mengatur kepemilikan, pemanfaatan, dan distribusi properti, baik bergerak maupun tidak bergerak. Di Indonesia, hukum properti terutama mengacu pada Kitab Undang-Undang Hukum Perdata (KUH Perdata) dan Undang-Undang Pokok Agraria (UUPA). Melalui hukum properti, pemilik memiliki hak yang sah untuk menguasai, menggunakan, dan mengalihkan propertinya kepada pihak lain. Regulasi ini mencakup hal-hal seperti jual beli tanah, warisan, sewa-menyewa, hak pakai, hingga sengketa batas tanah.
Dengan adanya hukum properti, diharapkan pemilik dapat mempertahankan hak atas properti yang dimilikinya dan terhindar dari konflik dengan pihak lain. Hukum ini juga memberikan landasan bagi pemerintah untuk melakukan pengaturan penggunaan lahan demi kepentingan umum, seperti pembebasan lahan untuk pembangunan infrastruktur. Namun, kompleksitas regulasi dan birokrasi sering kali membuat masyarakat bingung dan rentan terhadap konflik hukum, khususnya terkait hak kepemilikan dan perubahan status lahan. Maka, pemahaman yang baik mengenai hukum properti menjadi penting untuk melindungi hak-hak kepemilikan serta memastikan pemanfaatan properti sesuai peraturan yang berlaku.",
                "thumbnail_url" => "https://images.unsplash.com/photo-1528747008803-f9f5cc8f1a64?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "status" => "publish",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Hukum Perbankan di Indonesia: Dasar dan Perkembangannya",
                "description" => "Hukum perbankan di Indonesia mengatur operasional bank dan lembaga keuangan lainnya, dengan tujuan menjaga stabilitas sistem keuangan dan melindungi hak-hak nasabah. Berdasarkan Undang-Undang Nomor 10 Tahun 1998 tentang Perbankan, regulasi ini mencakup berbagai aspek mulai dari pendirian bank hingga tata kelola dan transparansi transaksi. Dengan perkembangan teknologi finansial, hukum perbankan juga harus menghadapi tantangan baru, seperti perlindungan data nasabah. Upaya pemerintah dan otoritas terkait dalam memperbarui regulasi diharapkan dapat menciptakan iklim perbankan yang sehat, aman, dan mendukung pertumbuhan ekonomi nasional.",
                "content" => "Hukum perbankan di Indonesia berfungsi sebagai landasan bagi operasional bank dan lembaga keuangan lainnya. Undang-Undang Nomor 10 Tahun 1998 tentang Perbankan merupakan regulasi utama yang mengatur berbagai aspek, mulai dari pendirian bank, tata kelola, hingga perlindungan nasabah. Dalam konteks ini, hukum perbankan tidak hanya bertujuan untuk menjaga stabilitas sistem keuangan, tetapi juga untuk melindungi hak-hak nasabah serta memastikan transparansi dalam transaksi keuangan.
Perkembangan teknologi informasi dan komunikasi, seperti kehadiran layanan financial technology (fintech), telah membawa tantangan baru bagi hukum perbankan. Misalnya, perlindungan data nasabah dan keadilan dalam akses layanan keuangan menjadi isu penting yang perlu diatur lebih lanjut.
Pemerintah dan otoritas terkait terus berupaya untuk memperbarui dan menyesuaikan regulasi agar dapat menciptakan iklim perbankan yang sehat dan mendukung pertumbuhan ekonomi nasional. Dengan demikian, hukum perbankan di Indonesia diharapkan mampu beradaptasi dengan perubahan yang cepat dan tetap relevan dalam menghadapi tantangan masa depan.",
            "thumbnail_url" => "https://images.unsplash.com/photo-1607863680198-23d4b2565df0?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "status" => "publish",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Perlindungan Hukum atas Hak Properti dalam Transaksi Perbankan",
                "description" => "Artikel ini membahas pentingnya perlindungan hukum bagi pemilik properti dalam transaksi perbankan, termasuk dalam pembiayaan properti dan hak kepemilikan. Adanya perlindungan ini penting untuk menjamin keamanan bagi semua pihak dalam transaksi, terutama bagi pemilik properti dan pihak bank yang terlibat.",
                "content" => "Transaksi perbankan yang melibatkan properti, seperti kredit pemilikan rumah (KPR) atau kredit modal usaha dengan jaminan properti, memerlukan perlindungan hukum yang kuat agar hak pemilik properti tetap terjaga. Dalam hal ini, bank bertindak sebagai pihak yang memberikan pembiayaan, sementara properti menjadi jaminan yang dapat diambil alih jika debitur gagal memenuhi kewajibannya.
Salah satu landasan hukum utama dalam transaksi ini adalah Undang-Undang Nomor 4 Tahun 1996 tentang Hak Tanggungan atas Tanah Beserta Benda-benda yang Berkaitan dengan Tanah di Indonesia. Hak Tanggungan adalah hak jaminan yang diberikan kepada bank atas tanah atau bangunan milik debitur. Proses pendaftaran Hak Tanggungan ini melibatkan notaris dan pejabat pembuat akta tanah (PPAT), yang bertujuan agar hak kepemilikan debitur tercatat secara sah dan aman.
Pentingnya perlindungan hukum ini adalah untuk memberikan kepastian bagi pemilik properti bahwa aset mereka tidak akan disalahgunakan. Selain itu, hak tanggungan juga memungkinkan bank untuk memiliki hak penjaminan yang kuat tanpa melanggar hak-hak pemilik. Jika terjadi wanprestasi, bank dapat melakukan eksekusi hak tanggungan secara sah, misalnya melalui lelang, yang disaksikan oleh otoritas terkait untuk memastikan proses yang transparan dan sesuai aturan.
Di sisi lain, pemilik properti juga memiliki perlindungan hak untuk mendapatkan informasi yang jelas terkait prosedur dan risiko yang terkait dengan penggunaan properti sebagai jaminan. Ketika informasi ini disampaikan dengan transparan, diharapkan dapat meminimalkan kesalahpahaman antara bank dan nasabah.
Dengan adanya perlindungan hukum yang baik, transaksi perbankan yang melibatkan properti dapat memberikan keamanan bagi kedua belah pihak, baik bagi bank sebagai pemberi pinjaman maupun bagi pemilik properti sebagai peminjam. Perlindungan ini penting agar semua proses transaksi tetap adil, transparan, dan dapat meningkatkan kepercayaan publik terhadap sistem hukum dan perbankan di Indonesia.",
                "thumbnail_url" => "https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGJhbmt8ZW58MHx8MHx8fDA%3D",
                "status" => "publish",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Meningkatkan Akses dan Efisiensi Layanan Hukum untuk Masyarakat",
                "description" => "Artikel ini membahas pentingnya peran perusahaan hukum dalam memperbaiki akses dan efisiensi layanan hukum bagi masyarakat. Dengan menghadapi tantangan seperti proses hukum yang panjang dan birokrasi yang rumit, perusahaan hukum diharapkan dapat memberikan solusi yang lebih inklusif dan cepat bagi klien mereka.",
                "content" => "Di era modern ini, kebutuhan akan layanan hukum yang cepat, transparan, dan mudah diakses semakin mendesak. Banyak perusahaan hukum menghadapi tuntutan dari masyarakat yang berharap proses hukum tidak lagi berbelit-belit dan memakan waktu. Hal ini penting karena masyarakat sering kali mengalami kesulitan dalam mengakses layanan hukum akibat hambatan biaya, waktu, dan kerumitan proses yang panjang.
    
    Salah satu solusi yang dapat diambil oleh perusahaan hukum adalah dengan memanfaatkan teknologi. Digitalisasi proses hukum, seperti konsultasi online, pembuatan dokumen otomatis, serta sistem manajemen kasus yang terintegrasi, dapat memangkas waktu dan biaya. Perusahaan hukum yang menerapkan sistem ini dapat lebih responsif terhadap kebutuhan klien serta membantu mengurangi beban birokrasi.
    
    Selain itu, ada kebutuhan untuk meningkatkan kesadaran hukum di kalangan masyarakat. Perusahaan hukum dapat memberikan edukasi tentang hak-hak hukum dan prosedur yang ada, baik melalui seminar, media sosial, atau konten digital lainnya. Dengan pendekatan ini, masyarakat dapat lebih percaya diri dalam menavigasi sistem hukum dan mengambil keputusan yang tepat.
    
    Namun, di balik upaya ini, perusahaan hukum juga harus memastikan bahwa layanan hukum yang diberikan tetap adil dan tidak diskriminatif. Meningkatkan aksesibilitas dan efisiensi dalam layanan hukum tidak hanya akan membantu perusahaan meraih kepercayaan klien, tetapi juga akan berkontribusi dalam menciptakan sistem hukum yang lebih inklusif dan adil bagi semua kalangan.
    
    Dengan inovasi yang tepat dan pendekatan yang inklusif, perusahaan hukum dapat berperan besar dalam membangun kepercayaan publik terhadap sistem hukum, serta memastikan bahwa hukum tidak hanya tajam ke bawah, tetapi juga memberikan keadilan bagi seluruh lapisan masyarakat.",
                "thumbnail_url" => "https://plus.unsplash.com/premium_photo-1661540409860-fe00bb21a51c?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "status" => "publish",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
        DB::table('categories')->insert([
            ['name' => 'Properti'],
            ['name' => 'Bank'],
            ['name' => 'Perusahaan'],
        ]);
        DB::table('article_category')->insert([
            [
                'article_id' => '1',
                'category_id'=> '1',
            ],
            [
                'article_id' => '2',
                'category_id'=> '2',
            ],
            [
                'article_id' => '3',
                'category_id'=> '1',
            ],
            [
                'article_id' => '3',
                'category_id'=> '2',
            ],
            [
                'article_id' => '4',
                'category_id'=> '3',
            ],
        ]);  

        DB::table('users')->insert([
            [
                'name' => 'Aditya Cahyadi',
                'email' => 'adit@gmail.com',
                'password' => Hash::make('ganteng'),
                'role' => 'user', 
                // Tidak perlu menambahkan 'role' karena sudah default
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin', // Role 'admin' harus disebutkan secara eksplisit
            ],
        ]);        
    }
        
}