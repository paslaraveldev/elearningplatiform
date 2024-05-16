<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Website</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

.hero {
    position: relative; /* Ensure the container has a positioning context */
    background-image: url('/assets/003.jpg'); /* Adjust the path to match your folder structure */
    background-size: cover;
    background-position: center;
    color: #000; /* Change text color to black */
    padding: 150px 0;
    text-align: center;
}

.hero::before {
    content: ""; /* Required for the pseudo-element */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('/assets/003.jpg'); /* Adjust the path to match your folder structure */
    background-size: cover;
    background-position: center;
    filter: blur(5px); /* Adjust the blur radius as needed */
    z-index: -1; /* Ensure the pseudo-element is behind other content */
}




.hero h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 40px;
}

.hero a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.hero a:hover {
    background-color: #0056b3;
}




        footer {
            background-color: #216;
            color: #90EE90;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1>E-Learning Website</h1>
        
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif

                @endauth
                <li><a href="{{ route('course') }}">Courses</a></li>
                <li><a href="/aboutus">About Us</a></li>
            </ul>
        </nav>
    </div>
@yield("content")

<footer>
    <div class="container">
        <p>&copy; 2024 Joan E-Learning Website. All rights reserved.</p>
        <p>Contact us: contact@joanelearningwebsite.com | Phone: 256-743458230</p>
        <a href="/">Home</a> | <a href="{{ route('login') }}">Login</a> | <a href="/aboutus">About Us</a>
    </div>
</footer>

</body>
</html>
