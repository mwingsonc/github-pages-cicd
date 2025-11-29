<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Barebones PHP Page!</h1>

    <?php
        // Get the current date and time
        $currentDateTime = date("F j, Y, g:i a");

        // Set a simple variable for the welcome message
        $userName = "Guest";

        // Display the dynamic content using echo
        echo "<p>Hello, **$userName**.</p>";
        echo "<p>Today is: **$currentDateTime**</p>";
    ?>

    <p>Welcome! This page is PHP.</p>
</body>
</html>