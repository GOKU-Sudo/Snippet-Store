<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Snippet Store</title>
    <style>
         header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 1rem;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: #61dafb;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            color: #e0e0e0;
            text-decoration: none;
            margin-left: 1rem;
        }

        nav a:hover {
            color: #61dafb;
        }
        .login-icon {
            margin-left: 1rem;
            background-color: #61dafb;
            color: #282c34;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-icon:hover {
            background-color: #282c34;
            color: #61dafb;
        }
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier New', monospace;
            background-color: #1a1f25;
            color: #fff;
            line-height: 1.6;
        } */
        body,
        html {
 
            margin: 0;
            font-family: 'Courier New', monospace;
            background: linear-gradient(45deg, #1a1a1a 0%, #2c3e50 100%);
            color: #e0e0e0;
            line-height: 1.3;
        }




        .container {
            max-width: 800px;
            margin: 5rem auto;
            padding: 0 2rem;
        }

        .about-content {
            background-color: #21262d;
            border-radius: 8px;
            padding: 2rem;
            border: 1px solid #30363d;
        }

        .about-title {
            color: #5ce1e6;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .about-text {
            margin-bottom: 1.5rem;
        }

        .feature-list {
            list-style: none;
            margin: 2rem 0;
        }

        .feature-list li {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            position: relative;
        }

        .feature-list li::before {
            content: '>';
            color: #5ce1e6;
            position: absolute;
            left: 0;
        }
    </style>
</head>
<body>
<header>
        <div class="logo">{ Snippet Store }</div>
        <nav>
            <!-- <a href="#">Home</a> -->
            <!-- <a href="#">Browse</a> -->
            <a href="{{route('snippet.about')}}">About</a>
            <a href="{{route('snippet.contact')}}">Contact</a>
            <a href="{{route('account.login')}}">
                <div class="login-icon" title="Login">Login</div>
        </nav></a>

    </header>

    <div class="container">
        <div class="about-content">
            <h1 class="about-title">About Snippet Store</h1>
            <p class="about-text">
                Snippet Store is a platform designed for developers who value efficiency and collaboration. 
                Our mission is to streamline the coding workflow by providing a centralized hub for storing, 
                managing, and sharing code snippets across different programming languages and frameworks.
            </p>
            <p class="about-text">
                Founded by developers for developers, we understand the importance of having quick access to 
                frequently used code patterns and solutions. Our platform helps eliminate redundant work and 
                promotes code reuse within teams and the broader developer community.
            </p>
            <ul class="feature-list">
                <li>Store and organize your code snippets</li>
                <li>Share snippets with team members</li>
                <li>Support for multiple programming languages</li>
                <li>Syntax highlighting and code formatting</li>
                <li>Version control and snippet history</li>
                <li>Secure and reliable storage</li>
                <li>Cross-platform accessibility</li>
            </ul>
        </div>
    </div>
</body>
</html>