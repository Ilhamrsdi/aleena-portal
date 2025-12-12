<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard - Aleena' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f5f7;
            font-family: Arial, sans-serif;
        }

        /* ================= SIDEBAR ================= */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #1e1e1e;
            color: #fff;
            padding-top: 20px;
            z-index: 99999; /* paling atas */
            transition: left .3s ease-in-out;
        }

        .sidebar .brand {
            font-size: 1.7rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .menu a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: #ccc;
            transition: .3s;
        }

        .sidebar .menu a:hover,
        .sidebar .menu a.active {
            background: #00ff73;
            color: #000;
        }

        /* ================= OVERLAY ================= */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: 99998;
        }

        /* ================= CONTENT ================= */
        .content-area {
            margin-left: 250px;
            padding: 25px;
        }

        .topbar {
            background: #fff;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
            z-index: 2;
        }

        /* ================= TOGGLE BUTTON ================= */
        .toggle-btn {
            font-size: 1.8rem;
            cursor: pointer;
            display: none;
            z-index: 100000; /* TERTINGGI */
            position: relative;
        }

        /* ============= RESPONSIVE ============= */
        @media (max-width: 768px) {

            .sidebar {
                left: -260px;
            }

            .sidebar.show {
                left: 0;
            }

            .sidebar-overlay.show {
                display: block;
            }

            .toggle-btn {
                display: block !important;
            }

            .content-area {
                margin-left: 0 !important;
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebarMenu">
        <div class="brand">Aleéna</div>

        <div class="menu">
            <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.berita.index') }}" class="{{ request()->is('admin/berita*') ? 'active' : '' }}">Berita</a>
            <a href="{{ route('admin.team.index') }}" class="{{ request()->is('admin/team*') ? 'active' : '' }}">Tim Kami</a>
            <a href="{{ route('admin.portofolio.index') }}" class="{{ request()->is('admin/portofolio*') ? 'active' : '' }}">Portofolio</a>
        </div>
    </div>

    <!-- OVERLAY -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    <!-- CONTENT -->
    <div class="content-area">

        <!-- TOPBAR -->
        <div class="topbar mb-4">

            <!-- tombol pasti muncul -->
            <span class="toggle-btn" onclick="toggleSidebar()">☰</span>

            <h4>{{ $title ?? 'Dashboard' }}</h4>

            <div class="d-flex align-items-center gap-3">
                <span>Hi, {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>

        </div>

        @yield('content')
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById("sidebarMenu").classList.toggle("show");
            document.getElementById("sidebarOverlay").classList.toggle("show");
        }
    </script>

</body>
</html>
