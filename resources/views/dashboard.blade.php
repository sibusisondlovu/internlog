<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | InternLog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-color: #f1f1f1;
        }

        .mobile-only {
            display: none;
        }

        @media screen and (max-width: 768px) {
            .mobile-only {
                display: block;
            }
        }

        .navbar {
            background-color: white;
            padding: 1rem;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            cursor: pointer;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #007bff;
            color: white;
            padding: 1rem;
        }

        .sidebar nav a {
            display: block;
            padding: 0.5rem 0;
            color: white;
            text-decoration: none;
        }

        .content {
            flex-grow: 1;
            padding: 1.5rem;
        }

        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        footer {
            text-align: center;
            padding: 1rem;
            font-size: 0.85rem;
            color: #888;
        }
    </style>
</head>
<body>

    <!-- Sidebar (Mobile) -->
    <div x-show="sidebarOpen" class="mobile-only sidebar">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <strong>Menu</strong>
            <button @click="sidebarOpen = false" style="background: none; color: white; border: none; font-size: 1.5rem;">×</button>
        </div>
        <nav style="margin-top: 1rem;">
            <a href="#">Dashboard</a>
            <a href="#">Clock In/Out</a>
            <a href="#">Leave Requests</a>
        </nav>
    </div>

    <!-- Page Wrapper -->
    <div style="display: flex; flex-direction: column; min-height: 100vh;">

        <!-- Top Navbar -->
        <header class="navbar">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <button class="mobile-only" @click="sidebarOpen = true" style="font-size: 1.25rem; background: none; border: none;">☰</button>
                <img src="{{ asset('images/logo.png') }}" alt="InternLog" style="height: 40px;">
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn">Logout</button>
            </form>
        </header>

        <!-- Main Content -->
        <main class="content">
            <div class="card">
                <h2 style="margin-bottom: 1rem;">Welcome, Sibusiso</h2>
                <p>You are logged in as: <strong>{{ ucfirst(Auth::user()->role ?? 'Intern') }}</strong></p>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            © {{ date('Y') }} Jaspa Business Group (Pty) Ltd – Empowering Progress. Serving With Purpose.
            <div style="margin-top: 0.25rem;"><em>Powered by Jaspa Software – v1.0.0</em></div>
        </footer>
    </div>
</body>
</html>
