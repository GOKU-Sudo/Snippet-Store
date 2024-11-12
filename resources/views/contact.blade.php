<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Snippet Store</title>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
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

        .contact-content {
            background-color: #21262d;
            border-radius: 8px;
            padding: 2rem;
            border: 1px solid #30363d;
        }

        .contact-title {
            color: #5ce1e6;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .contact-text {
            margin-bottom: 2rem;
            text-align: center;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: #5ce1e6;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.75rem;
            background-color: #2d333b;
            border: 1px solid #30363d;
            border-radius: 4px;
            color: #fff;
            font-family: inherit;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #5ce1e6;
        }

        .form-textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: #5ce1e6;
            color: #0d1117;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            width: 100%;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #4ac7cc;
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
        <div class="contact-content">
            <h1 class="contact-title">Contact Us</h1>
            <p class="contact-text">
                Have questions or suggestions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
            <form class="contact-form" method="POST" action="#">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Message</label>
                    <textarea id="message" name="message" class="form-textarea" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>