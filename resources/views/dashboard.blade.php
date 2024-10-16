<!-- <!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel 11 Multi Auth</title>
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   </head>
   <body class="bg-light">
        <nav class="navbar navbar-expand-md bg-white shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
            <div class="container">
                <a class="navbar-brand" href="#">
                   <strong>Laravel 11 Multi Auth</strong>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{Auth::user()->name}}</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">                          
                                <li>
                                    <a class="dropdown-item" href="{{route('account.logout')}}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <div class="container">
           <div class="card border-0 shadow my-5">
                <div class="card-header bg-light">
                    <h3 class="h5 pt-2">Dashboard</h3>
                </div>
                <div class="card-body">
                    You are logged in !!
                </div>
           </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snippets App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding-top: 56px;
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed;
            top: 56px;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0 0;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.05), 2px 0 5px 0 rgba(0,0,0,.05);
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
            border-radius: 0 25px 25px 0;
            padding: 10px 20px;
            margin: 5px 0;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: #007bff;
            background-color: #e9ecef;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .snippet-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .snippet-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .snippet-card .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }
        .snippet-card .card-body {
            padding: 20px;
        }
        .snippet-card .card-footer {
            background-color: #f8f9fa;
            border-top: none;
            padding: 10px 20px;
        }
        .favorite-btn, .copy-btn {
            padding: 5px 10px;
            border-radius: 20px;
        }
        .favorite-btn:hover, .copy-btn:hover {
            background-color: #e9ecef;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff !important;
        }
        main {
            padding-top: 20px;
        }
    </style>
</head>
<body> -->
    <!-- Navigation Bar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-code-square"></i> Snippets App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div></div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row"> -->
            <!-- Sticky Sidebar -->
            <!-- <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-white sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="bi bi-collection"></i> All Snippets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-heart"></i> Favorites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('account.logout')}}">
                                <i class="bi bi-box-arrow-right"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> -->

            <!-- Main Content -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your Snippets</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary">
                            <i class="bi bi-plus-lg"></i> New Snippet
                        </button>
                    </div>
                </div> -->

                <!-- Snippets Grid -->
                <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
        @for ($i = 0; $i < 9; $i++)
            <div class="col">
                <div class="card h-100 snippet-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Snippet {{ $i + 1 }}
                        <span class="badge bg-secondary">sample</span>
                    </div>
                    <div class="card-body">
                        <pre><code class="language-plaintext">This is a sample snippet content.
Replace with actual snippet data.

function exampleCode() {
    console.log("Hello, World!");
}

// TODO: Add more code here
</code></pre>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-primary btn-sm favorite-btn">
                            <i class="bi bi-heart"></i>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm copy-btn">
                            <i class="bi bi-clipboard"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endfor
    </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snippets App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding-top: 56px;
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 56px;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0 0;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .05), 2px 0 5px 0 rgba(0, 0, 0, .05);
            transition: all 0.3s;
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
            border-radius: 0 25px 25px 0;
            padding: 10px 20px;
            margin: 5px 0;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #007bff;
            background-color: #e9ecef;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .snippet-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .snippet-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .snippet-card .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }

        .snippet-card .card-body {
            padding: 20px;
        }

  
        .snippet-card .card-footer {
            background-color: #f8f9fa;
            border-top: none;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .favorite-btn,
        .copy-btn,
        .delete-btn {
            padding: 5px 10px;
            border-radius: 20px;
        }

        .favorite-btn:hover,
        .copy-btn:hover,
        .delete-btn:hover {
            background-color: #e9ecef;
        }

        .delete-btn {
            color: #dc3545;
        }

        .delete-btn:hover {
            color: #fff;
            background-color: #dc3545;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #007bff !important;
        }

        main {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-code-square"></i> Snippets App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mx-auto">
                <span class="navbar-text">
                    Hello, {{ Auth::user()->name }}
                </span>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sticky Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-white sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="bi bi-collection"></i> All Snippets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-heart"></i> Favorites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('account.logout')}}">
                                <i class="bi bi-box-arrow-right"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your Snippets</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary">
                            <i class="bi bi-plus-lg"></i> New Snippet
                        </button>
                    </div>
                </div>

                <!-- Snippets Grid -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @php
                        $snippets = Auth::user() ? Auth::user()->snippets : [];
                    @endphp
                    @forelse ($snippets as $snippet)
                        <div class="col">
                            <div class="card h-100 snippet-card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    {{$snippet->title}}
                                    <span class="badge bg-secondary">{{$snippet->language}}</span>
                                </div>
                                <div class="card-body">
                                    <pre><code class="language-{{$snippet->language}}">{{  $snippet->code }}</code></pre>
                                </div>
                                <div class="card-footer">
                                    <div>
                                        <button class="btn btn-outline-primary btn-sm favorite-btn" title="Favorite">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                        <button class="btn btn-outline-secondary btn-sm copy-btn" title="Copy">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    <button class="btn btn-outline-danger btn-sm delete-btn" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No snippets found.</p>
                    @endforelse
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>