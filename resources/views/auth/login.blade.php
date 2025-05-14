<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | InternLog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body style="margin: 0; padding: 0; background-color: #f1f1f1; font-family: sans-serif; display: flex; align-items: center; justify-content: center; min-height: 100vh;">

    <div style="width: 100%; max-width: 400px; padding: 2rem; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <img src="{{ asset('images/logo.png') }}" alt="InternLog" style="height: 60px;">
            <h2 style="margin-top: 1rem; font-size: 1.5rem;">Welcome to InternLog</h2>
        </div>

        <form method="POST" action="{{ route('login') }}" x-data="{ loading: false }" @submit="loading = true">
    @csrf
            @csrf

            <label for="email" style="display: block; margin-bottom: 0.5rem;">Email</label>
            <input type="email" id="email" name="email" required autofocus style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 8px; margin-bottom: 1rem;">

            <label for="password" style="display: block; margin-bottom: 0.5rem;">Password</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 8px; margin-bottom: 1rem;">

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <label style="font-size: 0.9rem;">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="{{ route('password.request') }}" style="font-size: 0.9rem; text-decoration: none; color: #007bff;">Forgot password?</a>
            </div>

            <button type="submit" x-bind:disabled="loading"
        style="width: 100%; padding: 0.75rem; background-color: #007bff; border: none; color: white; border-radius: 8px; cursor: pointer; position: relative;">
        
        <template x-if="loading">
            <span class="spinner" style="margin-right: 8px;">⏳</span>
        </template>
        <span x-text="loading ? 'Logging in...' : 'Login'"></span>
    </button>
        </form>

        <footer style="margin-top: 2rem; text-align: center; font-size: 0.85rem; color: #888;">
            <div>© {{ date('Y') }} Jaspa Business Group (Pty) Ltd – Empowering Progress. Serving With Purpose.</div>
            <div style="text-align: right;"><em>Powered by Jaspa Software – v1.0.0</em></div>
        </footer>
    </div>

</body>
</html>
