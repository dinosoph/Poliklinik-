<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Poliklinik Alisya Admin</title>

    <!-- Vendor CSS Files from your public/assets folder [5] -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Custom CSS to match Poliklinik Alisya Branding [3, 4] -->
    <style>
        body { background-color: #F8F9FA; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .sidebar { 
            width: 260px; height: 100vh; position: fixed; 
            background: #FFFFFF; border-right: 1px solid #E3E6F0; 
            padding: 20px 0; display: flex; flex-direction: column;
        }
        .sidebar-brand { padding: 10px 25px; margin-bottom: 30px; display: flex; align-items: center; }
        .sidebar-brand img { width: 50px; margin-right: 10px; }
        .nav-link { 
            padding: 12px 25px; color: #6c757d; font-weight: 500; 
            display: flex; align-items: center; transition: 0.3s;
        }
        /* Teal Active State based on Source [3, 6] */
        .nav-link.active { 
            background-color: #499FB6; color: white !important; 
            border-radius: 0 25px 25px 0; margin-right: 20px; 
        }
        .nav-link i { margin-right: 15px; font-size: 1.2rem; }
        .main-content { margin-left: 260px; padding: 40px; }
        .logout-btn { 
            margin-top: auto; padding: 10px 25px; 
            color: #499FB6; border: 1px solid #499FB6;
            margin-left: 25px; margin-right: 25px; border-radius: 5px;
            text-decoration: none; text-align: center;
        }
    </style>
</head>

<body>

    <!-- Sidebar Section [3, 4] -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo"> <!-- Ensure logo is in public/assets/img [5] -->
            <h5 class="m-0" style="color: #499FB6;">Poliklinik Alisya</h5>
        </div>

        <nav class="nav flex-column">
            <!-- Navigation items matching the design [3, 6] -->
            <a class="nav-link {{ request()->routeIs('staff.*') ? 'active' : '' }}" href="{{ route('staff.index') }}">
                <i class="bi bi-people-fill"></i> Staff Profile
            </a>
            <a class="nav-link {{ request()->is('admin/bookings*') ? 'active' : '' }}" href="#">
                <i class="bi bi-list-ul"></i> Booking List
            </a>
        </nav>

        <!-- Log Out Button at the bottom [3, 4] -->
        <a href="#" class="logout-btn">
            <i class="bi bi-box-arrow-left"></i> Log Out
        </a>
    </div>

    <!-- Main Content Area [2, 7] -->
    <main class="main-content">
        @yield('content') <!-- This is where your staff list or edit forms will appear [2] -->
    </main>

    <!-- Vendor JS Files [5] -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>