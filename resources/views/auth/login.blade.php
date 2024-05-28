<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('{{asset('image/wallpaperflare.com_wallpaper.jpg')}}') no-repeat center center fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: cover;
        }
        .login-container {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            transition: all 0.3s ease-in-out;
        }
        .login-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container form label {
            margin-bottom: 8px;
            color: #555;
        }
        .login-container form input {
            padding: 12px;
            width: 280px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .login-container form input[type="checkbox"] {
            width: 20px;

        }
        .login-container form input:focus {
            border-color: #007bff;
            outline: none;
        }
        .login-container form button {
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container form button:hover {
            background-color: #0056b3;
        }
        .login-container .error-message {
            color: #dc3545;
            margin-top: 15px;
            list-style: none;
            padding-left: 0;
        }
    </style>

</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action={{ route('login.post') }}>
            @csrf

            <div>
                <label for="email">Email:<br></label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div>
                <label for="password">Password:<br></label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div>

            <div>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

