<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT KONTRAK</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap"
        rel="stylesheet">
    <!--  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/document/gugatan.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navigation.css')}}">

</head>

<body>
    
    <!--NAVBAR-->
    <x-navbar></x-navbar>

    <!--GAMBAR SURAT KONTRAK-->
    <div class="text-center">
        <img src="{{asset('src/img/hukum2.jpg')}}" class="rounded" alt="...">
        <h5>
            SURAT KONTRAK
        </h5>
    </div>

    <br><br>

    <h3>
        Tata cara membuat Surat Kontrak :
    </h3>

    <div class="tatacara container-fluid">
        <table class="table align-middle table-striped custom-table">
            <thead>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">HEADLINE</th>
                    <th scope="col" class="no-border">PENJELASAN</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1. </td>
                    <td> <b>Judul dan Tanggal</b></td>
                    <td colspan="3"> Sertakan Judul yang jelas dan tanggal pembuatan kontrak</td>
                </tr>
                <tr class="align-middle">
                    <td> 2. </td>
                    <td> <b>Identitas para pihak</b></td>
                    <td colspan="3"> Sebutkan nama lengkap, alamat, dan nomor identitas (KTP, NPWP, atau lainnya) dari
                        masing-masing pihak. Ini penting untuk mengidentifikasi siapa yang terlibat dalam kontrak. </td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td><b> Pendahuluan</b></td>
                    <td class="align-middle" colspan="3">Tuliskan latar belakang dan tujuan kontrak. Menyediakan konteks
                        dapat membantu dalam penafsiran di kemudia hari.</td>

                </tr>

                <tr>
                    <td rowspan="4"> 4. </td>
                    <td rowspan="4"> <b> Isi Kontrak </b></td>
                    <td>
                        Ruang Lingkup
                    </td>
                    <td colspan="3">
                        Rincikan secara jelas pekerjaan atau layanan yang disepakati.
                    </td>
                </tr>
                <tr>
                    <td> Durasi </td>
                    <td colspan="3">
                        Tentukan waktu mulai dan berakhirnya kontrak. Pastikan durasi tersebut realistis dan dapat
                        dipenuhi.
                    </td>
                </tr>
                <tr>
                    <td>
                        Kompensasi
                    </td>
                    <td colspan="3">
                        Cantumkan jumlah pembayaran dan cara pembayaran (misalnya, tunai, transfer, termin).
                    </td>
                </tr>

                <tr>
                    <td>
                        Kewajiban dan Hak
                    </td>
                    <td colspan="2">
                        Rincikan kewajiban masing-masing pihak serta hak yang dimiliki. Ini penting untuk mencegah
                        perselisihan di kemudian hari.
                    </td>
                </tr>

                <tr>
                    <td>
                        5.
                    </td>
                    <td>
                        <b>
                            Ketentuan Hukum
                        </b>
                    </td>

                    <td colspan="2">
                        Sertakan klausul yang mengatur penyelesaian sengketa, hukum yang berlaku, dan pemutusan kontrak.
                    </td>
                </tr>

                <tr>
                    <td>
                        6.
                    </td>
                    <td>
                        <b>
                            Klausul
                        </b>
                    </td>
                    <td colspan="2">
                        Sertakan ketentuan lain yang relevan, seperti kerahasiaan, force majeure, dan amandemen kontrak.
                    </td>
                </tr>

                <tr>
                    <td>
                        7.
                    </td>
                    <td>
                        <b>
                            Penandatanganan
                        </b>
                    </td>
                    <td colspan="2">
                        Siapkan ruang untuk tanda tangan masing-masing pihak. Pastikan pihak yang menandatangani adalah
                        orang yang berwenang (misalnya, direktur untuk perusahaan).
                    </td>
                </tr>

                <tr>
                    <td>
                        8.
                    </td>

                    <td>
                        <b>
                            Saksi
                        </b>
                    </td>

                    <td colspan="2">
                        cantumkan nama dan tanda tangan saksi yang dapat mendukung keabsahan kontrak.
                    </td>
                </tr>

                <tr>
                    <td>
                        9.
                    </td>

                    <td>
                        <b>
                            Penyimpanan
                        </b>
                    </td>
                    <td colspan="2">
                        Pastikan bahwa setiap pihak menyimpan salinan kontrak yang telah ditandatangani.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="back">
            <!-- Tombol BACK -->
            <a href="{{route('PEMBUATANDOKUM')}}">
                <button class="balik">
                    BACK
                </button>
            </a>

            <!-- Tombol BUAT SURAT -->
            <a href="{{route('buatSurat')}}">
                <button class="buat">
                    BUAT SURAT
                </button>
            </a>
        </div>
    </div>

    <x-footer></x-footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>