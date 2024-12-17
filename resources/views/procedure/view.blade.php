<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoLAW</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <!--  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/procedure/view.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navigation.css')}}">
    
</head>
<body>
    
<x-navbar> </x-navbar>

<section class="container">
  <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1528747008803-f9f5cc8f1a64?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1505663912202-ac22d4cb3707?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1528747354767-89476f71d2a3?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="content">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <img src="{{asset('src/img/SA.jpg')}}" height="300px" alt="">
        <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">KEKERASAN SEXUAL</h5>
                <p class="card-text"> Pelecehan bisa terjadi di berbagai situasi, seperti tempat kerja, sekolah, lingkungan publik, maupun online, dan bertujuan untuk mengeksploitasi atau mendominasi korban secara seksual.</p>
                <a href="{{route('ks')}}" class="btn btn-primary">Solusi Pengaduan</a>
              </div>
              <div class="card-footer">
                <small class="text-white">Last updated 3 mins ago</small>
              </div>
            </div>
        </div>

        <img src="{{asset('src/img/CA.png')}}" height="300px" alt="">
        <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">PENIPUAN ONLINE</h5>
                <p class="card-text"> Penipuan di dunia maya marak dilakukan di era ini, pengamanan data sangat dianjurkan untuk para pengguna e-wallet/ m-banking.</p>
                <a href="{{route('ca')}}" class="btn btn-primary">Solusi Pengaduan</a>
              </div>
              <div class="card-footer">
                <small class="text-white">Last updated 3 mins ago</small>
              </div>
            </div>
        </div>

        
        <img src="{{asset('src/img/KP.png')}}" height="300px" alt="">
        <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">KORUPSI</h5>
                <p class="card-text"> Tindak korupsi sering terjadi pada skala perusahaan kecil hingga instansi pemeritahan sekalipun yang berdampak pada kesejahteraan anggota bahkan hinggab rakyat. Jika adanya indikasi korupsi di lingkungan anda segera laporkan.</p>
                <a href="{{route('kp')}}" class="btn btn-primary">Solusi Pengaduan</a>
              </div>
              <div class="card-footer">
                <small class="text-white">Last updated 3 mins ago</small>
              </div>
            </div>
        </div>
    </div>
  </div>
   
</section>
<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
