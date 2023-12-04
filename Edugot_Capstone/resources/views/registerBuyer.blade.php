@extends('mainpage')
@section('content')
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card p-2" style="border-radius: 10px;
                background: #F3F0F0;">
                        <div class="card-register card-body ">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                <p class="mt-0 mn-1">{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h2 class="text-center">Daftar</h2>
                                <div class="mb-3 ">
                                    <label for="emailInput" class="form-label mb-0 fw-semibold">Name</label>
                                    <div class="email input-group-text bg-light">
                                        <span class="input-group-text bg-light" style="border: none;" id="email-addon">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control rounded" style="border: none;"
                                            id="emailInput" name="buyer-name" placeholder="Name" aria-label="Email"
                                            aria-describedby="email-addon" />
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="emailInput" class="form-label mb-0 fw-semibold">Address</label>
                                    <div class="email input-group-text bg-light">
                                        <span class="input-group-text bg-light" style="border: none;" id="email-addon">
                                            <i class="fas fa-house"></i>
                                        </span>
                                        <input type="text" class="form-control rounded" style="border: none;"
                                            id="emailInput" name="buyer-address" placeholder="Address" aria-label="Email"
                                            aria-describedby="email-addon" />
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="emailInput" class="form-label mb-0 fw-semibold">Phone Number</label>
                                    <div class="email input-group-text bg-light">
                                        <span class="input-group-text bg-light" style="border: none;" id="email-addon">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                        <input type="text" class="form-control rounded" style="border: none;"
                                            id="emailInput" name="buyer-number-phone" placeholder="Phone Number" aria-label="Email"
                                            aria-describedby="email-addon" />
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="emailInput" class="form-label mb-0 fw-semibold">Email</label>
                                    <div class="email input-group-text bg-light">
                                        <span class="input-group-text bg-light" style="border: none;" id="email-addon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control rounded" style="border: none;"
                                            id="emailInput" name="buyer-email" placeholder="Email" aria-label="Email"
                                            aria-describedby="email-addon" />
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="passwordInput" class="form-label mb-0 fw-semibold">Password</label>
                                    <div class="password input-group-text  bg-light">
                                        <span class="input-group-text bg-light" style="border: none;" id="password-addon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control rounded" style="border: none;"
                                            id="passwordInput" name="buyer-password" placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon" />
                                    </div>
                                </div>
                                <div class="mb-4 ">
                                    <label for="confirmPasswordInput" class="form-label mb-0 fw-semibold">Confirm
                                        Password</label>
                                    <div class="password input-group-text  bg-light">
                                        <span class="input-group-text bg-light" style="border: none;"
                                            id="confirm-password-addon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" name="buyer-confirmation-password" class="form-control rounded" style="border: none;"
                                            id="confirmPasswordInput" placeholder="Confirm Password"
                                            aria-label="Confirm Password" aria-describedby="confirm-password-addon" />
                                    </div>
                                </div>
                                <button type="submit" class="login w-100 rounded p-1 fw-bold">Daftar</button>
                                <p class="card-text text-center fw-semibold">Already have an account?<span><a href=""
                                            class="text-decoration-none">Log in Account</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
