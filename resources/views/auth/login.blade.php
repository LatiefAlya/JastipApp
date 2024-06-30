@extends('layout.app')
@section('content')
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST" class="me-0">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" name="email" id="floatingInput"
                            placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" name="password" id="floatingPassword"
                            placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                        Login
                    </button>
                    <small class="text-body-secondary">By clicking Login, you agree to the terms of use.</small>
                    <hr class="my-4" />
                    <h2 class="fs-5 fw-bold mb-3">atau login dengan</h2>
                    <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                        <i class="fa-brands fa-twitter" style="color: #74c0fc"></i>
                        Sign up with Twitter
                    </button>
                    <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                        <i class="fa-brands fa-facebook" style="color: #1a9cff"></i>
                        Sign up with Facebook
                    </button>
                    <br />
                    <br />
                    <small class="text-body-secondary">Belum punya akun?
                        <a href="{{ route('register') }}">Daftar sekarang</a></small>
                </form>
            </div>
        </div>
    </div>
@endsection
