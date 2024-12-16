<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMBUATAN DOKUMEN</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <!--  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/document/PEMBUATANDOKUM.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navigation.css')}}">
</head>
<body>
    
    <x-navbar></x-navbar>
    
    <!--judul-->
    <div class="container">
        <div class="judul">
            <h1>SOLUTION OF LAW</h1>
            <h2 class="judul2">Pembuatan Dokumen Hukum,</h2>
            <h2 class="judul3">Pasti Terjamin, Tanpa Pungli, dan Calo. </h2>
        </div>
     
        <p class="deskripsi">
            Mulai dari pembuatan dokumen Kontrak, Surat Kuasa, </br>
            Notaris, Perjanjian, hingga Gugatan, dan Pengadilan.
        </p>
    </div>
    
    <!--isi page dokumen-->
    <div class="container-fluid"> <!-- Menggunakan container-fluid untuk memenuhi lebar penuh -->
        <div class="dokumkontrak">
            <div class="row"> <!-- Menghilangkan container tambahan -->
                <div class="col-md-4 mb-3"> <!-- Menggunakan col-md-4 untuk 3 card dalam satu baris -->
                    <a href="{{route('kontrak')}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('src/img/hukum2.jpg')}}" class="img-fluid rounded-start card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">KONTRAK</h5>
                                        <p class="card-text">Surat kontrak adalah dokumen yang berisi kesepakatan antara dua pihak atau lebih, yang mengatur hak, kewajiban, dan tanggung jawab mereka, serta memiliki kekuatan hukum yang mengikat.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 mb-3"> <!-- Card kedua -->
                    <a href="{{route('suratKuasa')}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('src/img/hukum4.jpg')}}" class="img-fluid rounded-start card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">SURAT KUASA</h5>
                                        <p class="card-text">Surat Kuasa adalah dokumen yang memberi kuasa kepada seseorang untuk mewakili pihak yang memberi kuasa dalam urusan tertentu. Surat ini mengatur hak dan kewajiban kuasa hukum yang diwakili oleh penerima kuasa.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 mb-3"> <!-- Card ketiga -->
                    <a href="{{route('notaris')}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('src/img/hukum3.jpg')}}" class="img-fluid rounded-start card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">NOTARIS</h5>
                                        <p class="card-text">Notaris adalah pejabat umum yang berwenang untuk membuat akta otentik, memberikan pengesahan tanda tangan, serta melakukan tindakan hukum lainnya sesuai dengan peraturan yang berlaku di Indonesia.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 mb-3"> <!-- Card keempat -->
                    <a href="{{route('perjanjian')}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('src/img/hukum5.jpg')}}" class="img-fluid rounded-start card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">PERJANJIAN</h5>
                                        <p class="card-text">Perjanjian adalah kesepakatan yang dibuat oleh dua pihak atau lebih yang memuat hak dan kewajiban mereka. Perjanjian ini diikat secara hukum dan dapat digunakan sebagai dasar untuk menyelesaikan sengketa.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 mb-3"> <!-- Card kelima -->
                    <a href="{{route('gugatan')}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('src/img/hukum1.jpg')}}" class="img-fluid rounded-start card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">GUGATAN</h5>
                                        <p class="card-text">Gugatan adalah tuntutan yang diajukan oleh pihak yang merasa dirugikan kepada pengadilan untuk memperoleh penyelesaian hukum terhadap masalah yang dihadapinya, baik perdata maupun pidana.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 mb-3"> <!-- Card keenam -->
                    <a href="{{route('pengadilan')}}" class="text-decoration-none">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('src/img/hukum6.jpg')}}" class="img-fluid rounded-start card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">PENGADILAN</h5>
                                        <p class="card-text">Pengadilan adalah lembaga negara yang memiliki kewenangan untuk memeriksa dan memutuskan perkara hukum yang diajukan oleh pihak-pihak yang berselisih, baik dalam perkara perdata maupun pidana.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <x-footer></x-footer>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>