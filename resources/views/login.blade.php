<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Snippet Store - Login</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <style>
            body, html {
                height: 100%;
                margin: 0;
                font-family: 'Courier New', monospace;
                background: linear-gradient(45deg, #1a1a1a 0%, #2c3e50 100%);
                color: #e0e0e0;
            }
            .card {
                background: rgba(40, 44, 52, 0.8);
                border: 1px solid #61dafb;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            }
            .card-body {
                padding: 1.5rem;
            }
            h4 {
                color: #61dafb;
                margin-bottom: 1rem;
            }
            .form-control {
                background-color: #282c34;
                border: 1px solid #61dafb;
                color: #e0e0e0;
            }
            .form-control:focus {
                background-color: #282c34;
                border-color: #61dafb;
                box-shadow: 0 0 0 0.25rem rgba(97, 218, 251, 0.25);
                color: #e0e0e0;
            }
            .form-floating label {
                color: #61dafb;
            }
            .btn-primary {
                background-color: #61dafb;
                border-color: #61dafb;
                color: #282c34;
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #282c34;
                border-color: #61dafb;
                color: #61dafb;
            }
            .alert {
                background-color: rgba(97, 218, 251, 0.1);
                border-color: #61dafb;
                color: #61dafb;
            }
            .alert-danger {
                background-color: rgba(220, 53, 69, 0.1);
                border-color: #dc3545;
                color: #dc3545;
            }
            hr {
                border-color: #61dafb;
                opacity: 0.2;
                margin: 0.75rem 0;
            }
            a {
                color: #61dafb;
                text-decoration: none;
                transition: all 0.3s ease;
            }
            a:hover {
                color: #e0e0e0;
            }
            .logo {
                font-size: 1.2em;
                font-weight: bold;
                color: #61dafb;
                margin-bottom: 0.5rem;
                text-align: center;
            }
            .form-floating {
                margin-bottom: 0.75rem;
            }
            .login-now {
                font-weight: bold;  
            } 
          
        </style>
    </head>
    <body>
        <section class="py-3 py-md-4 py-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="card border rounded-4">
                            <div class="card-body">
                                <div class="logo">{ Snippet Store }</div>
                                <div class="mb-3">
                                    <h4 class="text-center">Login Here</h4>
                                </div>
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('error'))
                                <div class="alert alert-danger">{{Session::get('error')}}</div>
                                @endif
                                <form action="{{ route('account.authenticate') }}" method="post">
                                    @csrf
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="name@example.com">
                                        <label for="email" class="form-label">Email</label>
                                        @error('email')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                        <label for="password" class="form-label">Password</label>
                                        @error('password')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-grid mt-3">
                                        <button class="btn btn-primary py-2 login-now" type="submit">Log in now</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="{{route('account.register')}}" class="link-secondary text-decoration-none small ">Create new account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>