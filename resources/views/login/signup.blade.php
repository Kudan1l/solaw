<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login/signup.css')}}">
</head>
<body>
    <form action="{{route('signUpPost')}}" method="POST">
        @csrf
        <div class="signup-container text-center">
            <h1 class="brand-name">SOLAW</h1>
            <h4 class="mb-4">Sign Up</h4>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                @error('name')
                    <span class="text-danger">{{ 'Nama harus berupa huruf' }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                @error('email')
                    <span class="text-danger">{{ 'Email sudah digunakan' }}</span>
                @enderror
            </div>  
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            @if(session('success'))
             <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            <div class="text-center mt-3">
                <p class="mb-0">Already have an account? <a href="{{route('login')}}" class="text-primary">Login here</a></p>
            </div>
        </div>
    </form>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>