<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <div class="container">
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="brand-logo">
                <div>
                    <strong>5</strong> Minute<br>School
                </div>
                <span>Study Online, Learn Online</span>
            </div>

            <h1>Learn From World's<br>Best Instructors<br>Around The World.</h1>

            <div class="illustration">
                <img src="{{ asset('img/kone.png') }}" alt="Illustration" style="max-width: 100%; max-height: 320px; object-fit: contain; margin-left: 0; animation: float 6s ease-in-out infinite;">
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">


            <h2>Login</h2>

            @if(session('error'))
                <div style="background: rgba(239, 68, 68, 0.1); color: #ef4444; border: 1px solid #ef4444; padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 0.9rem;">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" placeholder="Username" required>
                </div>

                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="fa-solid fa-eye-slash toggle-password" onclick="togglePassword()"></i>
                </div>

                <div class="options">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn-submit">Login</button>
            </form>



            <div class="signup-link">
                Don't Have an account? <a href="#">Sign up</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var icon = document.querySelector('.toggle-password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>

</html>