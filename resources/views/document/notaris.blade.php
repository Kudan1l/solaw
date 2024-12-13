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
</head>

<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="#">SoLAW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  
            <!-- MENU -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="home.html">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Forum</a>
                </li>
  
                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#">
                    Solusi
                  </a>
                    <div class="mega-menu-wrapper">
                      <div class="row">
                        <div class="col item-dropdown">
                          <a href="#">Prosedur Hukum</a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus orci, at tincidunt ipsum. Aliquam id sem a enim.</p>
                        </div>
                        <div class="col item-dropdown">
                          <a href="PEMBUATANDOKUM.html">Konsultasi Hukum</a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus orci, at tincidunt ipsum. Aliquam id sem a enim.</p>
                        </div>
                        <div class="col item-dropdown">
                          <a href="#">Izin Usaha</a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus orci, at tincidunt ipsum. Aliquam id sem a enim.</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col item-dropdown">
                          <a href="#">Page</a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus orci, at tincidunt ipsum. Aliquam id sem a enim.</p>
                        </div>
                        <div class="col item-dropdown">
                          <a href="#">Page</a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus orci, at tincidunt ipsum. Aliquam id sem a enim.</p>
                        </div>
                        <div class="col item-dropdown">
                          <a href="#">Page</a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus orci, at tincidunt ipsum. Aliquam id sem a enim.</p>
                        </div>
                      </div>
                    </div>
                </li>
  
                <li class="nav-item">
                  <a class="nav-link" href="#footer">Kontak</a>
                </li>
              </ul>
  
              <div class="d-flex login align-items-center login">
                <a class="nav-link me-3" href="#">Sign up</a>
                <button type="button" class="btn btn-primary">Login</button>
              </div>
            </div>
          </div>
        </nav>

        <!--GAMBAR SURAT KONTRAK-->
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

      <div class="back">
        <a href="{{route('PEMBUATANDOKUM')}}">
            <button class="balik">
                BACK 
            </button>
        </a>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>