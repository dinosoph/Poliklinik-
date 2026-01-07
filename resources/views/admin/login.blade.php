<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Poliklinik Alisya</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            background: #F8F9FA;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            border-radius: 15px;
        }
        .brand-color {
            color: #499FB6;
        }
        .btn-brand {
            background-color: #499FB6;
            color: white;
        }
        .btn-brand:hover {
            background-color: #3c8ca1;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-4">
        <div class="card shadow-sm p-4 login-card border-0">

            <!-- Logo & Title -->
            <div class="text-center mb-4">
                <img src="{{ asset('assets/img/logo1.png') }}" width="70" class="mb-2">
                <h4 class="brand-color">Poliklinik Alisya</h4>
                <p class="text-muted mb-0">Admin Login</p>
            </div>

            <!-- Error Message -->
            @if ($errors->any())
                <div class="alert alert-danger small">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label text-muted">Email</label>
                    <input type="email" name="email" class="form-control" required autofocus>
                </div>

                <div class="mb-4">
                    <label class="form-label text-muted">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-brand w-100">
                    Login
                </button>
            </form>

        </div>

        <p class="text-center text-muted mt-3 small">
            © {{ date('Y') }} Poliklinik Alisya
        </p>
    </div>
</div>

</body>
</html>
