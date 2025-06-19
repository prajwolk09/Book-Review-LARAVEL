<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Review App - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="header shadow-sm">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">
                <h1 class="mb-0"><a href="index.html" class="text-white text-decoration-none">Book Review App</a></h1>
                <div class="navigation">
                    @if(Auth::check())
                    <a href="{{ route('account.profile') }}" class="text-white">My Account</a>
                    @else
                    <a href="{{ route('account.login') }}" class="me-3">Account</a>
                    <a href="{{ route('account.register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 shadow-lg rounded-4 animate-card">
                    <div class="card-header text-center py-4">
                        <h4 class="mb-0 animate-title">Welcome, {{ Auth::user()->name }}</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="images/profile-img-1.jpg" class="img-fluid rounded-circle" style="width: 120px; height: 120px; object-fit: cover;" alt="{{ Auth::user()->name }}">
                        </div>
                        <div class="h5">
                            <strong>{{ Auth::user()->name }}</strong>
                            <p class="h6 mt-2 text-muted">5 Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-lg mt-4 rounded-4 animate-card">
                    <div class="card-header text-center py-4">
                        <h4 class="mb-0 animate-title">Navigation</h4>
                    </div>
                    <div class="card-body sidebar">
                        <ul class="nav flex-column">
                            <li class="nav-item ">
                                <a href="book-listing.html" class="animate-link text-black">Books</a>
                            </li>
                            <li class="nav-item">
                                <a href="reviews.html" class="animate-link text-black">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a href="profile.html" class="animate-link text-black">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="my-reviews.html" class="animate-link text-black">My Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a href="change-password.html" class="animate-link text-black">Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('account.logout') }}" class="animate-link text-black">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow-lg rounded-4 animate-card">
                    <div class="card-header text-center py-4">
                        <h4 class="mb-0 animate-title">Your Profile</h4>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form action="#!">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" value="John Doe" class="form-control animate-input" name="name" id="name" placeholder="Name" required>
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" value="john@example.com" class="form-control animate-input" name="email" id="email" placeholder="Email" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" name="image" id="image" class="form-control animate-input">
                                        <label for="image">Profile Image</label>
                                    </div>
                                    <div class="mt-3">
                                        <img src="images/profile-img-1.jpg" class="img-fluid rounded" style="max-width: 150px;" alt="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 rounded-4 animate-btn" type="submit">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>