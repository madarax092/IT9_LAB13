<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input name="name" placeholder="Name" value="{{ old('name') }}" required>
        @error('name')
            {{ $message }}
        @enderror
        <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            {{ $message }}
        @enderror
        <input name="password" type="password" placeholder="Password" required>
        @error('password')
            {{ $message }}
        @enderror
        <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>
</body>

</html>
