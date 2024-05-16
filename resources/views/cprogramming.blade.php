<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        header, footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1, footer p {
            margin: 0;
        }

        footer p {
            margin: 5px 0;
        }

        .note-list {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .note-list li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            background-image: url('/assets/001.jpg'); /* Path to your background image */
        }

        .note-list li a {
            color: #333;
            text-decoration: none;
        }

    </style>
</head>
<body>

<header>
    <h1>Course Notes</h1>
     <h2>
      <a href="courses.html">proceed to view courses</a>
        <a href="home page.html">back to home</a>
        <a href="login.html">proceed to login</a>
    </h2>
        
</header>

<div class="container">
    <table class="table mt-3">
        <thead>
            <tr>
                  <th>Title</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>File Path</th>
                                        <th>Image Path</th>
                                        <th>Tutor Name</th>
                                        <th>File Size</th>
                                        <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cprograming as $skill)
            <tr>
                <td>{{ $skill->title }}</td>
                <td>{{ $skill->type }}</td>
                <td>{{ $skill->type }}</td>
                                            <td><a href="{{ $skill->file_path }}" target="_blank">{{ $skill->file_path }}</a></td>
                                            <td><a href="{{ $skill->image_path }}" target="_blank">{{ $skill->image_path }}</a></td>
                                            <td>{{ $skill->tutor_name }}</td>
                                            <td>{{ $skill->file_size }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<footer>
    <p>&copy; 2024 All rights reserved. | <a href="index.html">Home</a> | <a href="login_form.html">Login</a> | <a href="courses.html">Courses</a> | <a href="notes.html">Notes</a></p>
</footer>

</body>
</html>
