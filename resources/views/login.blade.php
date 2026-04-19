<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            display: flex;
            width: 100%;
            max-width: 1000px;
            overflow: hidden;
            min-height: 600px;
        }

        /* Left Panel - Orange Theme */
        .left-panel {
            background: linear-gradient(135deg, #ff8c42 0%, #ff5722 100%);
            width: 45%;
            padding: 40px;
            color: white;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 40px;
        }

        .brand-logo span {
            opacity: 0.9;
            font-weight: 400;
            font-size: 0.85rem;
            display: block;
        }

        .left-panel h1 {
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 20px;
            z-index: 2;
        }

        .illustration {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .illustration img {
            max-width: 120%;
            max-height: 350px;
            object-fit: contain;
            margin-left: -20px;
            z-index: 1;
            /* Placeholder floating animation */
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        /* Right Panel */
        .right-panel {
            width: 55%;
            padding: 40px 60px;
            background-color: #ffffff;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .language-selector {
            position: absolute;
            top: 40px;
            right: 40px;
            color: #6b7280;
            font-size: 0.85rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .right-panel h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #111827;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .input-group {
            position: relative;
        }

        .input-group input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #e5e7eb;
            padding: 10px 0;
            font-size: 0.95rem;
            color: #374151;
            background: transparent;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            outline: none;
            border-bottom-color: #ff5722;
        }

        .input-group input::placeholder {
            color: #9ca3af;
        }

        .toggle-password {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            cursor: pointer;
        }

        .options {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            color: #4b5563;
        }

        .options input[type="checkbox"] {
            margin-right: 10px;
            accent-color: #ff5722;
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .options label {
            cursor: pointer;
        }

        .options a {
            color: #ff5722;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-submit {
            background-color: #ff5722;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 14px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 10px;
            box-shadow: 0 4px 14px rgba(255, 87, 34, 0.3);
        }

        .btn-submit:hover {
            background-color: #e64a19;
            transform: translateY(-2px);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 30px 0 20px;
            color: #9ca3af;
            font-size: 0.85rem;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e5e7eb;
        }

        .divider span {
            padding: 0 15px;
        }

        .social-logins {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #e5e7eb;
            background-color: white;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            border-color: #ff5722;
        }

        .social-btn i {
            font-size: 1.1rem;
        }

        .social-btn.google i { color: #DB4437; }
        .social-btn.facebook i { color: #4267B2; }
        .social-btn.instagram i { color: #E1306C; }
        .social-btn.twitter i { color: #1DA1F2; }
        .social-btn.linkedin i { color: #0A66C2; }

        .signup-link {
            text-align: center;
            font-size: 0.85rem;
            color: #6b7280;
            margin-top: auto;
        }

        .signup-link a {
            color: #ff5722;
            text-decoration: none;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                max-width: 450px;
            }
            .left-panel {
                width: 100%;
                padding: 30px;
                min-height: 300px;
            }
            .left-panel h1 {
                font-size: 1.8rem;
            }
            .right-panel {
                width: 100%;
                padding: 30px;
            }
            .language-selector {
                top: 20px;
                right: 20px;
            }
            .right-panel h2 {
                margin-top: 10px;
            }
        }
    </style>
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
                <!-- Using a nice placeholder illustration representing learning/online-school -->
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/online-learning-4382583-3639591.png" alt="Online Learning Illustration">
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">


            <h2>Login</h2>

            <form action="#" method="POST">
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

                <button type="submit" class="btn-submit" onclick="event.preventDefault(); alert('belum bisa login sistem nya');">Login</button>
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
