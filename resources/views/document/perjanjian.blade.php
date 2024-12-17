<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <!--  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/document/gugatan.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navigation.css')}}">

    <title>SURAT PERJANJIAN</title>
</head>
<body>
    <!--NAVBAR-->
    <x-navbar></x-navbar>

        <!--GAMBAR SURAT KONTRAK-->
    <div class="text-center">
        <img src="{{asset('src/img/hukum5.jpg')}}" class="rounded" alt="...">
        <h5>
            SURAT PERJANJIAN
        </h5>
    </div>

    <br><br>

    <h3>
        Tata cara membuat Surat Perjanjian :
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
                <td> <b>Judul Perjanjian</b></td>
                <td colspan="3"> Beri judul yang jelas, seperti "Surat Perjanjian Kerjasama" atau "Surat Perjanjian Jual Beli".</td>
            </tr>
            <tr class="align-middle">
                <td> 2. </td>
                <td> <b>Identitas para pihak</b></td>
                <td colspan="3"> Cantumkan nama lengkap, alamat, dan identitas masing-masing pihak yang terlibat (misalnya, nomor KTP).
                    Sebutkan status hukum (individu, badan usaha, dll.).</td>
            </tr>
            <tr>
              <td>3. </td>
              <td><b> Pendahuluan</b></td>
              <td class="align-middle" colspan="3">Uraikan latar belakang dan tujuan perjanjian secara singkat.
                Nyatakan bahwa para pihak bersepakat untuk mengikatkan diri dalam perjanjian ini.</td>
              
            </tr>

            <tr class="align-middle">
                <td rowspan="4"> 4. </td>
                <td rowspan="4"> <b>Isi Perjanjian</b></td>
                <td> Obyek Perjanjian </td>
                <td colspan="2"> Jelaskan secara rinci apa yang menjadi objek perjanjian (misalnya, barang, jasa, atau kerja sama). </td>
            </tr>

            <tr>
                <td>
                    Hak dan Kewajiban
                </td>
                <td>
                    Uraikan hak dan kewajiban masing-masing pihak secara jelas.
                </td>
            </tr>
                

            <tr>
                <td>
                    Jangka Waktu
                </td>

                <td>
                    Tentukan durasi perjanjian.
                </td>
            </tr>

            <tr>
                <td>
                    Pembayaran
                </td>
                <td>
                    Jika relevan, sertakan ketentuan mengenai pembayaran jatuh tempo.
                </td>
            </tr>

            <tr>
                <td rowspan="2">
                    5.
                </td>
                <td rowspan="2">
                    <b>
                        Ketentuan Lain
                    </b>
                </td>

                <td>
                    Penyelesaian Sengketa
                </td>
                <td>
                    Sertakan mekanisme penyelesaian sengketa jika terjadi perselisihan.
                </td>
            </tr>

            <tr>
                <td>
                    <i> Force Majure </i>
                </td>
                <td>
                    Cantumkan ketentuan tentang keadaan memaksa yang dapat mempengaruhi pelaksanaan perjanjian.
                </td>
            </tr>

            <tr>
                <td>
                    6.
                </td>
                <td>
                    <b>
                        Penutup
                    </b>
                </td>

                <td colspan="2">
                    Nyatakan bahwa perjanjian ini dibuat dalam keadaan baik dan tanpa paksaan.
                    Cantumkan tempat dan tanggal pembuatan perjanjian.
                </td>
            </tr>

            <tr>
                <td>
                    7.
                </td>
                <td>
                    <b>
                        Tanda Tangan
                    </b>
                </td>
                <td colspan="2">
                    Semua pihak harus menandatangani surat perjanjian di hadapan saksi (jika diperlukan).
                    Sertakan nama dan tanda tangan saksi, jika ada.
                </td>
            </tr>

            <tr>

                <td>
                    8.
                </td>
                <td>
                    <b>
                        Pengarsipan
                    </b>
                </td>
                <td colspan="2">
                    Simpan salinan perjanjian untuk setiap pihak dan pertimbangkan untuk mendaftarkannya pada notaris jika diperlukan untuk keabsahan hukum.
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
</html>