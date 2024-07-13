<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
    <style>
        .auth-container {
            max-width: 400px;
            margin: auto;
            padding-top: 100px;
        }
        .auth-form {
            background: #f7f7f7;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #000;
        }
        .alert {
            display: none;
        }
    </style>
</head>
<body>
    @include('partials.header')
    <div class="auth-container">
        <div class="auth-form">
            <div class="alert alert-danger" id="error-message"></div>
            <div id="login-form">
                <h3 class="text-center">Login</h3>
                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <div class="form-group">
                        <label for="login-email">Email address</label>
                        <input type="email" class="form-control" id="login-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" class="form-control" id="login-password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <p class="text-center mt-3">
                        Don't have an account? <a href="#" onclick="toggleForms()">Register here</a>
                    </p>
                </form>
            </div>
            <div id="register-form" style="display: none;">
                <h3 class="text-center">Register</h3>
                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf
                    <div class="form-group">
                        <label for="register-name">Name</label>
                        <input type="text" class="form-control" id="register-name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="register-email">Email address</label>
                        <input type="email" class="form-control" id="register-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" class="form-control" id="register-password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="register-password-confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="register-password-confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <p class="text-center mt-3">
                        Already have an account? <a href="#" onclick="toggleForms()">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script>
        function toggleForms() {
            var loginForm = document.getElementById('login-form');
            var registerForm = document.getElementById('register-form');
            if (loginForm.style.display === "none") {
                loginForm.style.display = "block";
                registerForm.style.display = "none";
            } else {
                loginForm.style.display = "none";
                registerForm.style.display = "block";
            }
        }

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            let csrfToken = document.querySelector('input[name="_token"]').value;

            fetch('{{ route("login") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.token) { // Trường hợp đăng nhập thành công
                    alert('Login successful!');
                    window.location.href = '/'; // Chuyển hướng về trang home
                } else if (data.user) { // Trường hợp đăng ký thành công
                    alert('Registration successful!');
                    window.location.href = '/'; // Chuyển hướng về trang home
                } else { // Xử lý lỗi khi đăng nhập hoặc đăng ký thất bại
                    let errorMessage = document.getElementById('error-message');
                    errorMessage.style.display = 'block';
                    errorMessage.innerText = data.message || 'Login or registration failed';
                }
            });
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            let csrfToken = document.querySelector('input[name="_token"]').value;

            fetch('{{ route("register") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.user) {
                    alert('Registration successful!');
                    // Redirect or handle registration success
                } else {
                    let errorMessage = document.getElementById('error-message');
                    errorMessage.style.display = 'block';
                    errorMessage.innerText = data.message || 'Registration failed';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
