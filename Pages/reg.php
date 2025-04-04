<?php
include("/xampp/htdocs/MinorProject/php/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>

<body class="flex h-screen items-center justify-center bg-gray-100">
    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden w-2/3">
        <!-- Left Section -->
        <div class="w-1/2 bg-blue-500 flex flex-col items-center justify-center p-10">
            <div class="w-32 h-32 bg-blue-400 rounded-lg flex items-center justify-center">
                <span class="text-white text-3xl font-bold">LOGO</span>
            </div>
            <h1 class="text-white text-3xl font-semibold mt-4">TEMPNAME</h1>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 p-10">
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/50" class="mb-4" alt="Logo">
                <h2 class="text-2xl font-semibold">Create an account</h2>
                <p class="text-gray-500 mb-6">Start your inventory.</p>
            </div>
            <form action="/MinorProject/php/connection.php" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="username" placeholder="e.g., Alex Brown"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" placeholder="e.g., example@email.com"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" placeholder="********"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Get started</button>
            </form>

            <p class="text-gray-500 mt-4 text-center">Already have an account? <a href="/MinorProject/Pages/log.php" class="text-blue-600">Sign in</a></p>
        </div>
    </div>
</body>

</html>