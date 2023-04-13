@extends('layouts.master')
@section('title','login')
@section('style')
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('assets/css/auth/style.css') }}">
@endsection
@section('content')
    <section class="login-container">
        <div class="image-form">
            <img src="{{ asset('assets/img/auth/background.jpg') }}" alt="backgroundLoginForm" />
        </div>
        <div class="form-section-container">
            <div class="login-form">
                <header class="login-header">
                    <h1>Log In</h1>
                </header>
                <div class="form-section">
                    <form action="#">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" id="Email" name="email" placeholder="you@example.com" required />
                        </div>
                        <div class="form-group">
                            <div class="label-password">
                                <label for="Password">Password</label>
                                <a>Forgot password?</a>
                            </div>
                            <div class="input-hidden-password">
                                <i class="uil uil-eye eye"></i>
                                <input type="password" id="Password" name="password" placeholder="Enter 6 characters or more" required />
                            </div>
                        </div>
                        <div class="btn login">
                            <button>LOG IN</button>
                        </div>
                    </form>
                    <div class="line-between">
                        <span>OR</span>
                    </div>
                    <div class="btn register">
                        <button>
                            <a href="{{ route('ouvrier.register') }}">SIGN IN</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>
</html>