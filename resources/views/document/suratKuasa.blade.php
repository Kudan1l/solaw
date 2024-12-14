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
    
    <title>SURAT KUASA</title>
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
        <img src="{{asset('src/img/hukum4.jpg')}}" class="rounded" alt="...">
        <h5>
            SURAT KUASA
        </h5>
    </div>

    <br><br>

    <h3>
        Tata cara membuat Surat Kuasa :
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
                <td> <b>Judul Surat</b></td>
                <td colspan="3"> Sertakan Judul yang jelas dan biasanya menggunakan kata "<b>SURAT KUASA</b>"</td>
            </tr>
            <tr class="align-middle">
                <td> 2. </td>
                <td> <b>Identitas pemberi kuasa</b></td>
                <td colspan="3"> Sertakan informasi lengkap tentang pemberi kuasa (Nama lengkap, Tempat dan Tanggal lahir, Alamat, dan Nomor KTP) </td>
            </tr>
            <tr>
              <td>3. </td>
              <td><b> Identitas penerima kuasa</b></td>
              <td class="align-middle" colspan="3">Tuliskan informasi penerima kuasa dengan langkah nomor 2, begitu juga dengan identitas penerima</td>
              
            </tr>

            <tr class="align-middle">
                <td> 4. </td>
                <td> <b>Isi surat kuasa</b></td>
                <td colspan="3"> Jelaskan tujuan pemberian kuasa. </td>
            </tr>
                

            <tr>
                <td>
                    5. 
                </td>
                <td>
                    <b>
                        Tanggal dan Tempat
                    </b>
                </td>

                <td colspan="2">
                    Cantumkan tempat dan tanggal pembuatan surat kuasa di bagian bawah isi surat.
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
                    Tanda tangan pemberi kuasa beserta nama lengkapnya. Jika diperlukan, sediakan juga tanda tangan penerima kuasa.
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