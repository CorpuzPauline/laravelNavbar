<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Navigation Bar</title>
    <style>
        /* Reset default margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styles */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navbar styles */
        nav ul.navbar {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            background-color: #333;
        }

        nav ul.navbar li {
            margin-right: 20px;
        }

        nav ul.navbar li:last-child {
            margin-right: 0;
        }

        nav ul.navbar li a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
            transition: background-color 0.3s ease;
        }

        nav ul.navbar li a:hover {
            background-color: #555;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<nav>
    <ul class="navbar">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('settings') }}">Settings</a></li>
        <li><a href="/about-us">About Us</a></li>
        <li><a href="/contact-us">Contact Us</a></li>
        <li><a href="/news">News</a></li>
    </ul>
</nav>

</body>
</html>


