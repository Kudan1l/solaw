<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login/forgotpass.css')}}">
</head>
<body>
    <form>
        <div class="forgotPass-container text-center">
            <h2 class="brand-name">SELOW</h2>
            <h3 class="mb-4">Forgot Password</h3>
            <h4 class="mb-2">Masukkan alamat email atau nama pengguna yang terhubung ke akun, kami akan mengirimkan email ke akun anda.</h4>
                <br>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="FN" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="FN" placeholder="Enter your full name">
                </div>
                <button type="submit" class="btn btn-primary w-100">Search your account</button>
                <div class="text-center">
                    <p class="mb-0">Was the account found? <a href="{{route('login')}}" class="text-primary">Login here</a></p>
                </div>
        </div>
    </form>
</body>
</html>