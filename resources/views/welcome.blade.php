<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body text-center p-5">
                        <h1 class="mb-4">Welcome to Our App</h1>
                        <p class="mb-4">Please login or register to continue</p>
                        <div class="d-grid gap-2">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
