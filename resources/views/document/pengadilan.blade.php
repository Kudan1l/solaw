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

    <title>SURAT PENGADILAN</title>
</head>
<body>
    <!--NAVBAR-->
    <x-navbar></x-navbar>

        <!--GAMBAR SURAT KONTRAK-->
    <div class="text-center">
        <img src="{{asset('src/img/hukum6.jpg')}}" class="rounded" alt="...">
        <h5>
            SURAT PENGADILAN
        </h5>
    </div>

    <br><br>

    <h3>
        Tata cara membuat Surat Pengadilan :
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
                <td > 1. </td>
                <td > <b>Kepala Surat</b></td>
                <td colspan="2"> Nama Pengadilan, Alamat lengkap pengadilan, Nomor surat, dan Tanggal pembuatan surat</td>
            </tr>
            
            
            <tr class="align-middle">
                <td> 2. </td>
                <td> <b>Identitas Pengirim</b></td>
                <td colspan="2"> Nama lengkap, Alamat lengkap, dan Nomor telepon atau email.</td>
            </tr>


            <tr>
              <td>3. </td>
              <td><b> Identitas pihak terkait</b></td>
              <td class="align-middle" colspan="2">Nama lengkap pihak yang berperkara (Penggugat dan tergugat), dan Alamat lengkap masing-masing.</td>
              
            </tr>

            <tr class="align-middle">
                <td> 4. </td>
                <td> <b>Perihal</b></td>
                <td colspan="2"> Tulis perihal surat secara singkat dan jelas. </td>
                
            </tr>

            <tr>
                <td rowspan="5">
                    5.
                </td>
                <td rowspan="5">
                    <b>
                        Isi Surat
                    </b>
                </td>

                <td >
                    Pembuka
                </td>
                <td colspan="1"> 
                    Sapa dengan hormat (misalnya, "Kepada Yth. Ketua Pengadilan Negeri...").
                </td>
            </tr>

            <tr>
                <td>
                    Latar Belakang
                </td>
                <td>
                    Jelaskan secara singkat latar belakang kasus atau alasan pembuatan surat.
                </td>
            </tr>
            
            <tr>
                <td>
                    Permohonan atau Pernyataan
                </td>
                <td>
                    Sertakan dengan jelas apa yang diminta, seperti permohonan, gugatan, atau penjelasan.
                </td>
            </tr>

            <tr>
                <td>
                    Dasar Hukum
                </td>
                <td>
                    Sebutkan dasar hukum atau peraturan yang mendukung permohonan atau pernyataan tersebut.
                </td>
            </tr>

            <tr>
                <td>
                    Penutup
                </td>
                <td>
                    Sampaikan harapan atau permohonan untuk dapat dipertimbangkan dengan baik.
                </td>
            </tr>

            <tr>
                <td>
                    6.
                </td>
                <td>
                    <b>
                        Penandatanganan
                    </b>
                </td>

                <td colspan="2">
                    Tanda tangan pengirim,
                    Nama jelas pengirim (dalam huruf cetak),
                    Jabatan atau identitas lain jika perlu.
                </td>
            </tr>

            <tr>
                <td>
                    7.
                </td>
                <td>
                    <b>
                        Lampiran
                    </b>
                </td>
                <td colspan="2">
                    Sertakan dokumen pendukung yang relevan (salinan bukti, dokumen identitas, dll.) jika diperlukan.
                </td>
            </tr>

            <tr>

                <td>
                    8.
                </td>
                <td>
                    <b>
                        Salinan Surat
                    </b>
                </td>
                <td colspan="2">
                    Buat salinan surat untuk arsip dan untuk pihak-pihak lain yang terkait.
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