@extends('layout.app')
@section('main')
<section class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header text-center py-4">
                        <h4 class="mb-0 animate-title">Enter the Book Universe</h4>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('account.authenticate') }}" method="post">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror animate-input" name="email" id="email" placeholder="name@example.com" required>
                                        <label for="email">Email Address</label>
                                        @error('email')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror animate-input" name="password" id="password" placeholder="Password" required>
                                        <label for="password">Password</label>
                                        @error('password')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 rounded-4 animate-btn" type="submit">Log In Now</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <p class="mb-0">New here? <a href="{{ route('account.register') }}" class="text-decoration-none animate-link">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection