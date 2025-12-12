<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aleena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
       
        body {
           
            background-color: #2c3e50; 
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
           
            max-width: 400px;
            padding: 40px;
            background-color: #34495e; /* Warna kartu sedikit lebih gelap */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            color: #ecf0f1; /* Warna teks utama */
        }
        
        .login-title {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .form-control {
            background-color: #405467; /* Latar belakang input */
            border: 1px solid #586c80;
            color: #ecf0f1;
            padding: 10px 15px;
        }

        .form-control:focus {
            background-color: #405467;
            border-color: #1abc9c; /* Hijau muda saat fokus */
            box-shadow: 0 0 0 0.25rem rgba(26, 188, 156, 0.4);
            color: #ecf0f1;
        }

        /* Tombol Utama */
        .btn-primary {
            background-color: #1abc9c; /* Hijau muda */
            border-color: #1abc9c;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #16a085; /* Hijau lebih gelap saat hover */
            border-color: #16a085;
        }

        /* Gaya placeholder untuk visibilitas yang lebih baik */
        ::placeholder { 
            color: #bdc3c7 !important;
            opacity: 1; 
        }

        /* Input Group untuk tombol show/hide password */
        .input-group-text {
            background-color: #405467;
            border: 1px solid #586c80;
            color: #ecf0f1;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2 class="text-center login-title">Selamat Datang</h2>
        <p class="text-center text-secondary mb-4">Silakan masuk ke akun Anda</p>
        
        <form id="loginForm" method="POST" action="{{ route('login.process') }}">
    @csrf
            <div class="mb-3">
                <label for="username" class="form-label visually-hidden">Username atau Email</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username atau Email" required>

            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label visually-hidden">Password</label>
                <div class="input-group">
                   <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <span class="input-group-text" id="togglePassword">
                        <i class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
            </div>
            
            <div class="d-flex justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember_me" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">
                        Ingat Saya
                    </label>
                </div>
                <a href="#" class="text-decoration-none text-secondary" style="font-size: 0.9rem;">Lupa Password?</a>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">MASUK</button>
            </div>
        </form>
        
        <div class="text-center mt-4">
            <small class="text-secondary">Belum punya akun? <a href="#" class="text-decoration-none" style="color: #1abc9c;">Daftar Sekarang</a></small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            // Toggle type atribut
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle ikon mata
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>