<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snippets App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Theme Colors */
        :root {
            --primary-color: #61dafb;
            --bg-dark: #1a1a1a;
            --bg-darker: #282c34;
            --text-light: #e0e0e0;
            --card-bg: rgba(40, 44, 52, 0.8);
        }

        body {
            font-family: 'Courier New', monospace;
            padding-top: 56px;
            background: linear-gradient(45deg, #1a1a1a 0%, #2c3e50 100%);
            color: var(--text-light);
        }

        /* Navbar Styling */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            background-color: rgba(0, 0, 0, 0.8) !important;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--primary-color) !important;
        }

        .navbar-text,
        .nav-link {
            color: var(--text-light) !important;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        /* Sidebar Styling - Preserved Structure */
        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            top: 56px;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0 0;
            background-color: var(--bg-darker) !important;
            /* Added !important */
            border-right: 1px solid var(--primary-color);
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
        }

        /* Ensure position-sticky container has the correct background */
        .sidebar .position-sticky {
            background-color: var(--bg-darker);
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: var(--text-light) !important;
            /* Added !important */
            border-radius: 0 25px 25px 0;
            padding: 10px 20px;
            margin: 5px 0;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link:hover {
            color: var(--primary-color) !important;
            /* Added !important */
            background-color: rgba(97, 218, 251, 0.1);
            transform: translateX(5px);
        }

        .sidebar .nav-link.active {
            color: var(--primary-color) !important;
            /* Added !important */
            background-color: rgba(97, 218, 251, 0.15);
            border-left: 3px solid var(--primary-color);
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        /* Responsive behavior */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                border-right: none;
                border-bottom: 1px solid var(--primary-color);
            }
        }

        /* Snippet Card Styling */
        .snippet-card {
            height: 400px !important;
            /* Fixed height for all cards */
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: 1px solid var(--primary-color);
            border-radius: 15px;
            overflow: hidden;
            background-color: var(--card-bg);
        }

        .snippet-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(97, 218, 251, 0.2);
        }

        .snippet-card .card-header {
            background-color: rgba(97, 218, 251, 0.1);
            color: var(--primary-color);
            font-weight: bold;
            padding: 10px 15px;
            border-bottom: 1px solid var(--primary-color);
            flex-shrink: 0;
            /* Prevents header from shrinking */
        }

        .snippet-card .card-body {
            flex: 1;
            /* Takes remaining space */
            padding: 20px;
            background-color: var(--bg-darker);
            overflow: hidden;
            /* Hide overflow */
            position: relative;
        }

        .snippet-card pre {
            height: 100%;
            margin: 0;
            overflow: auto;
            /* Enable scrolling */
            background-color: var(--bg-dark);
            border-radius: 5px;
            padding: 15px;
        }

        .snippet-card code {
            /* color: var(--primary-color); */
            color: white;
            white-space: pre;
            word-wrap: normal;
        }

        .snippet-card .card-footer {
            background-color: rgba(97, 218, 251, 0.1);
            border-top: 1px solid var(--primary-color);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
            /* Prevents footer from shrinking */
        }

        /* Scrollbar Styling */
        .snippet-card pre::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        .snippet-card pre::-webkit-scrollbar-track {
            background: var(--bg-dark);
        }

        .snippet-card pre::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 4px;
        }

        .snippet-card pre::-webkit-scrollbar-thumb:hover {
            background: #4fa8c6;
        }

        /* Ensure consistent card sizes in grid */
        .row-cols-md-3>* {
            margin-bottom: 1.5rem;
        }

        /* Button Styling */
        .btn-primary {
            background-color: var(--primary-color);
            color: var(--bg-darker);
            border: none;
        }

        .btn-primary:hover {
            background-color: #4fa8c6;
            color: var(--bg-darker);
        }

        .btn-outline-secondary {
            color: var(--text-light);
            border-color: var(--text-light);
        }

        .btn-outline-secondary:hover {
            background-color: var(--text-light);
            color: var(--bg-darker);
        }

        .favorite-btn,
        .copy-btn,
        .edit-btn,
        .delete-btn {
            padding: 5px 10px;
            border-radius: 20px;
            background-color: transparent;
        }

        .favorite-btn {
            border: 1px solid #14A44D;
            /* color: var(--primary-color); */
            color: #14A44D
        }

        .copy-btn {
            border: 1px solid gray;
            /* color: var(--primary-color); */
            color: gray;
        }

        .edit-btn {}

        .delete-btn {
            border: 1px solid #dc3545;
            color: #dc3545;
        }

        .favorite-btn:hover {
            color: white;
            background-color: #14A44D
        }

        .copy-btn:hover {
            color: white;
            /* background-color: white; */
            background-color: grey;
        }

        .delete-btn:hover {
            color: white;
            background-color: #dc3545;
        }

        /* Modal Styling */
        .modal-content {
            background-color: var(--bg-darker);
            border: 1px solid var(--primary-color);
            border-radius: 15px;
        }

        .modal-header {
            background-color: rgba(97, 218, 251, 0.1);
            color: var(--primary-color);
            border-bottom: 1px solid var(--primary-color);
        }

        .modal-title {
            font-weight: bold;
            color: var(--primary-color);
        }

        .modal-body {
            padding: 30px;
            color: var(--text-light);
        }

        /* Form Controls */
        .form-control,
        .form-select {
            background-color: var(--bg-dark);
            border: 1px solid var(--primary-color);
            color: var(--text-light);
        }

        .form-control:focus,
        .form-select:focus {
            background-color: var(--bg-dark);
            border-color: var(--primary-color);
            color: var(--text-light);
            box-shadow: 0 0 0 0.25rem rgba(97, 218, 251, 0.25);
        }

        .form-label {
            color: var(--text-light);
        }

        /* Code Display */
        pre {
            background-color: var(--bg-dark);
            border-radius: 5px;
            padding: 15px;
            margin: 0;
        }

        code {
            color: var(--primary-color);
        }

        /* Badge Styling */
        .badge {
            background-color: var(--primary-color) !important;
            color: var(--bg-darker) !important;
        }

        /* Dark theme for option elements */
        option {
            background-color: var(--bg-darker);
            color: var(--text-light);
        }

        /* Main Content */
        main {
            padding-top: 20px;
        }

        .border-bottom {
            border-bottom-color: var(--primary-color) !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--primary-color);
        }

        /* Preserve the existing responsive behavior */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <!-- Keep the existing HTML structure exactly as is -->
    <!-- The HTML content from your original file goes here unchanged -->
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('snippet.about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('snippet.contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sticky Sidebar -->
            <!-- <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-white sidebar"> -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ $filter === 'all' ? 'active' : '' }}"
                                href="{{ route('account.snippet-dashboard') }}">
                                <i class="bi bi-collection"></i> All Snippets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $filter === 'favorite' ? 'active' : '' }}"
                                href="{{ route('account.snippet-dashboard', ['filter' => 'favorite']) }}">
                                <i class="bi bi-heart"></i> Favorites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('account.logout') }}">
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
                    <h1 class="h2">{{ $filter === 'favorite' ? 'Favorite Snippets' : 'Your Snippets' }}</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createSnippetModal">
                            <i class="bi bi-plus-lg"></i> New Snippet
                        </button>
                    </div>
                </div>

                <!-- Snippets Grid -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                     <!-- @php
                        $snippets = Auth::user() ? Auth::user()->snippets : [];
                    @endphp -->
                    {{-- Add this temporarily at the top of your snippets loop --}}
                    {{-- Add this temporarily at the top of your snippets loop --}}
                     <!-- @if(config('app.debug'))
                        <div class="alert alert-info">
                            <p>Filter: {{ $filter }}</p>
                            <p>Snippet Count: {{ $snippets->count() }}</p>
                            <p>Favorites Count: {{ $snippets->where('favorite', true)->count() }}</p>
                            <pre>{{ print_r($snippets->toArray(), true) }}</pre>
                        </div>
                    @endif  -->
                    @php
                        $filteredSnippets = $filter === 'favorite' ? $snippets->where('favorite', true) : $snippets;
                    @endphp
                    @forelse ($filteredSnippets as $snippet)
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
                                        <form action="{{ route('snippets.favorite', $snippet->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-outline-primary btn-sm favorite-btn"
                                                title="{{$snippet->favorite ? 'favorite' : 'unfavorite'}}">
                                                <i class="bi {{$snippet->favorite ? 'bi-heart-fill' : 'bi-heart'}}"></i>
                                            </button>

                                        </form>

                                        <button class="btn btn-outline-secondary btn-sm copy-btn" title="Copy">
                                            <i class="bi bi-clipboard"></i>
                                        </button>

                                        <button type="button" class="btn btn-outline-secondary btn-sm edit-btn"
                                            data-bs-toggle="modal" data-bs-target="#editSnippetModal-{{ $snippet->id }}"
                                            title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('snippets.delete', $snippet->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm delete-btn" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>


                        <!-- Edit Snippet Modal -->

                        <div class="modal fade" id="editSnippetModal-{{ $snippet->id }}" tabindex="-1"
                            aria-labelledby="editSnippetModalLabel-{{ $snippet->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editSnippetModalLabel-{{ $snippet->id }}">Edit Snippet
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('snippet.update',$snippet->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="title-{{ $snippet->id }}" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title-{{ $snippet->id }}"
                                                    name="title" value="{{ $snippet->title }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description-{{ $snippet->id }}"
                                                    class="form-label">Description</label>
                                                <textarea class="form-control" id="description-{{ $snippet->id }}"
                                                    name="description" rows="3">{{ $snippet->description }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="language-{{ $snippet->id }}" class="form-label">Language</label>
                                                <select class="form-select" id="language-{{ $snippet->id }}" name="language"
                                                    required>
                                                    <option value="">Select a language</option>
                                                    <option value="html" {{ $snippet->language === 'html' ? 'selected' : '' }}>HTML
                                                    </option>
                                                    <option value="css" {{ $snippet->language === 'css' ? 'selected' : '' }}>
                                                        CSS
                                                    </option>
                                                    <option value="javascript" {{ $snippet->language === 'javascript' ? 'selected' : '' }}>JavaScript</option>
                                                    <option value="php" {{ $snippet->language === 'php' ? 'selected' : '' }}>
                                                        PHP
                                                    </option>
                                                    <option value="python" {{ $snippet->language === 'python' ? 'selected' : '' }}>
                                                        Python</option>
                                                    <option value="java" {{ $snippet->language === 'java' ? 'selected' : '' }}>Java
                                                    </option>
                                                    <option value="ruby" {{ $snippet->language === 'ruby' ? 'selected' : '' }}>Ruby
                                                    </option>
                                                    <option value="c" {{ $snippet->language === 'c' ? 'selected' : '' }}>C
                                                    </option>
                                                    <option value="cpp" {{ $snippet->language === 'cpp' ? 'selected' : '' }}>
                                                        C++
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="code-{{ $snippet->id }}" class="form-label">Code</label>
                                                <textarea class="form-control" id="code-{{ $snippet->id }}" name="code"
                                                    rows="10" required>{{ $snippet->code }}</textarea>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">Update Snippet</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No snippets found.</p>
                    @endforelse
                </div>
            </main>

            <!-- Create Snippet Modal -->
            <div class="modal fade" id="createSnippetModal" tabindex="-1" aria-labelledby="createSnippetModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createSnippetModalLabel">Create New Snippet</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('snippets.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                        rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="language" class="form-label">Language</label>
                                    <select class="form-select" id="language" name="language" required>
                                        <option value="">Select a language</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="javascript">JavaScript</option>
                                        <option value="php">PHP</option>
                                        <option value="python">Python</option>
                                        <option value="java">Java</option>
                                        <option value="ruby">Ruby</option>
                                        <option value="c">C</option>
                                        <option value="cpp">C++</option>
                                        <!-- Add more language options as needed -->
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <textarea class="form-control" id="code" name="code" rows="10" required></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Create Snippet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

            </script>
</body>

</html>