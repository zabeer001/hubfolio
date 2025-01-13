<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <div>{{ $errors->first('email') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @if ($errors->has('password'))
                <div>{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Remember Me -->
        <div>
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                Remember me
            </label>
        </div>

        <!-- Submit and Forgot Password -->
        <div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif

            <button type="submit">Log in</button>
        </div>
    </form>
</body>
</html>
