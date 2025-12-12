<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard - Aleena' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            background: #f4f5f7;
            font-family: Arial, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #1e1e1e;
            color: #fff;
            padding-top: 20px;
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
            font-size: 1rem;
            transition: .3s;
        }

        .sidebar .menu a:hover,
        .sidebar .menu a.active {
            background: #00ff73;
            color: #000;
        }

        /* Content */
        .content-area {
            margin-left: 250px;
            padding: 25px;
        }

        /* Topbar */
        .topbar {
            background: #fff;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .username {
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 200px;
            }
            .content-area {
                margin-left: 200px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                left: -250px;
                transition: .3s;
            }
            .sidebar.show {
                left: 0;
            }
            .content-area {
                margin-left: 0;
            }
            .toggle-btn {
                display: block;
                cursor: pointer;
            }
        }

        .toggle-btn {
            display: none;
            font-size: 1.5rem;
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
            {{-- <a href="{{ route('admin.portofolio') }}">Portofolio & Pencapaian</a>
            <a href="{{ route('admin.pengaturan') }}">Pengaturan</a> --}}
        </div>
    </div>

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- TOPBAR -->
        <div class="topbar mb-4">
            <span class="toggle-btn" onclick="toggleSidebar()">☰</span>

            <h4 class="m-0">{{ $title ?? 'Dashboard' }}</h4>

            <div class="d-flex align-items-center gap-3">
                <span class="username">Hi, {{ Auth::user()->name }}</span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>

        <!-- HALAMAN DINAMIS -->
        @yield('content')

    </div>

    <script>
        function toggleSidebar() {
            document.getElementById("sidebarMenu").classList.toggle("show");
        }
    </script>

</body>
</html>
