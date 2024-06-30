<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <form action="{{ route('register') }}" method="POST" class="login bg-white p-5 rounded shadow"
        style="max-width: 500px;">
        @csrf

        <h4 class="mb-4 text-center">Daftar Akun</h4>

        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="validationDefault01" value="{{ old('username') }}"
                name="username" placeholder="Username" required>
            <label for="validationDefault01">Username</label>
            @error('username')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" value="{{ old('username') }}"
                name="email" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" value="{{ old('username') }}"
                name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            <div id="passwordHelpBlock" class="form-text text-left fs-10">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="form-floating mb-3">

            <input type="password" class="form-control rounded-3" id="floatingConfirmationPassword"
                name="password_confirmation" placeholder="Confirm Password" required>
            <label for="floatingConfirmationPassword">Confirm Password</label>

        </div>

        <div class="text-center"><small class="text-body-secondary">Dengan mendaftar, Anda menyetujui <a
                    href="#">Kebijakan Privasi</a></small></div>

        <button class="w-100 my-3 btn btn-lg rounded-3 btn-primary" href="{{ route('login') }}"
            type="submit">Daftar</button>

        <div class="text-center"><small class="text-body-secondary">Sudah Punya Akun? <a
                    href="{{ route('login') }}">Login</a></small></div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
