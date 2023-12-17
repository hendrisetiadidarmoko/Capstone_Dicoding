@extends('mainpage')
@section('content')
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card p-2" style="border-radius: 10px;
                        background: #F3F0F0;">
                        <div class="card-login card-body ">
                            @if(session('status'))
                            <div class="alert alert-success mb-3">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h2 class="text-center">Masuk</h2>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger mt-3">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <div class="mb-3 ">
                                    <label for="emailInput" class="form-label mb-0 fw-semibold">Email</label>
                                    <div class="email input-group-text  bg-light">
                                        <span class="input-group-text bg-light" style="border: none;" id="email-addon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control roundeds" style="border: none;"
                                            id="email" name="email" placeholder="Email" aria-label="Email"
                                            value="{{ old('email') }}" aria-describedby="email-addon" required />
                                    </div>
                                </div>
                                <div class="mb-1 ">
                                    <label for="passwordInput" class="form-label mb-0 fw-semibold">Password</label>
                                    <div class="password input-group-text  bg-light">
                                        <span class="input-group-text bg-light" style="border: none;" id="password-addon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password"
                                            class="form-control rounded @error('password') is-invalid @enderror"
                                            style="border: none;" id="password" name="password" placeholder="Password"
                                            aria-label="Password" aria-describedby="password-addon" required
                                            autocomplete="current-password" />
                                    </div>
                                </div>
                                
                                <button type="submit" class="login w-100 rounded p-1 fw-bold mt-3">Login</button>
                                <p class="card-text text-center fw-semibold">Don't have an account yet?<span><a
                                            href="{{ url('/register') }}" class="text-decoration-none">Create an
                                            Account</a></span></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
