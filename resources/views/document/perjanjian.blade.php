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
    
    <title>SURAT PERJANJIAN</title>
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

      <div class="back">
        <a href="{{route('PEMBUATANDOKUM')}}">
            <button class="balik">
                BACK 
            </button>
        </a>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>