<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snippet Store - Your Code Companion</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Courier New', monospace;
            background: linear-gradient(45deg, #1a1a1a 0%, #2c3e50 100%);
            color: #e0e0e0;
        }

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

        .main-content {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            perspective: 1000px;
            overflow: hidden;
            position: relative;
        }

        .rotating-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            animation: rotate 20s infinite linear;
        }

        .card {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 200px;
            background: rgba(40, 44, 52, 0.8);
            border-radius: 10px;
            transform: translate(-50%, -50%) rotateY(var(--rotate)) translateZ(400px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 1.2em;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            border: 1px solid #61dafb;
            padding: 20px;
            text-align: center;
        }

        .card:nth-child(1) {
            --rotate: 0deg;
        }

        .card:nth-child(2) {
            --rotate: 72deg;
        }

        .card:nth-child(3) {
            --rotate: 144deg;
        }

        .card:nth-child(4) {
            --rotate: 216deg;
        }

        .card:nth-child(5) {
            --rotate: 288deg;
        }

        @keyframes rotate {
            from {
                transform: rotateY(0);
            }

            to {
                transform: rotateY(360deg);
            }
        }

        .code {
            font-family: 'Courier New', monospace;
            background-color: #282c34;
            color: #61dafb;
            padding: 5px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .icon {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2em;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0) translateX(-50%);
            }

            40% {
                transform: translateY(-30px) translateX(-50%);
            }

            60% {
                transform: translateY(-15px) translateX(-50%);
            }
        }

        .description-panel {
            min-height: 100vh;
            background-color: rgba(40, 44, 52, 0.9);
            padding: 4rem 2rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .description-panel h2 {
            color: #61dafb;
            margin-bottom: 1rem;
        }

        .description-panel p {
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8);
            text-align: center;
            font-size: 0.9em;
            padding: 1rem;
        }

        @media (max-width: 768px) {
            .card {
                width: 200px;
                height: 150px;
                font-size: 1em;
                transform: translate(-50%, -50%) rotateY(var(--rotate)) translateZ(250px);
            }

            .logo {
                font-size: 1.2em;
            }

            nav a {
                margin-left: 0.5rem;
            }

            .login-icon {
                padding: 0.3rem 0.7rem;
            }
        }

        @media (max-width: 480px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                margin-top: 1rem;
                flex-wrap: wrap;
            }

            nav a,
            .login-icon {
                margin: 0.5rem 1rem 0.5rem 0;
            }

            .card {
                width: 150px;
                height: 120px;
                font-size: 0.8em;
                transform: translate(-50%, -50%) rotateY(var(--rotate)) translateZ(200px);
            }
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

    <div class="main-content">
        <div class="container">
            <div class="rotating-container">
                <div class="card">
                    <div class="icon">💻</div>
                    <h2>Snippet Store</h2>
                    <p>Your Code Companion</p>
                </div>
                <div class="card">
                    <div class="icon">🔍</div>
                    <h3>Find</h3>
                    <p>Discover useful code snippets</p>
                </div>
                <div class="card">
                    <div class="icon">💾</div>
                    <h3>Save</h3>
                    <p>Store your favorite snippets</p>
                </div>
                <div class="card">
                    <div class="icon">🔄</div>
                    <h3>Share</h3>
                    <p>Collaborate with others</p>
                </div>
                <div class="card">
                    <div class="icon">🚀</div>
                    <h3>Boost Productivity</h3>
                    <div class="code">console.log("Welcome!");</div>
                </div>
            </div>
            <div class="scroll-indicator">▼</div>
        </div>
    </div>

    <div class="description-panel">
        <h2>Welcome to Snippet Store</h2>
        <p>
            Snippet Store is your ultimate code companion, designed to streamline your coding workflow and boost
            productivity. Our platform allows you to discover, save, and share code snippets across various programming
            languages and frameworks. Whether you're a seasoned developer or just starting out, Snippet Store provides a
            centralized hub for all your coding needs. With our intuitive interface, you can easily organize your
            snippets, collaborate with team members, and access your code library from anywhere. Say goodbye to
            reinventing the wheel and hello to efficient, reusable code with Snippet Store.
        </p>
    </div>

    <footer>
        <p>&copy; 2024 Snippet Store. All rights reserved.</p>
        <p>Contact: support@snippetstore.com</p>
    </footer>
</body>

</html>