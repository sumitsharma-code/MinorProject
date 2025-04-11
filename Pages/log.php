<?php
include("/xampp/htdocs/MinorProject/php/logincheck.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="flex h-screen items-center justify-center bg-gray-100">
    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden w-2/3">
        <!-- Left Section -->
        <div class="w-1/2 bg-blue-500 flex flex-col items-center justify-center p-10">
            <div class="w-32 h-32 bg-blue-400 rounded-lg flex items-center justify-center">
                <span class="text-white text-3xl font-bold"><img src="/MinorProject/IMG/Logos/logoBlueBg.png" alt="" srcset=""></span>
            </div>
            <h1 class="text-white text-3xl font-semibold mt-4">INVENTRA</h1>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 p-10">
            <div class="flex flex-col items-center">
                <img src="/MinorProject/IMG/Logos/logo.png" class="mb-4 h-11" alt="Logo">
                <h2 class="text-2xl font-semibold">Log in to your account</h2>
                <p class="text-gray-500 mb-6">Welcome back! Please enter your details.</p>
            </div>
            <form action="/MinorProject/php/logincheck.php" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" placeholder="e.g., example@email.com" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" placeholder="********" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                    Sign in
                </button>
            </form>

            <p class="text-gray-500 mt-4 text-center">Don't have an account? <a href="/MinorProject/Pages/reg.php" class="text-blue-600">Sign up</a></p>
        </div>
    </div>
</body>

</html>