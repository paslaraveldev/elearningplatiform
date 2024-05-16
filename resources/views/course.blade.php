<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('/assets/002.jpg'); /* Path to your background image */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        header, footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .course-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }

        .course-card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 200px;
        }

        .course-card h2 {
            margin-bottom: 10px;
        }

        .course-link {
            color: #90EE90;
            text-decoration: underline;
        }

        footer {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<header>
    <h1>Choose a Course</h1>
     <h3> 
        <a href="login.html">proceed to login</a>
        <a href="home page.html">back to home</a>
        <a href="notes.html">proceed to view coursenotes</a>
    </h3>
    
</header>

<div class="container">
    <div class="course-list">
        <div class="course-card">
            <h2>{{ $courses[0]->title }}</h2>
            <p>{{ $courses[0]->description }}</p>
            <a href="{{ route('communicationskills') }}" class="course-link">View {{ $courses[0]->title }} Notes</a>
        </div>
        <div class="course-card">
            <h2>{{ $courses[1]->title }}</h2>
            <p>{{ $courses[1]->description }}</p>
            <a href="{{ route('cprograming') }}" class="course-link">View {{ $courses[1]->title }} Notes</a>
        </div>
        

      <div class="course-card">
            <h2>{{ $courses[2]->title }}</h2>
            <p>{{ $courses[2]->description }}</p>
            <a href="{{ route('pe') }}" class="course-link">View {{ $courses[2]->title }} Notes</a>
        </div>
        <div class="course-card">
            <h2>Fundamentals of ICT</h2>
            <p>Description of the course...</p>
            <a href="ict_notes.html" class="course-link">View Fundamentals of ICT Notes</a>
        </div>
        <div class="course-card">
            <h2>Fundamentals of Information System</h2>
            <p>Description of the course...</p>
            <a href="information_system_notes.html" class="course-link">View Fundamentals of Information System Notes</a>
        </div>
        <div class="course-card">
            <h2>Political Economy</h2>
            <p>Description of the course...</p>
            <a href="political_economy_notes.html" class="course-link">View Political Economy Notes</a>
        </div>
        <div class="course-card">
            <h2>Web Development</h2>
            <p>Description of the course...</p>
            <a href="web_development_notes.html" class="course-link">View Web Development Notes</a>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 All rights reserved. | <a href="index.html">Home</a> | <a href="login_form.html">Login</a> | <a href="notes.html">Notes</a></p>
</footer>

</body>
</html>
