@extends('layout.app')
@section('main')
    <section class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-header text-center py-4">
                            <h4 class="mb-0 animate-title">Join Us</h4>
                        </div>
                        <div class="card-body p-4 p-md-5">
                            <form action="{{ route('account.processRegister') }}" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" value="{{ old('name') }}" class="form-control animate-input @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required>
                                            <label for="name">Full Name</label>
                                            @error('name')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" value="{{ old('email') }}" class="form-control animate-input @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                                            <label for="email">Email Address</label>
                                            @error('email')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control animate-input @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                                            <label for="password">Password</label>
                                            @error('password')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control animate-input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                                            <label for="password_confirmation">Confirm Password</label>
                                            @error('password_confirmation')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3 rounded-4 animate-btn" type="submit">Launch Your Account</button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center mt-4">
                                <p class="mb-0">Already registered? <a href="{{ route('account.login') }}" class="text-decoration-none animate-link">Log in here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection