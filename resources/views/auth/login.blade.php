<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="username">Username</label>
    <input type="text" name="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>


@if(session('error'))
    <p>{{ session('error') }}</p>
@endif