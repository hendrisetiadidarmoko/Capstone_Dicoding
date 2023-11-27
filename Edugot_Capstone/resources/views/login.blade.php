@extends('mainpage')
@section('content')
<section class="vh-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card p-2" style="border-radius: 10px;
                        background: #F3F0F0;">
                    <div class="card-login card-body ">
                        <h2 class="text-center">Masuk</h2>
                        <div class="mb-3 ">
                            <label for="emailInput" class="form-label mb-0">Email</label>
                            <div class="email input-group-text  bg-light">
                                <span class="input-group-text bg-light" style="border: none;" id="email-addon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control rounded" style="border: none;" id="emailInput"
                                    placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                            </div>
                        </div>
                        <div class="mb-1 ">
                            <label for="passwordInput" class="form-label mb-0">Password</label>
                            <div class="password input-group-text  bg-light">
                                <span class="input-group-text bg-light" style="border: none;" id="password-addon">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control rounded" style="border: none;"
                                    id="passwordInput" placeholder="Password" aria-label="Password"
                                    aria-describedby="password-addon" />
                            </div>
                        </div>
                        <p class="card-text mb-4">Forgot Password? <span><a href=""
                                    class="text-decoration-none">Reset Password</a></span></p>
                        <button type="submit" class="login w-100 rounded p-1">Login</button>
                        <p class="card-text text-center">Don't have an account yet?<span><a href="{{ url('/register') }}"
                                    class="text-decoration-none">Create an Account</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
