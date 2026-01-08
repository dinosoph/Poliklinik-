<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="refresh" content="60">
    <title>Poliklinik Alisya Admin</title>

    <!-- Vendor CSS Files from your public/assets folder [5] -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Custom CSS to match Poliklinik Alisya Branding [3, 4] -->
<style>
/* =========================
   Base Body & Font
========================= */
body { 
    background-color: #F4F6F9; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    color: #495057;
}

/* =========================
   Sidebar Styling
========================= */
.sidebar { 
    width: 260px; 
    height: 100vh; 
    position: fixed; 
    background: linear-gradient(180deg, #FFFFFF 0%, #E6F2F7 100%);
    border-right: 1px solid #E3E6F0; 
    padding: 20px 0; 
    display: flex; 
    flex-direction: column; 
    box-shadow: 2px 0 6px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.sidebar:hover {
    width: 270px;
}

.sidebar-brand { 
    padding: 10px 25px; 
    margin-bottom: 30px; 
    display: flex; 
    align-items: center; 
    background-color: #F0FAFF; 
    border-radius: 15px; 
    margin: 0 15px 30px 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.sidebar-brand img { 
    width: 50px; 
    margin-right: 10px; 
    transition: transform 0.3s ease;
}

.sidebar-brand img:hover {
    transform: rotate(-10deg);
}

.nav-link { 
    padding: 12px 25px; 
    color: #6c757d; 
    font-weight: 500; 
    display: flex; 
    align-items: center; 
    transition: all 0.3s ease;
    border-radius: 0 25px 25px 0;
    margin-right: 20px;
}

.nav-link:hover {
    background-color: #E0F2F7;
    color: #499FB6 !important;
    transform: translateX(5px);
}

/* Active State */
.nav-link.active { 
    background-color: #499FB6; 
    color: white !important; 
    border-radius: 0 25px 25px 0; 
    box-shadow: 2px 2px 10px rgba(73, 159, 182, 0.3);
}

.nav-link i { 
    margin-right: 15px; 
    font-size: 1.2rem; 
    transition: transform 0.3s ease;
}

.nav-link:hover i {
    transform: scale(1.2);
    color: #499FB6;
}

/* =========================
   Main Content
========================= */
.main-content { 
    margin-left: 260px; 
    padding: 40px; 
    min-height: 100vh;
    background: #F4F6F9;
    transition: margin-left 0.3s ease;
}

/* =========================
   Breadcrumbs (Fully Transparent)
========================= */
nav.breadcrumb {
    background: transparent !important;
    padding: 0 !important;
    margin-bottom: 20px;
    border-radius: 0 !important;
    box-shadow: none !important;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    color: #6c757d;
    padding: 0 6px;
}

.breadcrumb a {
    color: #6c757d;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb a:hover {
    color: #499FB6;
}

.breadcrumb-item.active {
    color: #499FB6;
    font-weight: 600;
}

/* =========================
   Card-Like Content Wrapper
========================= */
.main-content > .content-wrapper {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    margin-bottom: 30px;
}

/* =========================
   Logout Button
========================= */
.logout-btn {
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    background: #FF6B6B;
    color: white;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    cursor: pointer;
}

.logout-btn:hover {
    background: #FF4B4B;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}
</style>


</head>

<body>

    <!-- Sidebar Section [3, 4] -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo"> <!-- Ensure logo is in public/assets/img [5] -->
            <h5 class="m-0" style="color: #499FB6;">Poliklinik Alisya</h5>
        </div>

        <nav class="nav flex-column">
            <!-- Dashboard -->
            <a class="nav-link {{ request()->routeIs('staff.dashboard') ? 'active' : '' }}"
            href="{{ route('staff.dashboard') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>

            <!-- Staff Profile -->
            <a class="nav-link {{ request()->routeIs('staff.index') || request()->routeIs('staff.edit') ? 'active' : '' }}"
            href="{{ route('staff.index') }}">
                <i class="bi bi-people-fill"></i> Staff Profile
            </a>

            <!-- Booking List -->
            <a class="nav-link {{ request()->routeIs('bookings.*') ? 'active' : '' }}"
            href="{{ route('bookings.index') }}">
                <i class="bi bi-list-ul"></i> Booking List
            </a>
        </nav>


        <!-- Log Out Button at the bottom [3, 4] -->
        <div style="margin-top: auto; padding: 0 25px 20px 25px;">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn w-100">
                    <i class="bi bi-box-arrow-left"></i> Log Out
                </button>
            </form>
        </div>


    </div>

    <!-- Main Content Area [2, 7] -->
    <main class="main-content">
        @yield('content') <!-- This is where your staff list or edit forms will appear [2] -->
    </main>

    <!-- Vendor JS Files [5] -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>