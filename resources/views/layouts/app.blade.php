
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

        /* Add more styles as needed */
    </style>
</head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Additional styles or scripts can be included here -->
</head>
<body>
    <header>
        <!-- Your header content goes here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>
</body>
</html>
