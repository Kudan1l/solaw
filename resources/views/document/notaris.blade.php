<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT NOTARIS</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <!--  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/document/gugatan.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navigation.css')}}">
    

</head>

<body>
    
    <x-navbar></x-navbar>

        
    <div class="text-center">
        <img src="{{asset('src/img/hukum3.jpg')}}" class="rounded" alt="...">
        <h5>
            SURAT NOTARIS
        </h5>
    </div>

    <br><br>

    <h3>
        Tata cara membuat Surat Notaris :
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
                <td> <b>Persiapan Dokumen</b></td>
                <td colspan="3"> Siapkan semua dokumen yang relevan dan informasi yang diperlukan, juga tentukan jenis surat notaris yang akan dibuat (contoh: akta jual beli, akta perjanjian, dll).</td>
            </tr>
            <tr class="align-middle">
                <td> 2. </td>
                <td> <b>Identifikasi para pihak</b></td>
                <td colspan="3"> Cantumkan nama lengkap, alamat, identitas (KTP) dari semua pihak terlibat dan pastikan seluruh pihak hadir saat Penandatanganan</td>
            </tr>
            <tr>
              <td>3. </td>
              <td><b> Judul Surat</b></td>
              <td class="align-middle" colspan="3">Buat judul surat yang jelas.</td>
              
            </tr>

            <tr>
                <td rowspan="4"> 4. </td>
                <td rowspan="4"> <b> Isi Surat </b></td>
                <td>
                    Pembukaan
                </td>
                <td colspan="1">
                    Sebutkan tanggal dan tempat pembuatan akta.
                </td>
            </tr>
            <tr>
                <td > Penjelasan </td>
                <td >
                    Jelaskan maksud dan tujuan surat.
                </td>
            </tr>
            <tr>
                <td>
                    Detail Perjanjian
                </td>
                <td > 
                    Uraikan ketentuan perjanjian, termasuk hak dan kewajiban masing-masing pihak.
                </td>
            </tr>

            <tr>
                <td >
                    Pernyataan
                </td>
                <td >
                    Sertakan pernyataan bahwa pihak-pihak telah sepakat dengan isi surat.
                </td>
            </tr>

            <tr>
                <td>
                    5. 
                </td>
                <td>
                    <b>
                        Penutup
                    </b>
                </td>

                <td colspan="2">
                    Cantumkan ketentuan yang mengatur tentang penyelesaian sengketa, Tuliskan tempat dan tanggal pembuatan akta.
                </td>
            </tr>

            <tr>
                <td>
                    6. 
                </td>
                <td>
                    <b>
                        Tanda tangan
                    </b>
                </td>
                <td colspan="2">
                    Pastikan semua pihak menandatangani surat di hadapan notaris, lalu Notaris juga akan memberikan cap dan tanda tangannya sebagai pengesahan.
                </td>
            </tr>

            <tr>
                <td>
                    7.
                </td>
                <td>
                    <b>
                        Pengarsipan
                    </b>
                </td>
                <td colspan="2">
                    Notaris akan menyimpan salinan akta dalam buku register dan memberikan salinan kepada para pihak.
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