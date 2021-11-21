<form method="post" action="{{ route('login') }}">
    {{ csrf_field() }}
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password">
    <button type="submit" id="login-button">Login</button>
</form>